<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
                                        echo ' :';
                                    } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link rel="shortcut icon" href="<?php echo $logo_image = get_field('favicon_ico', 'option'); ?>">
    <link rel="shortcut icon" href="<?php echo $logo_image = get_field('favicon_png', 'option'); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="theme-color" content="#db6237">
    <meta name="format-detection" content="telephone=no">

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
    <script>
    new WOW().init({
        mobile: false
    });
    </script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css?v=1.6.8" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <link href="//db.onlinewebfonts.com/c/aa9c90aa724a37da018eb22455953107?family=Dirty+Headline" rel="stylesheet"
        type="text/css" />

    <?php wp_head(); ?>

    <style>
    <?php echo get_field('css_text_area', 'option');
    ?>
    </style>
</head>

<body <?php body_class(); ?>>
    <a id="back-to-top" class="" href="#"><i class="fa fa-angle-up"></i></a>


    <header>
        <div class="header-top-image">
            <img src="<?php the_field("footer_top_image", "option"); ?>" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-0">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand mr-auto rotate " href="<?php echo get_home_url(); ?>">
                            <img src="<?php the_field("header_logo", "options"); ?>" alt="" />
                        </a>
                        <input type="checkbox" id="toggle" style="display:none;">
                        <label class="toggle-btn toggle-btn__cross" for="toggle">
                            <div class="cross-btn-image">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </div>
                        </label>
                        <div class="navbar-collapse collapse " id="navbarMobile">
                            <div class="navbar_content">
                                <div class="Mobile-menu-logo">
                                    <a href="<?php echo get_home_url(); ?>">
                                        <img src="<?php the_field("mobile_menu_logo", "options"); ?>" alt="" />
                                    </a>
                                </div>
                                <?php
                                    $defaults = array(
                                        'menu' => 'header menu',
                                        'menu_class' => 'nav navbar-nav'
                                    );
                                    wp_nav_menu($defaults);
                                ?>


                                <div class="header-navbar-section">
                                    <div class="header-mobile-number">
                                        <a href="tel: <?php the_field("header_mobile_number_url" ,"option");?>">
                                            <?php the_field("header_mobile_number" ,"option");?>
                                        </a>
                                    </div>
                                    <div class="header-address">
                                        <a href="<?php the_field("header_address_url" ,"option");?>">
                                            <?php the_field("header_address" ,"option");?>
                                        </a>
                                    </div>
                                    <div class="header-buttom">
                                        <a href="<?php the_field("header_button_url" ,"option");?>">
                                            <?php the_field("header_button" ,"option");?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>