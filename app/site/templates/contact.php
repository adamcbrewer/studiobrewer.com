<?php snippet('header') ?>

    <article class="section section--hero section--yank">

        <header class="section-header contain">
            <h1 class="title-hero">
                <a class="contact-email" href="mailto:<?php echo $site->email() ?>"><?php echo $page->email_text() ?></a>
            </h1>
        </header>

    </article>

    <div class="contain u-textcenter">
        <figure class="section figure figure--about">
            <?php $image = $page->images()->findBy('name', 'contact'); ?>
            <img src="<?php echo $image->url() ?>" alt="<?php echo $image->filename() ?>">
            <?php if ($image->caption()) : ?>
            <figcaption class="figure-caption contain contain--narrow"><?php echo $image->caption() ?></figcaption>
            <?php endif; ?>
        </figure>
    </div>

    <section class="section contain contain--narrow">

        <?php echo markdown($page->text()) ?>

    </section>

    <section class="section section--alt">

        <header class="section-header section-header--halfgap">
            <p class="section-title"><?php echo $page->sectionTitleTwo() ?></p>
        </header>

        <div class="u-flex u-flex--row contain">
            <?php $external_links = array_slice($page->externallinks()->yaml(), 0, 3); ?>
            <?php foreach($external_links as $external_link) : ?>
                <div class="btn-group btn-group--svgicon u-textcenter">
                    <a target="_blank" href="<?php echo $external_link['url'] ?>">
                        <?php snippet('svgants', array('type' => strtolower($external_link['title']))); ?>
                    </a>
                    <div class="icon icon--block">
                        <a target="_blank" href="<?php echo $external_link['url'] ?>"><?php echo snippet('icons/' . strtolower($external_link['title'])) ?></a>
                    </div>
                    <a target="_blank" href="<?php echo $external_link['url'] ?>"><span class="section-title section-title--alpha"><?php echo $external_link['title'] ?></span></a>
                </div>
            <?php endforeach; ?>
        </div>

    </section>

<?php snippet('footer') ?>
