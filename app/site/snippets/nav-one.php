<?php $p = $pages->find('work'); ?>
<a class="nav-link<?php if ($p->isOpen()) : ?> is-active<?php endif; ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
<?php $p = $pages->find('about'); ?>
<a class="nav-link<?php if ($p->isOpen()) : ?> is-active<?php endif; ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
