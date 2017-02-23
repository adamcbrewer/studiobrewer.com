<?php snippet('header') ?>

    <section class="section section--alt-lighter">

        <header class="section-header contain">
            <h1 class="title-section title--major"><?php echo $page->header() ?></h1>
            <img class="title-underline" src="<?php echo $site->url(); ?>/assets/img/headers/header-01.svg" alt="">
        </header>

        <ol class="works contain">
            <?php snippet('work-items', array('items' => $page->children()->visible())); ?>
        </ol>

    </section>

<?php snippet('footer') ?>

