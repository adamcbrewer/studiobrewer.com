<?php snippet('header') ?>

    <section class="section section--hero section--alt-lighter">

        <header class="section-header contain">
            <h1 class="title-hero"><?php echo $page->header() ?></h1>
        </header>

        <ol class="works contain">
            <?php foreach ($page->children()->visible() as $project) : ?>
            <li class="work">
                <figure class="work-thumb figurelink">
                    <a href="<?php echo $project->url() ?>">
                        <div class="rollover" style="background-image: url(<?php echo $project->thumb()->url() ?>);">
                            <span class="rollover-content"><?php echo $page->buttonView() ?></span>
                        </div>
                        <img src="<?php echo $project->thumb()->url() ?>" alt="<?php echo $project->title(); ?>">
                    </a>
                </figure>
                <section class="work-details">
                    <h2 class="work-title"><a href="<?php echo $project->url() ?>"><?php echo $project->title(); ?></a></h2>
                    <h3 class="work-summary"><?php echo $project->summary() ?></h3>
                </section>
            </li>
            <?php endforeach; ?>
        </ol>

    </section>

<?php snippet('footer') ?>

