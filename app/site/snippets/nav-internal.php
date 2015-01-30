<?php foreach($pages->find('work', 'contact', 'about')->sortBy('num')->visible() as $page): ?>
    <a class="nav-link<?php if ($page->isOpen()) : ?> is-active<?php endif; ?>" href="<?php echo $page->url() ?>"><?php echo $page->title()->html() ?></a>
<?php endforeach; ?>
