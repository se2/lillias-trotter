<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php wp_title( '', true, 'right' ); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

    <header class="bg-cover header-desktop" style="background-image: url('<?php echo IMG_PATH; ?>/header-bg.png');">

        <div class="logo">
            <?php if (get_field('site_logo', 'option')): ?>
            <img src="<?php the_field('site_logo', 'option') ?>" alt="Lillias Trotter">
            <?php endif; ?>
        </div>

        <div class="site-menu">
            <?php
                wp_nav_menu(array(
                    'menu' => 'Main Menu',
                    'container_class' => 'main-menu'
                ));
            ?>
        </div>

        <div class="nav-toggle hamburger hamburger--collapse visible-xs visible-s visible-sm" id="nav-icon">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>

    </header>
