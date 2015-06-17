<?php snippet('header') ?>

    <article class="contain contain--about section">

        <header class="section-header contain">
            <h1 class="title-section"><?php echo $page->header() ?></h1>
            <img class="title-underline" src="/assets/img/headers/header-09.svg" alt="">
        </header>

        <figure class="figure figure--about">
            <img src="<?php echo $page->images()->findBy('name', 'me')->url() ?>" alt="<?php echo $site->author() ?>">
            <?php if ($page->images()->findBy('name', 'me')->caption()) : ?>
            <figcaption class="figure-caption"><?php echo $page->images()->findBy('name', 'me')->caption() ?></figcaption>
            <?php endif; ?>
        </figure>

        <section class="contain contain--minute">

            <?php echo kirbytext($page->about()) ?>

        </section>

    </article>

    <section class="section">

        <header class="section-header contain">
            <h1 class="title-section"><?php echo $page->sectionTitleTwo() ?></h1>
            <img class="title-underline" src="/assets/img/headers/header-07.svg" alt="">
        </header>

        <section class="contain">
            <ul class="clients u-flex u-flex--row u-flex--center-v u-textcenter">
                <?php foreach ($page->images()->sortBy('sort', 'asc')->not('me.jpg', 'me.png') as $client) : ?>
                    <li class="client" data-name="<?php e($client->client() != "", $client->client(), $client->name()) ?>">
                        <img src="<?php echo $client->url() ?>" alt="<?php echo $client->filename() ?>">
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

    </section>

    <section class="section contain">
        <header class="section-header">
            <p class="title-section"><?php echo $page->sectionTitleThree() ?></p>
        </header>
        <section class="skills contain contain--narrow u-columns u-columns--two u-columns--largegap">
            <div class="skill">
                <ul class="taglist">
                    <?php foreach(explode(',', $page->skills()) as $value) : ?>
                    <li class="taglist-item"><?php echo $value ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </section>

    <section class="section section--alt">
        <header class="section-header contain">
            <p class="title-section"><?php echo $page->sectionTitleFour() ?></p>
        </header>
        <div class="u-textleft contain contain--narrow">
            <?php echo kirbytext($page->TextSectionFour()) ?>
        </div>
    </section>

<?php snippet('footer') ?>
