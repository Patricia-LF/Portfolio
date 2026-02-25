<?php
include 'data/projects.php';
include 'data/cv.php';
include 'data/links.php';

require_once 'functions/helpers.php';
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patricias Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Love+Light&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mrs+Saint+Delafield&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=WindSong:wght@400;500&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/tech.css">
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/experience.css">
    <link rel="stylesheet" href="css/contact.css">
    <!-- <link rel="stylesheet" href="css/project-page.css"> -->
</head>

<body>

    <header>
        <div class="logo">
            <?php require 'includes/signature.php'; ?>
        </div>
        <div class="container">
            <nav>
                <a href="#hero">Intro</a>
                <a href="#tech">Tech stack</a>
                <a href="#projects">Projects</a>
                <a href="#about">About</a>
                <a href="#experience">Experience</a>
                <a href="#contact">Contact</a>
                <button class="theme-toggle" id="themeToggle">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                    </svg>
                </button>
            </nav>

            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>

    <main>

        <section id="hero">
            <div class="container">
                <h1>Patricia Loayza Frykberg</h1>
                <p class="subtitle">Web Developer Student</p>

                <p class="intro">
                    Hi! I’m Patricia, currently studying Web Development at Yrgo. I love building clean, maintainable apps where backend logic and frontend experience work together.
                </p>

                <div class="cta">
                    <a href="cv.pdf" download target="_blank" class="btn-download">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                        </svg>
                        Download CV
                    </a>
                </div>
            </div>
        </section>

        <section id="tech">
            <div class="container">
                <h2>Tech Stack</h2>
                <div class="tech-content">
                    <div class="tech-groups">
                        <div class="tech-group">
                            <h3>Backend</h3>
                            <ul>
                                <li>PHP<img src="assets/logos/php-logo.png"> </li>
                                <li>Node<img src="assets/logos/node-js-logo.png"></li>
                            </ul>
                        </div>

                        <div class="tech-group">
                            <h3>Frontend</h3>
                            <ul>
                                <li>HTML<img src="assets/logos/html-logo.png"></li>
                                <li>CSS<img src="assets/logos/css-logo.png"></li>
                                <li>JavaScript<img src="assets/logos/js-logo.png"></li>
                            </ul>
                        </div>

                        <div class="tech-group">
                            <h3>Database</h3>
                            <ul>
                                <li>SQlite<img src="assets/logos/sqlite-logo.webp"></li>
                            </ul>
                        </div>
                    </div>

                    <article class="logos">
                        <div class="logo-spinner">
                            <img src="assets/logos/html-logo.png" alt="HTML">
                            <img src="assets/logos/css-logo.png" alt="CSS">
                            <img src="assets/logos/js-logo.png" alt="JavaScript">
                            <img src="assets/logos/php-logo.png" alt="PHP">
                            <img src="assets/logos/sql-logo.png" alt="Sql">
                            <img src="assets/logos/csharp.png" alt="C#">
                            <img src="assets/logos/react-logo.png" alt="React.js">
                            <img src="assets/logos/node-js-logo.png" alt="Node.js">
                            <img src="assets/logos/mysql-logo.png" alt="MySql">
                            <img src="assets/logos/mongodb-logo.webp" alt="MongoDB">
                            <img src="assets/logos/next-logo.png" alt="Next.js">
                            <img src="assets/logos/typescript-logo.png" alt="TypeScript">
                            <img src="assets/logos/wp-logo.webp" alt="WordPress">
                            <img src="assets/logos/laravel-logo.png" alt="Laravel">
                            <img src="assets/logos/figma-logo.png" alt="Figma">
                            <img src="assets/logos/vscode-logo.png" alt="VS Code">
                            <img src="assets/logos/github-logo.webp" alt="GitHub">
                            <img src="assets/logos/sqlite-logo.webp" alt="Sqlite">
                        </div>
                        <p class="spinner-label">Full program curriculum</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="projects">
            <div class="container">
                <!-- <section id="projects"> -->
                <h2>My Projects</h2>
                <div class="projects-grid">
                    <?php foreach ($projects as $projectKey => $project): ?>
                        <article class="project-card">
                            <a href="project-page.php?project=<?php echo urlencode($projectKey); ?>" class="card-overlay"></a>
                            <img src="assets/images/<?php echo $project['mockup']; ?>" alt="<?php echo $project['title']; ?>">
                            <h3><?php echo $project['title']; ?></h3>
                            <p class="project-description">
                                <?php echo $project['description']; ?>
                            </p>
                            <!-- Link to project-page with key as a parameter -->
                            <span class="btn-arrow">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </span>

                            <div class="project-tech">
                                <?php foreach ($project['technologies'] as $tech): ?>
                                    <?php $color = getTechColor($tech); ?>
                                    <span class="tech-badge" style="border: 1px solid <?= $color ?>; background-color: var(--bg-main); color: <?= $color ?>;">
                                        <?= $tech ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>

                            <div class="project-links">
                                <?php if (!empty($project['demolink'])): ?>
                                    <a href="<?php echo $project['demolink']; ?>" target="_blank" class="btn-demo">Demo</a>
                                <?php endif; ?>
                                <?php if (!empty($project['githubLink'])): ?>
                                    <a href="<?php echo $project['githubLink']; ?>" target="_blank" class="btn-github">GitHub</a>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
                <!-- </section> -->
            </div>
        </section>

        <section id="about">
            <div class="container">
                <h2>About Me</h2>
                <div class="about-me">
                    <article class="about-text">
                        <p>
                            I’m currently studying Web Development at Yrgo, focusing on creating structured and maintainable applications. I enjoy seeing how systems work behind the scenes and building solutions that are both logical and user-friendly. This semester, I’m expanding my toolkit with C#, Laravel, Next.js, TypeScript, and WordPress, giving me a mix of backend depth and frontend flexibility.
                        </p>
                        <p>
                            I'm also comfortable using AI as a learning and productivity tool — not as a shortcut, but as a way to deepen my understanding and work more efficiently. In a field that's evolving rapidly, knowing how to leverage the right tools is just as important as the fundamentals.
                        </p>
                        <p>
                            With a background as a Biomedical Analyst and a passion for computers and organizing data, moving into web development felt like a natural next step. Outside of coding, I enjoy exploring creative outlets – painting, 3D graphics in Blender, and digital design – which helps me bring a visual perspective to the applications I build. I’m fascinated by how creativity and logic can come together to create digital experiences that are both functional and beautiful.
                        </p>
                        <div class="signature">
                            <?php require 'includes/signature.php'; ?>
                        </div>
                    </article>
                    <div class="about-img">
                        <img src="assets/images/Jag.jpg">
                    </div>
                </div>
            </div>
        </section>

        <section id="experience">
            <h2>Experience</h2>
            <div class="experience-grid">

                <div class="experience-column">
                    <h3>Work</h3>

                    <div class="experience-entry">
                        <span class="experience-year">2015 – present</span>
                        <h4>Biomedical Analyst</h4>
                        <p>Västra Götalandsregionen, Sahlgrenska Universitetssjukhuset</p>
                    </div>

                    <div class="experience-entry">
                        <span class="experience-year">2013 – 2014</span>
                        <h4>Project Assistant</h4>
                        <p>Göteborgs Universitet, Department of Microbiology & Immunology</p>
                    </div>

                    <div class="experience-entry">
                        <span class="experience-year">2007 – 2013</span>
                        <h4>Post Administration Assistant</h4>
                        <p>Göteborgs Postterminal</p>
                    </div>
                </div>

                <div class="experience-column">
                    <h3>Education</h3>

                    <div class="experience-entry">
                        <span class="experience-year">2025 – 2027</span>
                        <h4>Web Development (Fullstack)</h4>
                        <p>Yrgo</p>
                    </div>

                    <div class="experience-entry">
                        <span class="experience-year">2009 – 2013</span>
                        <h4>Biomedical Science, Bachelor</h4>
                        <p>Göteborgs Universitet</p>
                    </div>
                </div>

            </div>
        </section>

        <section id="contact">
            <div class="container">
                <h2>Contact</h2>
                <div class="contact-info">
                    <p>Patricia Loayza Frykberg</p>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                            0704 03 22 68
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            patricia.frykberg@gmail.com
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            Kapellgången 2, 411 31 Göteborg
                        </li>
                    </ul>
                </div>

                <div class="contact-links">
                    <ul>
                        <li><a href="mailto:patricia.frykberg@gmail.com">Email</a></li>
                        <?php foreach ($links as $link): ?>
                            <li><a href="<?php echo $link['url']; ?>" target="_blank"><?php echo $link['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>

    </main>

    <?php
    require __DIR__ . '/footer.php'
    ?>

    <script src="js/script.js"></script>
</body>

</html>