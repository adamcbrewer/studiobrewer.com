<p>
    Share on
    <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo urlencode($page->title() . " by @jakefbrewer") ?>&amp;url=<?php echo urlencode($page->url()); ?>">Twitter</a>,
    <a target="_blank" href="https://tumblr.com/share/link?url=<?php echo urlencode($page->url()) ?>&amp;name=<?php echo urlencode($page->title() . " by Jake Brewer") ?>">Tumblr</a>,
    <a target="_blank" href="https://facebook.com/sharer/sharer.php?u=<?php echo urlencode($page->url()) ?>">Facebook</a> or
    <a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode($page->url()) ?>&amp;description=<?php echo urlencode($page->title()) ?><?php if ($page->first_image()) : ?>&amp;media=<?php echo urlencode($page->first_image()->url()); ?><?php endif; ?>">Pinterest</a>
</p>
