<?php snippet('header') ?>

    <article class="section section--alt project">

        <header class="section-header section-header--stroked contain">
            <p class="section-title"><?php echo $page->when() ?></p>
            <h1 class="title-main">
                <?php echo $page->title() ?>
            </h1>
        </header>

        <section class="contain contain--text">
            <header class="project-intro u-textleft">
                <?php echo markdown($page->intro()) ?>
            </header>
            <?php if ($page->website() != "") : ?>
            <aside class="btn-group">
                <a href="<?php echo $page->website() ?>" class="btn btn--primary" target="_blank">View the website</a>
            </aside>
            <?php endif; ?>
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
        <footer class="project-footer contain contain--text u-textleft">
            <?php echo kirbyText($page->signoff()) ?>
        </footer>
        <?php endif; ?>

    </article>

<?php snippet('footer') ?>
