<?php $p = $pages->find('contact'); ?>
<a class="nav-link<?php if ($p->isOpen()) : ?> is-active<?php endif; ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
<a class="nav-link" href="http://misc.studiobrewer.com">Misc</a>
