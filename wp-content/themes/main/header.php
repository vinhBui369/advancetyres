<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo FAVICON; ?>">

    <!-- Build Main CSS -->
    <link rel="preload" as="style" type="text/css" href="<?= THEME_ASSETS ?>/css/base.scss.css">
    <link href="<?= THEME_ASSETS ?>/css/base.scss.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="style" type="text/css" href="<?= THEME_ASSETS ?>/css/style.scss.css">
    <link href="<?= THEME_ASSETS ?>/css/style.scss.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="style" type="text/css" href="<?= THEME_ASSETS ?>/css/style_update.scss.css">
    <link href="<?= THEME_ASSETS ?>/css/style_update.scss.css" rel="stylesheet" type="text/css" media="all" />
   
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <div id="page" class="site-container">
        <header id="header-main" class="header sticker">
            <?php get_template_part('template-parts/header/menu', 'main'); ?>
        </header>
        <div id="content" class="site-content">