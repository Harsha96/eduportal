const fs = require('fs');
const path = require('path');
const baseDir = 'c:\\study\\knowme\\unidemy-html 1.2\\unidemy-html';

try {
    const content = fs.readFileSync(path.join(baseDir, 'explorers.html'), 'utf8');

    const pages = [
        {
            file: 'cbse.html',
            title: 'CBSE Programs',
            board: 'CBSE Board',
            header: 'CBSE',
            desc: 'Ignite curiosity and build strong foundational skills with our interactive CBSE curriculum for young minds.',
            tag: 'CBSE'
        },
        {
            file: 'icse.html',
            title: 'ICSE Programs',
            board: 'ICSE Board',
            header: 'ICSE',
            desc: 'Ignite curiosity and build strong foundational skills with our comprehensive ICSE syllabus for young minds.',
            tag: 'ICSE'
        },
        {
            file: 'karnataka-board.html',
            title: 'Karnataka Board Programs',
            board: 'Karnataka Board',
            header: 'KARNATAKA BOARD',
            desc: 'Ignite curiosity and build strong foundational skills with our dedicated State Board curriculum for young minds.',
            tag: 'Karnataka Board'
        }
    ];

    pages.forEach(p => {
        let newContent = content
            .replace('Explorers Programs | Unidemy Global', p.title + ' | Unidemy Global')
            .replace('Explorers (Class 1-5)', p.board)
            .replace('EXPLORERS', p.header)
            .replace('Ignite curiosity and build strong foundational skills with our interactive and expertly crafted courses for young minds.', p.desc)
            .replaceAll('Explorers</h3>', p.tag + '</h3>');

        fs.writeFileSync(path.join(baseDir, p.file), newContent);
    });

    console.log('Successfully reverted board pages to the original Explorers layout!');
} catch (e) {
    console.error("Error generating pages:", e);
}
