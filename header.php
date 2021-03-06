<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="UTF-8">

        <title>
            <?php
                echo wp_title(" -- ", true, right);
                echo bloginfo("name");
            ?>
        </title>

        <meta name="author" content="HILDEOR" />

        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
        <!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->
        <script src="<?php echo get_template_directory_uri(); ?>/scripts/html5shiv.js"></script>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

        <link rel="alternate" type="application/rss+xml" title="Fotverksbryggeriet RSS Feed" href="http://fotverksbryggeriet,no/feed/" />

        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://fotverksbryggeriet.no/xmlrpc.php?rsd" />
        <link rel="pingback" href="http://fotverksbryggeriet.no/xmlrpc.php">

        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


        <script src="https://use.typekit.net/ayw2yjo.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>

        <?php wp_head(); ?>

    </head>
    <body>


        <!--header-->
        <header class="header" role="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__table">
                            <div class="header__column header__column--left">
                                <!--navigation-->
                                <nav class="navigation" role="navigation">
                                    <?php
                                        $defaults = array(
                                        'theme_location'  => 'headermenuleft',
                                        'container'       => '',
                                        'container_class' => '',
                                        'echo'            => false,
                                        'fallback_cb'     => false,
                                        'items_wrap'      => '%3$s',
                                        'depth'           => 0
                                        );
                                        echo strip_tags(wp_nav_menu( $defaults ), '<a>');
                                    ?>
                                </nav>
                                <!--navigation-->
                            </div>

                            <div class="header__column header__column--center">
                                <a class="fot-logo__link" href="http://fotverksbryggeriet.no">
                                    <img class="bryggeri-logo" src="<?php echo get_template_directory_uri(); ?>/images/bryggeri_logo.png" alt="FVB logo" />
                                </a>
                            </div>
                            <div class="header__column header__column--right">
                                <!--navigation-->
                                <nav class="navigation" role="navigation">
                                    <?php
                                        $defaults = array(
                                        'theme_location'  => 'headermenuright',
                                        'container'       => '',
                                        'container_class' => '',
                                        'echo'            => false,
                                        'fallback_cb'     => false,
                                        'items_wrap'      => '%3$s',
                                        'depth'           => 0
                                        );
                                        echo strip_tags(wp_nav_menu( $defaults ), '<a>');
                                    ?>
                                </nav>
                                <!--navigation-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--header-->

        <!--Breadcrumbs -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <?php
                        if (function_exists('bcn_display'))
                                       {
                                           bcn_display();
                                       }
                    ?>
                </div>
            </div>
        </div>


        <section id="main" class="content" role="main">

            <?php // if ( is_user_logged_in() ): ?>
