<?php $p = $pages->find('contact'); ?>
<a class="nav-link<?php if ($p->isOpen()) : ?> is-active<?php endif; ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
<a class="nav-link" target="_blank" href="http://studiobrewer.bigcartel.com/">Shop</a>
