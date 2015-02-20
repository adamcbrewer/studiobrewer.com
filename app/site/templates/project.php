<?php snippet('header') ?>

    <article class="section section--alt project">

        <header class="section-header contain">
            <h1 class="title-main u-textleft">
                <?php echo $page->title() ?>
            </h1>
        </header>

        <section class="contain">
            <header class="project-intro">
                <article class="project-intro-summary">
                    <?php echo markdown($page->intro()) ?>
                </article>
                <aside class="project-intro-details">
                    <?php echo kirbyText($page->introDetails()) ?>
                </aside>
            </header>
        </section>

        <section class="contain project-images">

            <?php snippet('project-image', array('image' => $page->project_images()->first())); ?>

            <section class="project-furthermore u-columns u-columns--largegap u-columns--<?php echo $page->furthermoreColumns() ?>">
                <?php echo kirbyText($page->furthermore()) ?>
            </section>

            <?php foreach ($page->project_images()->offset(1) as $image) : ?>
                <?php snippet('project-image', array('image' => $image)); ?>
            <?php endforeach; ?>

        </section>

        <footer class="project-footer contain">
            <?php if ($page->signoff() != "") : ?>
                <section class="project-signoff">
                    <?php echo kirbyText($page->signoff()) ?>
                </section>
            <?php endif; ?>
            <section class="project-social">
                <?php snippet('project-social'); ?>
            </section>
        </footer>

    </article>

<?php snippet('footer') ?>
