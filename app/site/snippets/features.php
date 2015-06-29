<?php foreach ($page->featured_projects() as $project) : ?>

    <li class="feature" title="<?php echo $project->title() ?>">
        <figure class="feature-figure figurelink">
            <a href="<?php echo $project->url() ?>">
                <div class="rollover" data-layzr="<?php echo $project->feature()->url() ?>" data-layzr-bg>
                    <div class="rollover-content">
                        <h3 class="feature-title"><?php echo html($project->title()) ?></h3>
                        <p class="feature-summary"><?php echo html($project->summary()) ?></p>
                    </div>
                </div>
                <img class="js-layzr" data-layzr="<?php echo $project->feature()->url() ?>" alt="<?php echo html($project->title()) ?>">
                <noscript><img src="<?php echo $project->feature()->url() ?>" alt="<?php echo html($project->title()) ?>"></noscript>
            </a>
        </figure>
    </li>

<? endforeach; ?>
