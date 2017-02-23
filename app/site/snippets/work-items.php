<?php foreach ($items as $project) : ?>
<li class="work">
    <a class="work-link" href="<?php echo $project->url() ?>">
        <figure class="work-thumb figurelink">
            <div class="rollover">
                <?php /* <span class="rollover-content"><?php echo $page->buttonView() ?></span> */?>
            </div>
            <img class="work-thumb-image" src="<?php echo $project->thumb()->url() ?>" alt="<?php echo $project->title(); ?>">
        </figure>
        <section class="work-details">
            <h2 class="work-title"><span><?php echo $project->title(); ?></span></h2>
            <h3 class="work-summary"><span><?php echo $project->summary() ?></span></h3>
        </section>
    </a>
</li>
<?php endforeach; ?>
