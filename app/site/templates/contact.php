<?php snippet('header') ?>

    <article class="section section--alt">

        <header class="section-header section-header--stroked contain">
            <p class="section-title"><?php echo $page->sectionTitleOne() ?></p>
            <h1 class="title-main">
                <a class="contact-email" href="mailto:<?php echo $site->email() ?>"><?php echo $site->email() ?></a>
            </h1>
        </header>

        <section class="contain contain--narrow u-textleft">
            <?php echo markdown($page->text()) ?>
        </section>

    </article>

    <section class="section section--alt-lighter">

        <header class="section-header section-header--halfgap">
            <p class="section-title"><?php echo $page->sectionTitleTwo() ?></p>
        </header>

        <div class="u-flex u-flex--row contain contain--features">
            <?php $external_links = array_slice($site->externallinks()->yaml(), 0, 3); ?>
            <?php foreach($external_links as $external_link) : ?>
                <div class="btn-group">
                    <div class="icon icon--github icon--block">
                        <?php echo snippet('icons/' . strtolower($external_link['title'])) ?>
                    </div>
                    <a target="_blank" href="<?php echo $external_link['url'] ?>" class="btn btn--primary"><?php echo $external_link['title'] ?></a>
                </div>
            <?php endforeach; ?>
        </div>

    </section>

<?php snippet('footer') ?>
