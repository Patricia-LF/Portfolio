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
</head>

<body>

    <header>
        <a href="index.php" class="signature-link">
            <div class="logo">
                <?php require 'includes/signature.php'; ?>
            </div>
        </a>
        <div class="container">
            <nav>
                <a href="#hero" class="nav-link">Intro</a>
                <a href="#tech" class="nav-link">Tech stack</a>
                <a href="#projects" class="nav-link">Projects</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#experience" class="nav-link">Experience</a>
                <a href="#contact" class="nav-link">Contact</a>
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

        <?php
        require __DIR__ . '/hero.php'
        ?>

        <?php
        require __DIR__ . '/tech.php'
        ?>

        <?php
        require __DIR__ . '/projects.php'
        ?>

        <?php
        require __DIR__ . '/about.php'
        ?>

        <?php
        require __DIR__ . '/experience.php'
        ?>

        <?php
        require __DIR__ . '/contact.php'
        ?>

        <button id=" backToTop" class="start-btn" aria-label="Back to top">
            ↑
        </button>

    </main>

    <?php
    require __DIR__ . '/footer.php'
    ?>

    <script src="js/script.js"></script>
    <script src="js/top.js"></script>
    <script src="js/carousel.js"></script>
</body>

</html>