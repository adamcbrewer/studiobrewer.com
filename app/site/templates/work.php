<?php snippet('header') ?>

    <section class="section section--alt-lighter">

        <header class="section-header contain">
            <h1 class="title-section title--major"><?php echo $page->header() ?></h1>
            <img class="title-underline" src="<?php echo $site->url(); ?>/assets/img/headers/header-01.svg" alt="">
        </header>

        <ol class="works contain">
            <?php foreach ($page->children()->visible() as $project) : ?>
            <li class="work">
                <a class="work-link" href="<?php echo $project->url() ?>">
                    <figure class="work-thumb figurelink">
                        <div class="rollover" style="background-image: url(<?php echo $project->thumb()->url() ?>);">
                            <span class="rollover-content"><?php echo $page->buttonView() ?></span>
                        </div>
                        <img src="<?php echo $project->thumb()->url() ?>" alt="<?php echo $project->title(); ?>">
                    </figure>
                    <section class="work-details">
                        <h2 class="work-title"><span><?php echo $project->title(); ?></span></h2>
                        <h3 class="work-summary"><span><?php echo $project->summary() ?></span></h3>
                    </section>
                </a>
            </li>
            <?php endforeach; ?>
        </ol>

    </section>

<?php snippet('footer') ?>

