<?php /* get theme options */ $options = get_option('theme_settings');global $options; ?><?php if($options['custom_header'] !=""){ include_once('templates/custom_header.php'); }else{?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?=$options['site_dsec'];?>">
<meta name="author" content="<?=$options['author_desc'];?>">
<title>
<?php bloginfo('name'); ?>
<?php wp_title('|', true); ?>
</title>
<!-- Bootstrap core CSS -->
<link rel="shortcut icon" href="<?= (isset($options['favicon']) ? $options['favicon'] : ''); ?>" type="image/x-icon">
<link rel="icon" href="<?= (isset($options['favicon']) ? $options['favicon'] : ''); ?>" type="image/x-icon">

<?php wp_head(); ?>
<?php if($options['theme_styles']=="yes"){?><link rel='stylesheet' type='text/css' href="<?=get_template_directory_uri();?>/inc/dynamic_styles.php"/><?php } ?>
</head>
<body id="top" <?php body_class(); ?>>
<div id="wrap">
<!-- Navigation -->
<header id="default_header" class="<?=($options['sticky_header']!='')?'sticky-top':'';?>">
<nav class="navbar navbar-expand-lg static-top navbar-light">
  <div class="container"> <a class="navbar-brand logo" href="<?= site_url(); ?>">
    <?php if (isset($options['logo'])) { ?>
    <img class="logo" src="<?= $options['logo']; ?>" alt="<?php bloginfo('name'); ?>" id="logo">
<?php
                } else {
                    echo bloginfo('name');
                }
                ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
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
                        'items_wrap' => '<ul id="primary_menu" class="navbar-nav ml-auto">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new Walker_Nav_Primary(), // This controls the display of the Bootstrap Navbar
                        'fallback_cb' => 'Walker::fallback', // For menu fallback
                    );
                    ?>
      <?php wp_nav_menu($args); ?>
      <div class=" ml-auto mr-0">
        <?php is_active_sidebar('default_header_right') ? dynamic_sidebar('default_header_right') : '' ?>
      </div>
    </div>
  </div>
</nav>
</header><?php }?>