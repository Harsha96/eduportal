import os

def swap_cards(filepath, start_marker, middle_marker, end_marker):
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    # Apply Science, Commerce & Arts replacements
    content = content.replace('alt="Commerce & Arts Stream"', 'alt="Science, Commerce & Arts Stream"')
    content = content.replace('>Commerce & Arts</span>', '>Science, Commerce & Arts</span>')
    content = content.replace('- Commerce & Arts</span>', '- Science, Commerce & Arts</span>')

    start_idx = content.find(start_marker)
    middle_idx = content.find(middle_marker)
    end_idx = content.find(end_marker, middle_idx)

    if start_idx != -1 and middle_idx != -1 and end_idx != -1:
        # engineering and medical blocks
        block1 = content[start_idx:middle_idx]
        # career block
        block2 = content[middle_idx:end_idx]

        # Swap them
        new_content = content[:start_idx] + block2 + block1 + content[end_idx:]
        
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(new_content)
        print(f"Successfully processed {filepath}")
    else:
        print(f"Error processing {filepath}: markers not found.")
        print(f"start: {start_idx}, middle: {middle_idx}, end: {end_idx}")

# CBSE
swap_cards(
    r"c:\xampp\htdocs\eduportal\cbse.php",
    "<!-- Grade 11-12 Card 1: Engineering -->",
    "<!-- Career Achievers Card (Class 11-12) -->",
    "<!-- Empty State Placeholder -->"
)

# ICSE
swap_cards(
    r"c:\xampp\htdocs\eduportal\icse.php",
    "<!-- IIT-JEE Excellence Card (Class 11) -->",
    "<!-- Career Achievers Card (Class 11-12) -->",
    "</main>"
)

# Karnataka
swap_cards(
    r"c:\xampp\htdocs\eduportal\karnataka-board.php",
    "<!-- IIT-JEE Excellence Card (Class 11) -->",
    "<!-- Career Achievers Card (Class 11-12) -->",
    "</main>"
)
