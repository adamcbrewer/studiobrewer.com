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
                    <p><strong><?php echo $page->when() ?></strong> &ndash; <?php echo h($page->what()) ?></p>
                    <p><strong>Deliverables</strong> &ndash; <?php echo h($page->deliverables()) ?></p>
                </aside>
            </header>
        </section>

        <section class="contain project-images">

            <?php foreach ($page->images()->sortBy('sort', 'asc')->not('thumb.jpg', 'thumb.png', 'feature.jpg', 'feature.png') as $image) : ?>

                <?php if ($image->description() != "" && $image->descriptionlocation() == 'above') : ?>
                <div class="contain contain--text figure-description figure-description--above u-textleft"><?php echo kirbyText($image->description()) ?></div>
                <?php endif; ?>

                <article class="figure layout layout--<?php echo $image->layout() ?>">

                    <figure class="project-image">
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

        <?php if ($page->signoff() != "") : ?>
        <footer class="project-footer contain">
            <?php echo kirbyText($page->signoff()) ?>
        </footer>
        <?php endif; ?>

    </article>

<?php snippet('footer') ?>
