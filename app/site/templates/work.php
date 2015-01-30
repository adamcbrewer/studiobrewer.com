<?php snippet('header') ?>

    <section class="section section--alt">

        <header class="section-header contain">
            <h2 class="section-title"><?php echo $page->sectionTitleOne() ?></h2>
            <h1 class="title-main"><?php echo $page->header() ?></h1>
        </header>

        <ol class="works contain">
            <?php foreach ($page->children()->visible() as $project) : ?>
            <li class="work">
                <figure class="work-thumb figurelink">
                    <a href="<?php echo $project->url() ?>">
                        <div class="btn" tabindex="-1">View Project</div>
                        <img src="<?php echo $project->thumb()->url() ?>" alt="<?php echo $project->title(); ?>">
                    </a>
                </figure>
                <section class="work-details">
                    <h3 class="work-title"><a href="<?php echo $project->url() ?>"><?php echo $project->title(); ?></a></h3>
                    <p class="work-summary"><?php echo $project->summary(); ?></p>
                </section>
            </li>
            <?php endforeach; ?>
        </ol>

    </section>

<?php snippet('footer') ?>

