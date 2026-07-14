<?php
include 'data/projects.php';
?>

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
    </div>
</section>