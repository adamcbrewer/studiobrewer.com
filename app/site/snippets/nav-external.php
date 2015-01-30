<?php $external_links = array_slice($site->externallinks()->yaml(), 0, 3); ?>
<?php foreach($external_links as $external_link) : ?>
    <a target="_blank" class="nav-link" href="<?php echo $external_link['url'] ?>"><?php echo $external_link['title'] ?></a>
<?php endforeach; ?>
