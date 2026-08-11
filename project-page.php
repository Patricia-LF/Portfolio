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
        <a href="index.php" class="signature-link">
            <div class="logo">
                <?php require 'includes/signature.php'; ?>
            </div>
        </a>
        <div class="container">
            <nav>
                <a href="index.php" class="start-btn">Start</a>
                <a href="#project-content" class="nav-link">Project</a>
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
        <article id="project-content">
            <h1 class="project-title"><?php echo htmlspecialchars($project['title']); ?></h1>
            <div class="project-page">
                <!-- Left column -->
                <div class="project-left">
                    <?php if (!empty($project['meta'])): ?>
                        <p class="project-meta"><?php echo htmlspecialchars($project['meta']); ?></p>
                    <?php endif; ?>
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
                <a href="index.php#projects" class="btn-back">←</a>
            </div>
        </article>

        <?php
        require __DIR__ . '/contact.php'
        ?>

        <button id="backToTop" class="start-btn" aria-label="Back to top">
            ↑
        </button>
    </main>

    <?php require 'footer.php'; ?>
    <script src="js/script.js"></script>
    <script src="js/top.js"></script>
</body>

</html>