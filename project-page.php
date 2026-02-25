<?php
include 'data/projects.php';
include 'data/links.php';

$projectKey = $_GET['project'] ?? null;

if (!$projectKey || !isset($projects[$projectKey])) {
    echo "<p>Projektet kunde inte hittas.</p>";
    exit;
}

$project = $projects[$projectKey];

require_once 'functions/helpers.php';
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $project['title']; ?> | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Love+Light&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mrs+Saint+Delafield&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=WindSong:wght@400;500&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/project-page.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <header>
        <div class="logo">
            <?php require 'includes/signature.php'; ?>
        </div>
        <div class="container">
            <nav>
                <a href="index.php" class="start-btn">Start</a>
                <a href="#project-content">Project</a>
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
        <article id="project-content">
            <h1 class="project-title"><?php echo htmlspecialchars($project['title']); ?></h1>
            <div class="project-page">
                <!-- Left column -->
                <div class="project-left">
                    <p class="project-description"><?php echo nl2br(htmlspecialchars($project['longDescription'])); ?></p>
                    <div class="project-technologies">
                        <?php foreach ($project['technologies'] as $tech): ?>
                            <?php $color = getTechColor($tech); ?>
                            <span class="tech-badge" style="border: 1px solid <?= $color ?>; background-color: var(--bg-main); color: <?= $color ?>;">
                                <?= htmlspecialchars($tech) ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Right column -->
                <div class="project-right">
                    <img src="assets/images/<?php echo $project['mock-mob']; ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                </div>

                <!-- Links - always last -->
                <div class="project-links">
                    <?php if (!empty($project['demolink'])): ?>
                        <a href="<?php echo $project['demolink']; ?>" target="_blank" class="btn-demo">Demo</a>
                    <?php endif; ?>
                    <?php if (!empty($project['githubLink'])): ?>
                        <a href="<?php echo $project['githubLink']; ?>" target="_blank" class="btn-github">GitHub</a>
                    <?php endif; ?>
                </div>
                <a href="index.php" class="btn-back">← Back to start</a>
            </div>
        </article>

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

    <?php require 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>

</html>