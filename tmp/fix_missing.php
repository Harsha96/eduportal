<?php
/**
 * Surgical fix for missing onclick handlers.
 */

function fix_file($filename, $search, $onclick) {
    if (!file_exists($filename)) return;
    $content = file_get_contents($filename);
    
    // We search for a unique block that contains the button without onclick
    // and inject it.
    // In neet.php/iit-jee.php, these buttons are within a specific flex container.
    
    // Let's use a simpler approach: match the button that is preceded by the specific language badge.
    $pattern = '/(' . preg_quote($search) . '.*?<button\s+)(class="[^"]+")/s';
    $replacement = '$1onclick="openEnrollmentModal(\'' . $onclick . '\')" $2';
    
    $new_content = preg_replace($pattern, $replacement, $content, 1);
    
    if ($new_content !== null && $new_content !== $content) {
        file_put_contents($filename, $new_content);
        echo "Fixed $filename for $onclick\n";
    } else {
        echo "FAILED to fix $filename for $onclick\n";
    }
}

// NEET missing
fix_file('neet.php', 'à¤¹à¤¿à¤¨à¥ à¤¦à¥€', 'NEET - Class 11 Hindi');
fix_file('neet.php', 'ENGLISH', 'NEET - Class 11 English');

// IIT-JEE missing
fix_file('iit-jee.php', 'à¤¹à¤¿à¤¨à¥ à¤¦à¥€', 'IIT-JEE - Class 11 Hindi');
fix_file('iit-jee.php', 'ENGLISH', 'IIT-JEE - Class 11 English');
