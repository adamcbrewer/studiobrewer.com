<!doctype html>
<html class="no-js no-font <?php e($site->showtweets() == 'true', 'tweets-on', 'tweets-off') ?>">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $site->title() ?><?php if (!in_array($page->title(), array('Home'))) : ?> – <?php echo $page->title() ?><?php endif; ?></title>

    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">

    <meta name="author" content="<?php echo $site->author() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="<?php echo $site->url() ?>/favicon.ico?">
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <meta name="p:domain_verify" content="3761316ad9e543e395fbc50295378659"/>

    <?php if ($page->template() == 'project') : ?>

    <meta property="og:url" content="<?php echo $page->url() ?>" />
    <meta property="og:title" content="<?php echo $site->author() ?> &mdash; <?php echo $page->title() ?>" />
    <meta property="og:description" content="<?php echo excerpt($page->intro(), 200) ?>" />
    <meta property="og:image" content="<?php echo $page->feature()->url() ?>" />

    <meta name="twitter:site" content="jakefbrewer" />
    <meta name="twitter:creator" content="jakefbrewer" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $site->author() ?> &mdash; <?php echo $page->title() ?>" />
    <meta name="twitter:description" content="<?php echo excerpt($page->intro(), 200) ?>" />
    <meta name="twitter:image" content="<?php echo $page->feature()->url() ?>" />

    <?php else : ?>

    <meta property="og:url" content="<?php echo $site->url() ?>" />
    <meta property="og:title" content="<?php echo $site->title() ?>" />
    <meta property="og:description" content="<?php echo $site->description() ?>" />
    <meta property="og:image" content="<?php echo url('/assets/img/facebook.gif') ?>" />

    <meta name="twitter:site" content="jakefbrewer" />
    <meta name="twitter:creator" content="jakefbrewer" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $site->title() ?>" />
    <meta name="twitter:description" content="<?php echo $site->description() ?>" />
    <meta name="twitter:image" content="<?php echo url('/assets/img/facebook.gif') ?>" />

    <?php endif; ?>

    <?php if ($page->template() == 'project') : ?>
        <?php if ($prev = $page->prev()) : ?>
        <link rel="prev" href="<?php echo $prev->url(); ?>" />
        <?php endif; ?>
        <?php if ($next = $page->next()) : ?>
        <link rel="next" href="<?php echo $next->url(); ?>" />
        <?php endif; ?>
    <?php endif; ?>

    <script src="//ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
    <script>
        WebFont.load({typekit: { id: 'eus0xse' }});
    </script>

    <?php if (c::get('debug')) : echo css('assets/css/styles.prefixed.css'); else : echo css('assets/css/styles.css'); endif; ?>
    <?php echo js('assets/js/modernizr.build.js') ?>

</head>
<body data-basepath="<?php echo $site->url() ?>" class="page--<?php echo strtolower($page->intendedTemplate()); ?>">

    <header class="header">
        <div class="header-inner contain contain--header">
            <nav class="nav nav--one">
                <?php snippet('nav-one'); ?>
            </nav>
            <figure class="logo logo-main">
                <div class="inner">
                    <a href="<?php echo $site->url() ?>">
                        <?php snippet('icons/logo'); ?>
                    </a>
                </div>
            </figure>
            <nav class="nav nav--two">
                <?php snippet('nav-two'); ?>
            </nav>
        </div>
    </header>

    <section class="wrapper">

        <section class="content">
