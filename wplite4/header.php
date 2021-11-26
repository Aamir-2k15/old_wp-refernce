<!DOCTYPE html><html lang="en"><?php /* get theme options */ $options = get_option('theme_settings');global $options;?>
    <head>
        <meta charset="utf-8">
        <title>
            <?php is_front_page() ? " Home " : wp_title('', true) . " | "; ?>
            <?php bloginfo('name') ; ?>
        </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="<?= $options['author_desc']; ?>" name="keywords">
        <meta content="<?= $options['site_dsec']; ?>" name="description">

        <!-- Favicons -->
        <link href="<?= $options['logo']; ?>" rel="icon">
        <link href="<?= $options['logo']; ?>" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="<?= get_template_directory_uri() ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="<?= get_template_directory_uri() ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= get_template_directory_uri() ?>/lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?= get_template_directory_uri() ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="<?= get_template_directory_uri() ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?= get_template_directory_uri() ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="<?= get_template_directory_uri() ?>/style.css" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <!--==========================
        Header
        ============================-->
        <header id="header" class="fixed-top">
            <div class="container">

                <div class="logo float-left">
                    <a href="<?= site_url(); ?>" class="scrollto"><img src="<?= $options['logo']; ?>" alt="<?php bloginfo('name'); ?>" class="img-fluid"></a>
                </div>

                <nav class="main-nav float-right d-none d-lg-block">
                    <?php
                    $args = array(
                        'theme_location' => 'primary_menu',
                        'menu' => 'primary_menu',
                        'container' => 'false',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => 'menu',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul>%3$s</ul>',
                        'depth' => 2,
                        'walker' => new Walker_Nav_Primary(), // This controls the display of the Bootstrap Navbar
                        'fallback_cb' => 'Walker::fallback', // For menu fallback
                    );
                    ?>
                    <?php wp_nav_menu($args); ?>  
                </nav><!-- .main-nav -->

            </div>
        </header><!-- #header -->