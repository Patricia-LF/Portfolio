<?php
$projects = [
    'wack-a-rabbit' => [
        'title' => 'Wack-a-rabbit',
        'description' => 'Side project - a fun take on the classic Whack-a-Mole',
        'longDescription' => 'Wack-a-Rabbit is a fun take on the classic Whack-a-Mole game — swap the moles for rabbits and the mole hills for rabbit holes! The goal is to hit as many rabbits as possible within 30 seconds as they randomly pop up from their holes.

        I built this as a side project to practice JavaScript beyond the course assignments, applying the skills I had picked up during the semester in a more playful context.

        The trickiest part was getting the z-index and positioning right so that the rabbits appear to come up from inside the holes rather than popping up in front of or behind them — a small detail that makes a big visual difference for the feel of the game.

        There is plenty of room to expand the game — multiple difficulty levels with increasing rabbit speed, user accounts with saved scores, and a leaderboard are all ideas I would like to explore if I return to the project.',
        'technologies' => ['PHP', 'JavaScript', 'HTML', 'CSS'],
        'demolink' => 'https://wu-project.se/wack-a-rabbit/',
        'githubLink' => 'https://github.com/Patricia-LF/wack-a-rabbit',
        'image' => 'wackarabbit-img.jpg',
        'mockup' => 'wack-a-rabbit-desktop.png',
        'mock-mob' => 'wackarabbit-mob.png',
    ],

    'CloudOps' => [
        'title' => 'CloudOps',
        'description' => 'Admin application',
        'meta' => 'Group project – 2 people | 3 weeks',
        'longDescription' => 'CloudOps is an admin panel for a vape product inventory, built with Laravel. The application manages products across categories including E-liquids and Nicotine Salts, organized by brands, flavors and colors.

        Features
        The panel includes an overview page with product stats and filtering, a product table with individual product pages, and dedicated management pages for brands, categories, flavors and colors — each with full CRUD functionality. Access is protected by email and password authentication, and navigation is handled through a sidebar.

        My responsibilities
        I created the migrations for brands, colors, flavors and the flavor_products pivot table, as well as the models, factories and controllers for brands, flavors and colors. I was also responsible for the overall layout and styling of the application — structure, visual design and CSS architecture.
        On the collaborative side, we both worked on error handling and reviewed each other’s code through pull requests. We used GitHub issues and branches throughout the project to keep our workflow structured.

        Challenges
        Working with Eloquent relationships and pivot tables required careful planning of the database structure. Keeping the styling consistent across multiple views while both of us were actively developing new features at the same time was also a challenge that required good communication and clear code reviews.
        
        Note: The site is not optimized for mobile, as it was not a requirement for the assignment.',
        'technologies' => ['PHP', 'Laravel', 'JavaScript', 'HTML', 'CSS'],
        'demolink' => '',
        'githubLink' => 'https://github.com/Patricia-LF/CloudOps.git',
        'image' => 'cloudops-img.jpg',
        'mockup' => 'cloudops - desktop.png',
        'mock-mob' => 'cloudops-mob.png',
    ],

    'plan2plate' => [
        'title' => 'Plan2Plate',
        'description' => 'Recipe-search application',
        'meta' => 'Group project – 2 people | 2 weeks',
        'longDescription' => 'Plan2Plate is a recipe search application built with Node.js, using the Spoonacular API to fetch and display recipes based on user input.

        I was responsible for all frontend development and shaping the visual identity of the application, from layout design to creating the logo in Figma. On the backend side, I implemented the integration against the Spoonacular REST API, developed server logic for handling and filtering API responses, and set up email functionality using SMTP and Nodemailer.

        Working with asynchronous data handling and extensive error handling was a key challenge — making sure the app handled failed API calls gracefully without breaking the user experience.',
        'technologies' => ['JavaScript', 'Node.js', 'HTML', 'CSS'],
        'demolink' => 'https://plan2plate-recipes.vercel.app/',
        'githubLink' => 'https://github.com/Patricia-LF/plan2plate.git',
        'image' => 'plan2plate-img.jpg',
        'mockup' => 'plan2plate-desktop.png',
        'mock-mob' => 'plan2plate-mob.png',
    ],

    'kinforma' => [
        'title' => 'Kinforma',
        'description' => 'E-commerce website',
        'meta' => 'Group project – 8 people, 3 web developers | 4 weeks',
        'longDescription' => 'Kinforma is an e-commerce website for lifestyle products, developed in collaboration with design students based on a Figma prototype.

        I developed the landing page and parts of the product page, implemented the footer and dynamic product carousels, and structured the product data in arrays for frontend display.

        Working from a Figma design created by others required close attention to detail to make sure the implementation matched the intended design. Collaborating across disciplines also meant adapting to different workflows and ways of communicating.. 
        
        Since it was our first group project with other educations, we learnt a lot about how to work in a team.',
        'technologies' => ['PHP', 'HTML', 'CSS', 'Figma'],
        'demolink' => 'https://wu-project.se/kinforma/',
        'githubLink' => 'https://github.com/Patricia-LF/kinforma',
        'mockup' => 'kinforma-desktop.png',
        'mock-mob' => 'kinforma-mob.png',
    ],

    'yrgopelag' => [
        'title' => 'Yrgopelag',
        'description' => 'Hotel booking system',
        'meta' => '3 weeks',
        'longDescription' => 'Yrgopelago is a hotel booking system built with PHP and SQLite, featuring room availability, bookings, add-ons and a credit-based payment system.

        I designed the full database structure for users, rooms, bookings and add-ons, and implemented the booking logic including availability checks and validation. I also built the admin page where prices and features could be managed.

        Getting the availability logic right was tricky — making sure overlapping bookings were correctly handled in the database required careful planning of the query structure.
        
        Note: The site is not optimized for mobile, as it was not a requirement for the assignment. This is something I plan to address if I revisit the project.',
        'technologies' => ['PHP', 'JavaScript', 'HTML', 'CSS'],
        'demolink' => 'https://wu-project.se/yrgopelag/',
        'githubLink' => 'https://github.com/Patricia-LF/yrgopelag.git',
        'image' => 'yrgopelag-img.jpg',
        'mockup' => 'yrgopelag-desktop.png',
        'mock-mob' => 'yrgopelag-mob.png',
    ],

    'simplyseries' => [
        'title' => 'Simply Series',
        'description' => 'TV show search application',
        'meta' => '2 weeks',
        'longDescription' => 'SimplySeries is a TV show search application built with JavaScript, using the TVMaze public API. The site features a search page, a results page displaying the best matching shows as cards, and an individual show page where you can explore seasons and episodes in detail.

        As an individual project, I handled everything from the API integration and JavaScript logic to the page structure and styling.

        This was my first real encounter with JavaScript, and I found it genuinely difficult at first — particularly understanding how asynchronous code and fetch requests work. I used AI as a learning tool to understand the concepts rather than just getting the answers, which helped me work through the logic step by step. In the end it turned out to be one of my more successful early projects, and it gave me a much stronger foundation in JavaScript going forward.',
        'technologies' => ['JavaScript', 'HTML', 'CSS'],
        'demolink' => 'https://wu-project.se/API/',
        'githubLink' => 'https://github.com/Patricia-LF/API.git',
        'image' => 'simplyseries-img.jpg',
        'mockup' => 'simplyseries-desktop.png',
        'mock-mob' => 'simplyseries-mob.png',
    ],

    'futurity' => [
        'title' => 'Futurity',
        'description' => 'Cinema website with sci-fi theme',
        'meta' => 'Group project – 3 people',
        'longDescription' => 'Futurity is a cinema website with a sci-fi theme, built as part of a course focused on learning the fundamentals of Figma and design collaboration. The site features carousels for now-showing and upcoming films, food and drink offers, and a newsletter sign-up.

        Two out of three group members, myself included, were particularly engaged in the design work and each created our own Figma drafts. We then combined the best elements from both into a final design. On the development side, I was responsible for the film page and its mobile version, parts of the landing page, and a hamburger menu for mobile navigation.

        The biggest technical challenge was Git — we ran into several merge conflicts that took time to resolve, which was a valuable lesson in version control and team workflows. We were also working on Kinforma simultaneously, which meant time was stretched a bit thin. Since the course focus was on design rather than code, some parts of the site are not fully functional, but the Figma-to-code workflow was a great learning experience.',
        'technologies' => ['Figma', 'PHP', 'CSS'],
        'demolink' => 'https://wu-project.se/bio-hemsida/',
        'githubLink' => 'https://github.com/Patricia-LF/bio-hemsida',
        'image' => 'bio-futurity-img.jpg',
        'mockup' => 'bio-futurity-desktop.png',
        'mock-mob' => 'futurity-mob.png',
    ],
];
