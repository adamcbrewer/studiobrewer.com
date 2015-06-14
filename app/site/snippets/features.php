<?php foreach ($page->featured_projects() as $project) : ?>

    <li class="feature" title="<?php echo $project->title() ?>">
        <figure class="feature-figure figurelink">
            <a href="<?php echo $project->url() ?>">
                <div class="rollover" style="background-image: url(<?php echo $project->feature()->url() ?>);">
                    <span class="rollover-content"><?php echo $page->buttonView() ?></span>
                </div>
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
