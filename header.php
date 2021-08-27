<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tappengine-afterglow
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="preloader">
    <div id="status">
        <div class="spinner">
<!--            <svg class="spinner">-->
<!--                <circle cx="73" cy="73" r="60"></circle>-->
<!--            </svg>-->
        </div>
    </div>
</div>
<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#primary"><?php esc_html_e('Skip to content', 'tappengine-afterglow'); ?></a>

    <header id="masthead" class="site-header fixed-header">
        <div class="container afterglow-header">
            <div class="site-branding">
                <a class="logo" href="/"><img src="/wp-content/themes/tappengine-afterglow/assets/img/logo.svg"
                                              alt="Tappengine"></a>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->
