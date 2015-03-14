<?php if (isset($type)) : ?>
    <?php if ($type == 'twitter') : ?>

        <svg class="svg-ants svg-ants--triangle" viewBox="0 0 300 300">
            <polygon points="3,3 297,3 150,297" stroke-width="3" />
        </svg>

    <?php elseif ($type == 'pinterest') : ?>

        <svg class="svg-ants svg-ants--circle" viewBox="0 0 300 300">
            <circle cx="150" cy="150" r="148" stroke-width="3" />
        </svg>

    <?php else : ?>

        <svg class="svg-ants svg-ants--square" viewBox="0 0 300 300">
            <polygon points="0,0 300,0 300,300 0,300" stroke-width="6" />
        </svg>
    <?php endif; ?>
<?php endif; ?>
