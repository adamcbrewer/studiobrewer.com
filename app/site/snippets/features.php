<?php foreach ($page->featured_projects() as $project) : ?>

    <li class="feature" title="<?php echo $project->title() ?>">
        <figure class="feature-figure figurelink">
            <a href="<?php echo $project->url() ?>">
                <div class="rollover" style="background-image: url(<?php echo $project->feature()->url() ?>);">
                    <div class="rollover-content">
                        <h3 class="feature-title"><?php echo html($project->title()) ?></h3>
                        <p class="feature-summary"><?php echo html($project->summary()) ?></p>
                    </div>
                </div>
                <img src="<?php echo $project->feature()->url() ?>" alt="<?php echo html($project->title()) ?>">
            </a>
        </figure>
    </li>

<? endforeach; ?>
