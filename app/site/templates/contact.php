<?php snippet('header') ?>

    <article class="section section--hero">

        <header class="section-header section-header--stroked contain">
            <p class="section-title"><?php echo $page->sectionTitleOne() ?></p>
            <h1 class="title-main">
                <a class="contact-email" href="mailto:<?php echo $site->email() ?>"><?php echo $site->email() ?></a>
            </h1>
        </header>

    </article>

    <section class="section section--alt-lighter">

        <section class="contain contain--narrow u-textleft">
            <?php echo markdown($page->text()) ?>
        </section>

        </section>

    <section class="section section--alt">

        <header class="section-header section-header--halfgap">
            <p class="section-title"><?php echo $page->sectionTitleTwo() ?></p>
        </header>

        <div class="u-flex u-flex--row contain contain--features">
            <?php $external_links = array_slice($page->externallinks()->yaml(), 0, 3); ?>
            <?php foreach($external_links as $external_link) : ?>
                <div class="btn-group u-textcenter">
                    <div class="icon icon--block">
                        <a target="_blank" title="<?php echo $external_link['title'] ?>" href="<?php echo $external_link['url'] ?>"><?php echo snippet('icons/' . strtolower($external_link['title'])) ?></a>
                    </div>
                    <a target="_blank" title="<?php echo $external_link['title'] ?>" href="<?php echo $external_link['url'] ?>"><span class="section-title section-title--alpha"><?php echo $external_link['title'] ?></span></a>
                </div>
            <?php endforeach; ?>
        </div>

    </section>

<?php snippet('footer') ?>
