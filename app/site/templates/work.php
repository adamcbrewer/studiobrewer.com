<?php snippet('header') ?>

    <section class="section section--alt-lighter">

        <header class="section-header contain">
            <h1 class="title-section"><?php echo $page->header() ?></h1>
            <img class="title-underline" src="<?php echo $site->url(); ?>/assets/img/headers/header-01.svg" alt="">
        </header>

        <ol class="works contain">
            <?php foreach ($page->children()->visible() as $project) : ?>
            <li class="work">
                <figure class="work-thumb figurelink">
                    <a href="<?php echo $project->url() ?>">
                        <div class="rollover" data-layzr="<?php echo $project->thumb()->url() ?>" data-layzr-bg>
                            <span class="rollover-content"><?php echo $page->buttonView() ?></span>
                        </div>
                        <img class="js-layzr" data-layzr="<?php echo $project->thumb()->url() ?>" alt="<?php echo $project->title(); ?>">
                        <noscript><img src="<?php echo $project->thumb()->url() ?>" alt="<?php echo $project->title(); ?>"></noscript>
                    </a>
                </figure>
                <section class="work-details">
                    <h2 class="work-title"><a href="<?php echo $project->url() ?>"><?php echo $project->title(); ?></a></h2>
                    <h3 class="work-summary"><a href="<?php echo $project->url() ?>"><?php echo $project->summary() ?></a></h3>
                </section>
            </li>
            <?php endforeach; ?>
        </ol>

    </section>

<?php snippet('footer') ?>

