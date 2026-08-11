<?php
$projects = [
    'Booking system' => [
        'title' => 'Booking system',
        'description' => 'Side project - A full-stack booking system with a C# REST API, React frontend, and calendar view.',
        'longDescription' => 'This is a side project I started during the summer of 2026 to deepen my understanding of C# and backend development.

The backend is built with ASP.NET Core Web API and Entity Framework Core, connected to a SQLite database. The frontend is built with React and TypeScript using Vite, with React Router for navigation and CSS Modules for styling.

The system supports creating and managing customers, services, and bookings — including automatic end time calculation based on service duration, double booking prevention, and input validation on both frontend and backend.

The booking page features a weekly calendar view built with FullCalendar, with the option to switch between calendar and table view. The app is deployed with the backend on Railway and frontend on Vercel.',

        'technologies' => ['C#', 'React', 'TypeScript', 'CSS modules', 'Vite'],
        'demolink' => 'https://booking-system-three-inky.vercel.app/',
        'githubLink' => 'https://github.com/Patricia-LF/booking-system',
        'image' => 'in-progress.png',
        'mockup' => 'booking-desktop.png',
        'mock-mob' => 'booking-mob.png',
    ],

    'TextTV online' => [
        'title' => 'TextTV online',
        'description' => 'Side project — a modern, accessible take on TextTV, built with Node.js. Currently in progress.',
        'longDescription' => 'I started this project during the summer to deepen my understanding of Node.js. My dad still reads TextTV every day, and I know a lot of older people do too — so the idea was to bring that same simplicity online, but with a more modern look and stronger focus on accessibility (WCAG).
        
        The app fetches live content from a public TextTV API and presents it through clear, navigable sections: domestic news, foreign news, sports, and weather. The start page gives a quick overview of each, with dedicated pages for the full content.
        
        Currently working on: a page-number search feature, and refining the content layout and styling section by section.
        
        Planned features: improved error handling for the API integration, and a settings panel for font size and contrast — small touches aimed at making the experience more comfortable for less tech-savvy users.',

        'technologies' => ['Node.js', 'CSS'],
        'demolink' => '',
        'githubLink' => 'https://github.com/Patricia-LF/textTVonline',
        'image' => 'in-progress.png',
        'mockup' => 'in-progress-textTV-desktop.png',
        'mock-mob' => 'in-progress-textTV-mob.png',
    ],

    'Student portfolio' => [
        'title' => 'Student portfolio',
        'description' => 'Side project — a portfolio website for a graphic design student, built with a custom WordPress theme.',
        'longDescription' => 'Alma, a graphic design and production student at Yrgo, needed a portfolio site she could manage herself after launch. I took on this project as a way to deepen my WordPress skills outside of school.

I planned and led the project from start to finish in close collaboration with Alma — from concept and design to development and deployment — with her input and approval at every step.

The site is built with a fully custom WordPress theme (no page builder), with a lightbox gallery, video support, a fullscreen mobile navigation overlay, and a reusable page template so Alma can add new projects directly from the WordPress admin without touching any code.',

        'technologies' => ['WordPress', 'PHP', 'CSS', 'JavaScript'],
        'demolink' => 'http://hammargraphics.com/',
        'githubLink' => 'https://github.com/Patricia-LF/Almas-portfolio',
        'image' => 'portfolio.jpg',
        'mockup' => 'portfolio-desktop.png',
        'mock-mob' => 'portfolio-mob.png',
    ],

    'wack-a-rabbit' => [
        'title' => 'Wack-a-rabbit',
        'description' => 'Side project - a fun take on the classic Whack-a-Mole',
        'longDescription' => 'Wack-a-Rabbit is a fun take on the classic Whack-a-Mole game — swap the moles for rabbits and the mole hills for rabbit holes! The goal is to hit as many rabbits as possible within 30 seconds as they randomly pop up from their holes.

        I built this as a side project to practice JavaScript beyond the course assignments, applying the skills I had picked up during the semester in a more playful context.

        The trickiest part was getting the z-index and positioning right so that the rabbits appear to come up from inside the holes rather than popping up in front of or behind them — a small detail that makes a big visual difference for the feel of the game.

        There is plenty of room to expand the game — multiple difficulty levels with increasing rabbit speed, user accounts with saved scores, and a leaderboard are all ideas I would like to explore if I return to the project.',

        'technologies' => ['PHP', 'JavaScript', 'HTML', 'CSS'],
        'demolink' => 'https://patriciafrykberg.se/wack-a-rabbit/',
        'githubLink' => 'https://github.com/Patricia-LF/wack-a-rabbit',
        'image' => 'wackarabbit-img.jpg',
        'mockup' => 'wack-a-rabbit-desktop.png',
        'mock-mob' => 'wack-a-rabbit-mob.png',
    ],

    'Runtime terror' => [
        'title' => 'Runtime Terror',
        'description' => 'Haunted house attraction built for the Yrgo Tivoli',
        'meta' => 'Group project – 3 people | 3 weeks',
        'longDescription' => 'Runtime Terror is a haunted house attraction built as part of the Yrgo Tivoli project — a shared amusement park platform where each group contributed their own game or ride. The attraction takes the player through four rooms of horrors: a graveyard, a doll room, a spider room and a clown room, each with its own interactions, animations and sound design.
        
        Features
        Each room has unique mechanics — clicking gravestones to trigger effects in the graveyard, making the doll speak (and risking a jumpscare) in the doll room, removing spider webs and finding and clicking on a ghost in the spider room, and popping balloons to keep the clown at bay in the clown room. Rooms are connected by animated door transitions with crossfading ambient sound. A context-sensitive help button in each room meets WCAG 3.3.5 requirements, and the full game is keyboard navigable with screen reader support.
        
        My responsibilities
        I held the frontend lead role and was responsible for the overall visual direction, design system and component architecture. I built the start page, the graveyard the doll and the clown rooms, the spider drop animation, the bat sprite animation, fog effects, the golden key animation, the door transition component, the loading screen and the end page. I also contributed to the Zustand game state store, audio management with Howler.js, and the overall layout and styling across the project.
        
        Challenges
        Coordinating room-level audio across a shared Zustand store — ensuring ambient sound crossfaded correctly between rooms while effect sounds stopped on room exit — required careful architecture. Getting the haunted house atmosphere to feel right on both mobile and desktop, while meeting accessibility requirements, was a balancing act that pushed us to make deliberate decisions at every step.',

        'technologies' => ['React', 'Next.js', 'TypeScript', 'Tailwind', 'Framer Motion', 'Howler.js', 'Zustand'],
        'demolink' => 'https://runtime-terror-app.vercel.app/',
        'githubLink' => 'https://github.com/Patricia-LF/runtime-terror',
        'image' => '',
        'mockup' => 'runtime-desktop.png',
        'mock-mob' => 'runtime-mob.png',
    ],

    'LIA Connect' => [
        'title' => 'LIA Connect',
        'description' => 'Networking tool for a LIA event',
        'meta' => 'Group project - 4 people, 2 web developers | 4 weeks',
        'longDescription' => 'LIA Connect is a mobile-first React networking application built for an Yrgo LIA event, where students and companies can connect based on shared interests.

    Users choose their role — student or company representative — and select interest categories such as Frontend, UX, Branding or Motion Design. Each category has a unique color, and the selections generate a visual profile consisting of an animated circle organism and a stack of interest cards with tailored conversation starters for both students and companies.

    Features
    The app includes a start page with a LIA Connect animation, description of the app, and buttons to choose between student/company, and a profile form with role selection, interest picking and an optional portfolio URL field. On the result page, students can open a slide-in drawer to display a QR code linking to their portfolio. The animated circle organism reflects the user\'s chosen interest colors, and the interest cards expand to show relevant questions and attributes.

    My responsibilities
    I was one of two web developers in a cross-disciplinary group also consisting of two digital design students. I was responsible for the React architecture, component structure and data layer — including the companies and interests data files, matching utilities and routing setup. I built several key components including the ProfileForm, ResultPage, CircleOrganism color integration, QR drawer and the DotText canvas animation on the hero. I also handled deployment configuration and Git workflow across the team.

    Challenges
    Building a smooth card stack with touch-based scroll on mobile required significant iteration to get the interaction feeling right. Collaborating across disciplines — aligning on concept and design decisions with the design students while keeping the codebase clean — was both a challenge and one of the most rewarding parts of the project.',

        'technologies' => ['React', 'JavaScript', 'CSS modules', 'Vite', 'Figma'],
        'demolink' => ' https://lia-connect-chi.vercel.app/',
        'githubLink' => 'https://github.com/Patricia-LF/LIA-connect',
        'image' => 'LIA-connect.jpg',
        'mockup' => 'LIA-connect-desktop.png',
        'mock-mob' => 'LIA-connect-mob.png',
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
        'demolink' => 'https://cloudops.on-forge.com/',
        'githubLink' => 'https://github.com/Patricia-LF/CloudOps.git',
        'image' => 'cloudops-img.jpg',
        'mockup' => 'cloudops-desktop.png',
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
        'demolink' => 'https://patriciafrykberg.se/kinforma/',
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
        'demolink' => 'https://patriciafrykberg.se/yrgopelag/',
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
        'demolink' => 'https://patriciafrykberg.se/API/',
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
        'demolink' => 'https://patriciafrykberg.se/bio-hemsida/',
        'githubLink' => 'https://github.com/Patricia-LF/bio-hemsida',
        'image' => 'bio-futurity-img.jpg',
        'mockup' => 'futurity-desktop.png',
        'mock-mob' => 'futurity-mob.png',
    ],
];
