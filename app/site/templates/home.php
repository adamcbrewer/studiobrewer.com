<?php snippet('header') ?>

    <header class="section section--hero section--topo u-textcenter bg-pattern--topo">

        <div class="contain inner">
            <h1 class="title-hero">
                <?php echo $page->text()->html(); ?>
            </h1>
            <div class="btn-group">
                <a href="<?php echo $site->find('/work')->url() ?>" class="btn btn--primary">
                    <?php snippet('button', array('copy' => $page->buttonWork())); ?>
                </a>
                <a href="<?php echo $site->find('/about')->url() ?>" class="btn btn--primary">
                    <?php snippet('button', array('copy' => $page->buttonAbout())); ?>
                </a>
            </div>
        </div>

        <aside class="availability contain contain--narrow">
            <small><?php echo $page->status()->markdown() ?></small>
        </aside>

    </header>

    <section class="section contain">

        <header class="section-header contain">
            <h2 class="title-section"><?php echo $page->titleFeatures()->html() ?></h2>
            <img class="title-underline" src="/assets/img/headers/header-01.svg" alt="">
        </header>

        <ol class="features u-textcenter">

            <?php snippet('features'); ?>

        </ol>

    </section>

    <?php if ($site->showtweets() == 'true') : ?>

    <section class="section section--alt bg-pattern--shapes">
        <header class="section-header contain">
            <h2 class="title-section"><?php echo $page->sectionTitleThree() ?></h2>
            <img class="title-underline" src="/assets/img/headers/header-02.svg" alt="">
        </header>

        <section class="contain">
            <div id="tweets" class="tweets u-flex u-flex--row u-flex--spacebetween u-flex--stretch contain"></div>

            <article id="tweet-template" class="tweet">
                <header class="tweet-header">
                    <div class="icon icon--light icon--small">
                        <a href="" class="tweet-link" target="_blank">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve"><path id="twitter-icon" d="M462,128.223c-15.158,6.724-31.449,11.269-48.547,13.31c17.449-10.461,30.854-27.025,37.164-46.764 c-16.333,9.687-34.422,16.721-53.676,20.511c-15.418-16.428-37.386-26.691-61.698-26.691c-54.56,0-94.668,50.916-82.337,103.787 c-70.25-3.524-132.534-37.177-174.223-88.314c-22.142,37.983-11.485,87.691,26.158,112.85c-13.854-0.438-26.891-4.241-38.285-10.574 c-0.917,39.162,27.146,75.781,67.795,83.949c-11.896,3.237-24.926,3.978-38.17,1.447c10.754,33.58,41.972,58.018,78.96,58.699 C139.604,378.282,94.846,390.721,50,385.436c37.406,23.982,81.837,37.977,129.571,37.977c156.932,0,245.595-132.551,240.251-251.435 C436.339,160.061,450.668,145.174,462,128.223z"/></svg>
                        </a>
                    </div>
                    <a href="" class="tweet-link" target="_blank"><time datetime="" title="" class="tweet-time"></time></a>
                </header>
                <section class="tweet-body"></section>
            </article>

            <noscript>
                You need javascript to display this page correctly.
            </noscript>
        </section>

        <div class="contain btn-group">
            <a href="http://twitter.com/jakefbrewer" target="_blank" class="btn">
                <?php snippet('button', array('copy' => $page->buttonTwitter())); ?>
            </a>
        </div>

    </section>

    <?php endif; ?>

    <section class="section contain">

        <header class="section-header contain">
            <h2 class="title-section"><?php echo $page->sectionTitleFour()->html() ?></h2>
            <img class="title-underline" src="/assets/img/headers/header-03.svg" alt="">
        </header>

        <section class="splitboxes">

            <div class="splitbox splitbox--image">
                <figure class="figure figure--svg">
                    <img src="<?php echo $page->contact_image()->url() ?>" alt="<?php echo $page->contact_image()->name() ?>">
                </figure>
            </div>

            <div class="splitbox u-textcenter">
                <h3 class="title-section">
                    <a class="contact-email" href="mailto:<?php echo $site->email() ?>"><?php echo $page->email_text()->html() ?></a> <br>
                    <?php if (!$site->phone()->empty() && !$page->phone_text()->empty()) : ?>
                        <a class="contact-phone" href="tel:<?php echo $site->phone() ?>"><?php echo $page->phone_text()->html() ?></a>
                    <?php endif; ?>
                </h3>
                <footer>
                    <?php echo $page->contact_text()->html() ?>
                </footer>
            </div>

        </section>

    </section>

<?php snippet('footer') ?>

