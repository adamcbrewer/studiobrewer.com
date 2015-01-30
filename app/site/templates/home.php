<?php snippet('header') ?>

    <header class="section--hero">

        <div class="inner">
            <h1 class="title-hero">
                <?php echo $page->text()->html(); ?>
            </h1>
            <div class="btn-group">
                <a href="<?php echo $site->find('/work')->url() ?>" class="btn">View projects</a>
                <a href="<?php echo $site->find('/about')->url() ?>" class="btn">Tell me more</a>
            </div>
        </div>

        <aside class="contain contain--narrow">
            <?php echo $page->status() ?>
        </aside>

    </header>

    <section class="section contain contain--features">

        <header class="section-header">
            <h2 class="section-title"><?php echo $page->sectionTitleTwo() ?></h2>
        </header>

        <ol class="features">

            <? foreach ($projects as $key => $project) : ?>

                <li class="feature">
                    <figure class="feature-figure figurelink">
                        <a href="<?php echo $project->url() ?>">
                            <div class="btn" tabindex="-1">View Project</div>
                            <img src="<?php echo $project->feature()->url() ?>" alt="<?php echo html($project->title()) ?>">
                        </a>
                    </figure>
                    <div>
                        <h3 class="feature-title">
                            <a href="<?php echo $project->url() ?>"><?php echo html($project->title()) ?></a>
                        </h3>
                        <p class="feature-summary"><?php echo html($project->summary()) ?></p>
                    </div>
                </li>

            <? endforeach; ?>

        </ol>

        <div class="btn-group">
            <a href="<?php echo $site->find('/work')->url() ?>" class="btn btn--primary">View all projects</a>
        </div>

    </section>

    <?php if ($site->showtweets() == 'true') : ?>

    <section class="section section--alt">
        <header class="section-header contain">
            <h2 class="section-title"><?php echo $page->sectionTitleThree() ?></h2>
        </header>

        <div id="tweets" class="tweets u-flex u-flex--row u-flex--spacebetween u-flex--stretch contain">

        </div>

        <article id="tweet-template" class="tweet">
            <header class="tweet-header">
                <div class="icon icon--light icon--small">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve"><path id="twitter-icon" d="M462,128.223c-15.158,6.724-31.449,11.269-48.547,13.31c17.449-10.461,30.854-27.025,37.164-46.764 c-16.333,9.687-34.422,16.721-53.676,20.511c-15.418-16.428-37.386-26.691-61.698-26.691c-54.56,0-94.668,50.916-82.337,103.787 c-70.25-3.524-132.534-37.177-174.223-88.314c-22.142,37.983-11.485,87.691,26.158,112.85c-13.854-0.438-26.891-4.241-38.285-10.574 c-0.917,39.162,27.146,75.781,67.795,83.949c-11.896,3.237-24.926,3.978-38.17,1.447c10.754,33.58,41.972,58.018,78.96,58.699 C139.604,378.282,94.846,390.721,50,385.436c37.406,23.982,81.837,37.977,129.571,37.977c156.932,0,245.595-132.551,240.251-251.435 C436.339,160.061,450.668,145.174,462,128.223z"/></svg>
                </div>
                <time datetime="" title="" class="tweet-time"></time>
            </header>
            <section class="tweet-body"></section>
        </article>

        <noscript>
            You need javascript to display this page correctly.
        </noscript>

    </section>

    <?php endif; ?>

<?php snippet('footer') ?>

