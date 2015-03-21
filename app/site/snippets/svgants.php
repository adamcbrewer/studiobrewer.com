<?php if (isset($type)) : ?>
    <?php if ($type == 'twitter') : ?>

        <svg class="svg-ants svg-ants--hexagon" preserveAspectRatio="xMidYMid" width="300" height="346.39" viewBox="0 0 215 248">
            <path d="M107.597,246.505 C107.597,246.505 1.505,185.252 1.505,185.252 C1.505,185.252 1.505,62.748 1.505,62.748 C1.505,62.748 107.597,1.495 107.597,1.495 C107.597,1.495 213.689,62.748 213.689,62.748 C213.689,62.748 213.689,185.252 213.689,185.252 C213.689,185.252 107.597,246.505 107.597,246.505 Z" stroke-width="3" />
            <!-- <polygon points="3,150 80,3 220,0 297,150 220,300 80,300" stroke-width="3"/> -->
        </svg>

        <!--
        <svg class="svg-ants svg-ants--hexagon" viewBox="0 0 300 300">
            <polygon points="150,0" stroke-width="3" />
        </svg>
        -->


    <?php elseif ($type == 'pinterest') : ?>

        <svg class="svg-ants svg-ants--circle" viewBox="0 0 300 300">
            <circle cx="150" cy="150" r="148" stroke-width="4"/>
        </svg>

    <?php else : ?>

        <svg class="svg-ants svg-ants--square" viewBox="0 0 300 300">
            <polygon points="0,0 300,0 300,300 0,300" stroke-width="7" shape-rendering="crispEdges"/>
        </svg>
    <?php endif; ?>
<?php endif; ?>
