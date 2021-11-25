<!doctype html>
<?php /*get theme options*/  $options = get_option( 'theme_settings' ); ?>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?=$options['website_description'];?>">
<meta name="keywords" content="<?=$options['website_keywords'];?>"/>
<meta name="author" content="">
<link rel="shortcut icon" type="image/x-icon" href="<?=$options['upload_favicon'];?>">
<title><?=(is_front_page())?"Home":wp_title(" ");?> | <?php bloginfo('name'); ?></title>
<?php wp_head();?>
</head>
<body  <?php body_class(); ?>>
<div class="container">
<header class="blog-header py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
      <?php dynamic_sidebar('topbar-left-1');?>
    </div>
<div class="col-4 text-center"> 
</div>
    <div class="col-4 d-flex justify-content-end align-items-center">
      <?php if ( $options['topbar-text'] != '' ){ echo $options['topbar-text'];} ?>
    </div>
  </div>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
        echo '<img src="'. esc_url( $logo[0] ) .'">';
} else {?>
       <a href="<?=bloginfo('url');?>"><?=get_bloginfo( 'name' );?></a>
<?php }?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php $args =  array(
'theme_location'  => 'primary',
'menu'            => 'primary',
'container'       => 'true',
'container_class' => '',
'container_id'    => '',
'menu_class'      => 'collapse navbar-collapse',
'menu_id'         => '',
'echo'            => true,
'fallback_cb'     => 'wp_page_menu',
'before'          => '',
'after'           => '',
'link_before'     => '',
'link_after'      => '',
'items_wrap'      => '<ul class="navbar-nav ml-auto">%3$s</ul>',
'depth'           => 6,
'walker'          => new WP_Bootstrap_Navwalker()
);?>
    <?php wp_nav_menu($args);?>
  </div>
</nav>
    
</header>