<?php
/**
 * Script to reliably inject onclick handlers for the Enrollment Modal.
 */

function update_button($filename, $course_id_pattern, $program_name) {
    if (!file_exists($filename)) {
        echo "File $filename not found.\n";
        return;
    }
    
    $content = file_get_contents($filename);
    
    // Pattern to find the course title and then the next button
    // This is more robust than matching exact whitespace
    $pattern = '/(' . preg_quote($course_id_pattern) . '.*?<button\s+)(class="[^"]+")/s';
    $replacement = '$1onclick="openEnrollmentModal(\'' . $program_name . '\')" $2';
    
    $new_content = preg_replace($pattern, $replacement, $content, 1);
    
    if ($new_content !== null && $new_content !== $content) {
        file_put_contents($filename, $new_content);
        echo "Updated $filename for $course_id_pattern\n";
        return true;
    } else {
        echo "FAILED to update $filename for $course_id_pattern\n";
        return false;
    }
}

// CBSE
update_button('cbse.php', 'Explorers Foundation', 'CBSE - Explorers Foundation (Class 1-5)');
update_button('cbse.php', 'Skill Builders Program', 'CBSE - Skill Builders Program (Class 6-8)');
update_button('cbse.php', 'Olympiad Prep', 'CBSE - Olympiad Prep (Class 6-8)');
update_button('cbse.php', 'Exam Warriors', 'CBSE - Exam Warriors (Class 9-10)');
update_button('cbse.php', 'IIT-JEE / NEET Starter', 'CBSE - IIT-JEE / NEET Starter (Class 9-10)');

// ICSE
update_button('icse.php', 'Explorers Foundation', 'ICSE - Explorers Foundation (Class 1-5)');
update_button('icse.php', 'Skill Builders Program', 'ICSE - Skill Builders Program (Class 6-8)');
update_button('icse.php', 'Olympiad Prep', 'ICSE - Olympiad Prep (Class 6-8)');
update_button('icse.php', 'Exam Warriors', 'ICSE - Exam Warriors (Class 9-10)');
update_button('icse.php', 'IIT-JEE / NEET Starter', 'ICSE - IIT-JEE / NEET Starter (Class 9-10)');

// Karnataka Board
update_button('karnataka-board.php', 'Explorers Foundation', 'Karnataka Board - Explorers Foundation (Class 1-5)');
update_button('karnataka-board.php', 'Skill Builders Program', 'Karnataka Board - Skill Builders Program (Class 6-8)');
update_button('karnataka-board.php', 'Olympiad Prep', 'Karnataka Board - Olympiad Prep (Class 6-8)');
update_button('karnataka-board.php', 'Exam Warriors', 'Karnataka Board - Exam Warriors (Class 9-10)');
update_button('karnataka-board.php', 'IIT-JEE / NEET Starter', 'Karnataka Board - IIT-JEE / NEET Starter (Class 9-10)');

// NEET
// NEET and IIT-JEE have different titles or badges.
// Let's use the unique text for them.
update_button('neet.php', 'Class 11 + 12 NEET', 'NEET - Class 11 + 12');
update_button('neet.php', 'Class 11 NEET</span>.*?à¤¹à¤¿à¤¨à¥ à¤¦à¥€', 'NEET - Class 11 Hindi');
update_button('neet.php', 'Class 11 NEET</span>.*?ENGLISH', 'NEET - Class 11 English');
update_button('neet.php', 'Repeater NEET', 'NEET - Repeater Program');

// IIT-JEE
update_button('iit-jee.php', 'Class 11 + 12 JEE', 'IIT-JEE - Class 11 + 12');
update_button('iit-jee.php', 'Class 11 JEE</span>.*?à¤¹à¤¿à¤¨à¥ à¤¦à¥€', 'IIT-JEE - Class 11 Hindi');
update_button('iit-jee.php', 'Class 11 JEE</span>.*?ENGLISH', 'IIT-JEE - Class 11 English');
update_button('iit-jee.php', 'Repeater JEE', 'IIT-JEE - Repeater Program');

echo "Done.\n";
