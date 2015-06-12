<?php if (isset($type)) : ?>

    <?php if ($type == 'twitter') : ?>

        <svg class="svg-ants svg-ants--octogon" preserveAspectRatio="xMidYMid" width="240" viewBox="0 0 277.2 277.2">
            <path stroke-width="3" stroke-miterlimit="10" d="M231.2 37.5L132.7 1.6 37.5 46 1.6 144.5 46 239.8l98.5 35.8 95.3-44.4 35.8-98.5z"/>
        </svg>

    <?php elseif ($type == 'pinterest') : ?>

        <svg class="svg-ants svg-ants--circle" preserveAspectRatio="xMidYMid" width="240" viewBox="0 0 300 300">
            <circle cx="150" cy="150" r="148" stroke-width="4"/>
        </svg>

    <?php else : ?>

        <svg class="svg-ants svg-ants--square" preserveAspectRatio="xMidYMid" width="240" viewBox="0 0 300 300">
            <polygon points="0,0 300,0 300,300 0,300" stroke-width="7" shape-rendering="crispEdges"/>
        </svg>

    <?php endif; ?>

<?php endif; ?>
