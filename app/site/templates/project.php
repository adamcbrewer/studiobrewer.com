<?php snippet('header') ?>

    <article class="section section--alt-lighter project">

        <header class="section-header contain">
            <h1 class="title-main">
                <?php echo $page->title() ?>
            </h1>
            <p class="title-summary">
                <?php echo $page->summary() ?>
            </p>
        </header>

        <section class="contain project-images">

            <?php snippet('project-image', array('image' => $page->project_images()->first())); ?>

        </section>

        <section class="contain contain--project-info project-intro">
            <article class="project-intro-summary">
                <?php echo markdown($page->intro()) ?>
            </article>
            <aside class="project-intro-details">
                <?php echo kirbyText($page->details()) ?>
            </aside>
        </section>

        <section class="contain project-images">
            <?php foreach ($page->project_images()->offset(1) as $image) : ?>
                <?php snippet('project-image', array('image' => $image)); ?>
            <?php endforeach; ?>
        </section>

        <footer class="project-footer contain contain--text ">
            <section class="project-social">
                <?php snippet('project-social'); ?>
            </section>
        </footer>

    </article>

<?php snippet('footer') ?>
