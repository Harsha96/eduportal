<?php
$dir = __DIR__;
$skipFiles = ['index.php', 'refactor_includes.php', 'generate_boards.js'];
$phpFiles = glob($dir . DIRECTORY_SEPARATOR . '*.php');

$processed = 0;
$skipped = 0;
$errors = [];

foreach ($phpFiles as $filePath) {
    $filename = basename($filePath);
    
    if (in_array($filename, $skipFiles)) {
        $skipped++;
        continue;
    }
    
    $content = file_get_contents($filePath);
    
    if (strpos($content, "include 'components/header.php'") !== false) {
        echo "[SKIP] $filename (already done)\n";
        $skipped++;
        continue;
    }
    
    if (stripos($content, '<!DOCTYPE html>') === false) {
        echo "[SKIP] $filename (not HTML)\n";
        $skipped++;
        continue;
    }
    
    // Extract title
    $pageTitle = 'Unidemy Global';
    if (preg_match('/<title>(.*?)<\/title>/si', $content, $m)) {
        $pageTitle = trim($m[1]);
    }
    
    // Extract description
    $pageDescription = '';
    if (preg_match('/<meta\s+name=["\']description["\']\s+content=["\'](.*?)["\']/si', $content, $m)) {
        $pageDescription = trim($m[1]);
    }
    
    // Extract additional head content after style.css link, before </head>
    $additionalHead = '';
    if (preg_match('/style\.css["\']>\s*\r?\n(.*?)<\/head>/si', $content, $m)) {
        $extra = trim($m[1]);
        if (!empty($extra)) {
            $additionalHead = $extra;
        }
    }
    
    // Find end of </nav>
    $navEndPos = false;
    $pos = strpos($content, '</nav>');
    if ($pos !== false) {
        // Move past </nav> and any trailing whitespace/newline
        $navEndPos = $pos + strlen('</nav>');
        while ($navEndPos < strlen($content) && ($content[$navEndPos] === "\r" || $content[$navEndPos] === "\n")) {
            $navEndPos++;
        }
    }
    
    if ($navEndPos === false) {
        echo "[ERROR] $filename - no </nav>\n";
        $errors[] = $filename;
        continue;
    }
    
    // Find footer start - look for <!-- Footer --> comment, <!-- Global Widgets --> or <footer
    $footerStartPos = false;
    
    $markers = ['<!-- Footer -->', '<!-- Footer-->', '<!-- Global Widgets -->'];
    foreach ($markers as $marker) {
        $p = strpos($content, $marker);
        if ($p !== false) {
            if ($footerStartPos === false || $p < $footerStartPos) {
                $footerStartPos = $p;
            }
        }
    }
    
    // If no comment found, try <footer as last resort
    if ($footerStartPos === false) {
        $p = strrpos($content, '<footer');
        if ($p !== false) {
            $footerStartPos = $p;
        }
    }
    
    if ($footerStartPos === false) {
        echo "[ERROR] $filename - no footer\n";
        $errors[] = $filename;
        continue;
    }
    
    // Go back to start of line
    while ($footerStartPos > 0 && $content[$footerStartPos - 1] !== "\n") {
        $footerStartPos--;
    }
    
    // Extract page-specific scripts between footer area and </body>
    $pageScripts = '';
    $footerArea = substr($content, $footerStartPos);
    
    // Find inline scripts that are page-specific (not lucide, not scrollToTop)
    preg_match_all('/<script>(.+?)<\/script>/si', $footerArea, $scriptMatches, PREG_SET_ORDER);
    $customScripts = [];
    foreach ($scriptMatches as $sm) {
        $scriptBody = $sm[1];
        // Skip standard scripts
        if (trim($scriptBody) === 'lucide.createIcons();') continue;
        if (strpos($scriptBody, 'scrollToTopContainer') !== false && strpos($scriptBody, 'scrollTimeout') !== false) continue;
        $customScripts[] = $sm[0];
    }
    
    // Check for modals (like publish-modal in blog.php)
    $customHTML = [];
    if (preg_match('/<div\s+id="publish-modal"[\s\S]*?<\/div>\s*<\/div>\s*<\/div>/i', $footerArea, $modalMatch)) {
        $customHTML[] = $modalMatch[0];
    }
    
    if (!empty($customScripts) || !empty($customHTML)) {
        $parts = array_merge($customHTML, $customScripts);
        $pageScripts = "\n" . implode("\n\n", $parts) . "\n";
    }
    
    // Get body content between nav and footer
    $bodyContent = substr($content, $navEndPos, $footerStartPos - $navEndPos);
    
    // Build new file
    $escapedTitle = str_replace("'", "\\'", $pageTitle);
    $escapedDesc = str_replace("'", "\\'", $pageDescription);
    
    $newContent = "<?php\n";
    $newContent .= "\$pageTitle = '$escapedTitle';\n";
    
    if (!empty($pageDescription)) {
        $newContent .= "\$pageDescription = '$escapedDesc';\n";
    }
    
    if (!empty($additionalHead)) {
        $newContent .= "\$additionalHead = <<<'HEADCONTENT'\n";
        $newContent .= $additionalHead . "\n";
        $newContent .= "HEADCONTENT;\n";
    }
    
    $newContent .= "include 'components/header.php';\n";
    $newContent .= "?>\n";
    $newContent .= $bodyContent;
    
    if (!empty($pageScripts)) {
        $newContent .= $pageScripts;
    }
    
    $newContent .= "<?php include 'components/footer.php'; ?>\n";
    
    file_put_contents($filePath, $newContent);
    echo "[OK] $filename\n";
    $processed++;
}

echo "\n=== Summary ===\n";
echo "Processed: $processed\n";
echo "Skipped: $skipped\n";
echo "Errors: " . count($errors) . "\n";
if (!empty($errors)) {
    echo "Failed: " . implode(', ', $errors) . "\n";
}
