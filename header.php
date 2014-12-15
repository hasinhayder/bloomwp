<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Bloom
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'bloom'); ?></a>

                    <header id="masthead" class="site-header" role="banner">
                        <div class="site-branding">
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                      rel="home"><?php bloginfo('name'); ?></a></h1>

                            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                        </div>
                        <!-- .site-branding -->

                        <!--                    <nav id="site-navigation" class="main-navigation" role="navigation">-->
                        <!--                        <button class="menu-toggle" aria-controls="menu"-->
                        <!--                                aria-expanded="false">--><?php //_e('Primary Menu', 'bloom'); ?><!--</button>-->
                        <!--                        --><?php //wp_nav_menu(array('theme_location' => 'primary')); ?>
                        <!--                    </nav>-->
                        <!-- #site-navigation -->
                    </header>
                    <!-- #masthead -->
                </div>
            </div>
        </div>
    </div>



    <div id="content" class="site-content">
