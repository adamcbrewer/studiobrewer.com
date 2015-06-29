<?php if ($image_object) : ?>
<article class="figure layout layout--<?php echo $image_object->layout() ?>">
    <figure class="figure-image">
        <img class="js-layzr" data-layzr="<?php echo $image_object->image()->url() ?>" alt="<?php echo $image_object->image()->filename() ?>">
        <noscript><img src="<?php echo $image_object->image()->url() ?>" alt="<?php echo $image_object->image()->filename() ?>"></noscript>
        <?php if ($image_object->caption() != '') : ?>
        <figcaption class="figure-caption"><?php echo $image_object->caption() ?></figcaption>
        <?php endif; ?>
    </figure>
</article>
<?php endif; ?>
