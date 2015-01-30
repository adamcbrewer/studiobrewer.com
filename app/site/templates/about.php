<?php snippet('header') ?>

    <article class="section section--alt section--yank">

        <header class="section-header section-header--stroked contain">
            <p class="section-title"><?php echo $page->sectionTitleOne() ?></p>
            <h1 class="title-main">
                <?php echo $page->header() ?>
            </h1>
        </header>

    </article>

    <div class="contain">
        <figure class="figure figure--alt figure--about section">
            <img src="<?php echo $page->images()->findBy('name', 'me')->url() ?>" alt="<?php echo $site->author() ?>">
            <?php if ($page->images()->findBy('name', 'me')->caption()) : ?>
            <figcaption class="figure-caption"><?php echo $page->images()->findBy('name', 'me')->caption() ?></figcaption>
            <?php endif; ?>
        </figure>
    </div>

    <section class="section contain contain--narrow">

        <div class="u-textleft">
            <?php echo kirbytext($page->about()) ?>
        </div>

    </section>

    <section class="section section--alt">
        <header class="section-header contain">
            <p class="section-title"><?php echo $page->sectionTitleTwo() ?></p>
        </header>
        <section class="contain">
            <ul class="clients u-flex u-flex--row u-flex--center-v">
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
            <p class="section-title"><?php echo $page->sectionTitleThree() ?></p>
        </header>
        <section class="skills u-flex u-flex--row">
            <div class="skill">
                <h3 class="taglist-title">Languages</h3>
                <ul class="taglist">
                    <?php foreach(explode(',', $page->languages()) as $value) : ?>
                    <li class="taglist-item"><?php echo $value ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="skill">
                <h3 class="taglist-title">Frameworks</h3>
                <ul class="taglist">
                    <?php foreach(explode(',', $page->frameworks()) as $value) : ?>
                    <li class="taglist-item"><?php echo $value ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="skill">
                <h3 class="taglist-title">Workflow</h3>
                <ul class="taglist">
                    <?php foreach(explode(',', $page->workflow()) as $value) : ?>
                    <li class="taglist-item"><?php echo $value ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </section>

    <section class="section section--alt">
        <header class="section-header contain">
            <p class="section-title"><?php echo $page->sectionTitleFour() ?></p>
        </header>
        <div class="u-textleft contain contain--narrow">
            <?php echo kirbytext($page->TextSectionFour()) ?>
        </div>
    </section>

<?php snippet('footer') ?>
