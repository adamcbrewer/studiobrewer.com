<?php snippet('header') ?>

    <article class="project section section--alt-lighter">

        <header class="section-header contain">
            <h1 class="title-section title-section--secondary title--major">
                <?php echo $page->title() ?>
            </h1>
            <p class="title-section title-section--tertiary title--major">
                <?php echo $page->summary() ?>
            </p>
            <img class="title-underline" src="<?php echo $site->url(); ?>/assets/img/headers/header-04.svg" alt="">
        </header>

        <section class="contain project-images">

            <?php snippet('project/image', array('image_object' => $page->first_image())); ?>

        </section>

        <section class="contain contain--project-info project-intro">
            <article class="project-intro-summary">
                <?php echo kirbyText($page->intro()) ?>
            </article>
            <aside class="project-intro-details">
                <?php echo kirbyText($page->details()) ?>
            </aside>
        </section>

        <section class="contain project-images">
            <?php foreach ($page->remaining_project_images() as $image) : ?>
                <?php snippet('project/image', array('image_object' => $image)); ?>
            <?php endforeach; ?>
        </section>

        <footer class="project-footer">
            <div class="inner contain">
                <a href="<?php echo $site->find('/about')->url() ?>" class="btn btn--arrow btn--arrow--left">
                    <?php snippet('buttons/arrow', array('copy' => $pages->find('work')->all_projects_copy())); ?>
                </a>
                <section class="project-social contain contain--text">
                    <?php snippet('project/social'); ?>
                </section>
                <?php if($next = $page->next()): ?>
                    <a href="<?php echo $next->url() ?>" title="<?php echo $next->title() ?>" class="btn btn--arrow">
                        <?php snippet('buttons/arrow', array('copy' => $pages->find('work')->next_project_copy())); ?>
                    </a>
                <?php endif ?>
            </div>
        </footer>

    </article>

<?php snippet('footer') ?>
