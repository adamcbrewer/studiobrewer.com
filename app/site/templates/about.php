<?php snippet('header') ?>

    <article class="contain contain--about section">

        <header class="section-header contain">
            <h1 class="title-section"><?php echo $page->header() ?></h1>
            <img class="title-underline" src="<?php echo $site->url(); ?>/assets/img/headers/header-09.svg" alt="">
        </header>

        <figure class="figure figure--about">
            <img src="<?php echo $page->profile_image()->url() ?>" alt="<?php echo $site->author() ?>">
            <?php if ($page->profile_image()->caption()) : ?>
            <figcaption class="figure-caption"><?php echo $page->profile_image()->caption() ?></figcaption>
            <?php endif; ?>
        </figure>

        <section class="contain contain--minute">

            <?php echo kirbytext($page->about()) ?>

        </section>

    </article>

    <section class="section section--alt bg-pattern--shapes">

        <header class="section-header contain">
            <h2 class="title-section"><?php echo $page->section_title_skills() ?></h2>
            <img class="title-underline" src="<?php echo $site->url(); ?>/assets/img/headers/header-06.svg" alt="">
        </header>

        <div class="contain">

            <section class="splitboxes">

                <div class="splitbox">
                    <h3 class="title-section"><?php echo $page->skills_box_title_left() ?></h3>
                    <footer>
                        <?php echo $page->skills_box_content_left()->kirbytext() ?>
                    </footer>
                </div>

                <div class="splitbox splitbox--hollow">
                    <h3 class="title-section"><?php echo $page->skills_box_title_right() ?></h3>
                    <footer>
                        <?php echo $page->skills_box_content_right()->kirbytext() ?>
                    </footer>
                </div>

            </section>

        </div>

    </section>

    <section class="section">

        <header class="section-header contain">
            <h2 class="title-section"><?php echo $page->section_title_clients() ?></h2>
            <img class="title-underline" src="<?php echo $site->url(); ?>/assets/img/headers/header-07.svg" alt="">
        </header>

        <section class="contain">
            <ul class="clients has-nostyle u-flex u-flex--row u-flex--center-v u-textcenter">
                <?php foreach ($page->images()->sortBy('sort', 'asc')->not('me.jpg', 'me.png') as $client) : ?>
                    <li class="client" data-name="<?php e($client->client() != "", $client->client(), $client->name()) ?>">
                        <img src="<?php echo $client->url() ?>" alt="<?php echo $client->filename() ?>">
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

    </section>

<?php snippet('footer') ?>
