<?php if ($page->client_brands()) : ?>
<ul class="clients has-nostyle u-flex u-flex--row u-flex--center-v u-textcenter">
    <?php foreach ($page->client_brands() as $client) : ?>
        <li class="client" data-name="<?php echo $client->name(); ?>">
            <img class="js-layzr" data-layzr="<?php echo $client->image()->url() ?>" alt="<?php echo $client->name() ?>">
            <noscript><img src="<?php echo $client->image()->url() ?>" alt="<?php echo $client->name() ?>"></noscript>
        </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
