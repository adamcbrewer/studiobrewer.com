<?php snippet('header') ?>

    <article class="section section--alt project">

        <header class="section-header contain">
            <h1 class="title-main">
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

            <?php foreach ($page->project_images() as $image) : ?>

                <?php if ($image->description() != "" && $image->descriptionlocation() == 'above') : ?>
                <div class="contain contain--text figure-description figure-description--above u-textleft"><?php echo kirbyText($image->description()) ?></div>
                <?php endif; ?>

                <article class="figure layout layout--<?php echo $image->layout() ?>">

                    <figure class="figure-image">
                        <img src="<?php echo $image->url() ?>" alt="<?php echo $image->filename() ?>">

                        <figcaption class="figure-caption"><?php echo $image->caption() ?></figcaption>

                    </figure>

                    <?php if ($image->description() != "" && !in_array($image->descriptionlocation(), array('above', 'below'))) : ?>
                    <div class="contain contain--text figure-description u-textleft"><?php echo kirbyText($image->description()) ?></div>
                    <?php endif; ?>

                </article>

                <?php if ($image->description() != "" && $image->descriptionlocation() == 'below') : ?>
                <div class="contain contain--text figure-description figure-description--below u-textleft"><?php echo kirbyText($image->description()) ?></div>
                <?php endif; ?>

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
