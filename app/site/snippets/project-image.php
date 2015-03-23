<article class="figure layout layout--<?php echo $image->layout() ?>">
    <figure class="figure-image">
        <img src="<?php echo $image->url() ?>" alt="<?php echo $image->filename() ?>">
        <?php if ($image->caption() != '') : ?>
        <figcaption class="figure-caption"><?php echo $image->caption() ?></figcaption>
        <?php endif; ?>
    </figure>
</article>
