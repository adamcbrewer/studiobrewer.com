<!doctype html>
<html class="no-js no-font <?php e($site->showtweets() == 'true', 'tweets-on', 'tweets-off') ?>">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $site->title() ?><?php if (!in_array($page->title(), array('Home'))) : ?> – <?php echo $page->title() ?><?php endif; ?></title>

    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">

    <meta name="author" content="Jake Brewer">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $site->url() ?>" />
    <meta property="og:title" content="<?php echo $site->title() ?>" />
    <meta property="og:image" content="<?php echo url('/assets/img/logo-og.png') ?>" />

    <script src="//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
    <script>
        WebFont.load({typekit: { id: 'eus0xse' }});
    </script>

    <?php echo css('assets/css/styles.prefixed.css') ?>
    <?php echo js('assets/js/modernizr.build.js') ?>

</head>
<body data-basepath="<?php echo $site->url() ?>" class="page--<?php echo strtolower($page->intendedTemplate()); ?>">

    <header class="header f-futura">
        <div class="header-inner contain contain--header">
            <nav class="nav nav--pages">
                <?php snippet('nav-one'); ?>
            </nav>
            <figure class="logo logo-main">
                <a href="<?php echo $site->url() ?>">
                    <?php snippet('icons/logo'); ?>
                </a>
            </figure>
            <nav class="nav nav--external">
                <?php snippet('nav-two'); ?>
            </nav>
        </div>
    </header>

    <section class="wrapper">

        <section class="content">

