<?php if ($image_object) : ?>
<div class="figure layout layout--<?php echo $image_object->layout() ?>">
    <figure class="figure-image">
        <img src="<?php echo $image_object->image()->url() ?>" alt="<?php echo $image_object->image()->filename() ?>">
        <?php if ($image_object->caption() != '') : ?>
        <figcaption class="figure-caption"><?php echo markdown($image_object->caption()); ?></figcaption>
        <?php endif; ?>
    </figure>
</div>
<?php endif; ?>
