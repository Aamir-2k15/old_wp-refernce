<!DOCTYPE html><?php /*get theme options*/  $options = get_option( 'theme_settings' ); global $options;?>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
            <title><?php bloginfo('name'); ?> <?php wp_title('|',true); ?></title>
         <style>.logo {    height: 70px;}</style>  
        <meta name="description" content="<?=(isset($options['site_description'])?$options['site_description']:''); ?>">
        <meta name="author" content="<?=(isset($options['site_description'])?$options['site_author']:''); ?>">
        <!-- mobile specific metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- favicons
        ================================================== -->
        <link rel="shortcut icon" href="<?=(isset($options['favicon'])?$options['favicon']:''); ?>" type="image/x-icon">
        <link rel="icon" href="<?=(isset($options['favicon'])?$options['favicon']:''); ?>" type="image/x-icon">
<?php wp_head(); ?> 
    </head>

    <body id="top" <?php body_class(); ?>>

        <!-- pageheader
        ================================================== -->
        <section class="s-pageheader s-pageheader--home">

            <header class="header">
                <div class="header__content row">

                    <div class="header__logo">
                        <a class="logo" href="<?= site_url()?>">
                            <?php if(isset($options['logo'])){?><img class="logo" src="<?=$options['logo'];?>" alt="<?php bloginfo('name'); ?>"><?php }else{ echo bloginfo('name');} ?>
                        </a>
                    </div> <!-- end header__logo -->

                    <ul class="header__social">
                        
<?php /* if(isset($options['facebook']) && $options['facebook']!=""){?><li><a href="<?=$options['facebook'];?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><?php }*/?>
<!--                        <li>
                            <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        </li>-->
<?php global $social_arr; //print_r($social_arr);?>
<?php foreach($social_arr as $social){
    if(isset($options[$social]) && $options[$social]!=""){?><li><a href="<?=$options[$social];?>" title="<?=$social?>"><i class="fa fa-<?=$social?>" aria-hidden="true"></i></a></li><?php }    
}?>
<?php ?>
                    </ul> <!-- end header__social -->

                    <a class="header__search-trigger" href="#0"></a>

                    <div class="header__search">

                        <form role="search" method="get" class="header__search-form" action="#">
                            <label>
                                <span class="hide-content">Search for:</span>
                                <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                            </label>
                            <input type="submit" class="search-submit" value="Search">
                        </form>

                        <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

                    </div>  <!-- end header__search -->


                    <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                    <nav class="header__nav-wrap">

                        <h2 class="header__nav-heading h6">Site Navigation</h2>
<?php $args =  array(
'theme_location'  => 'primary_menu',
'menu'            => 'primary_menu',
'container'       => 'false',
'container_class' => '',
'container_id'    => '',
'menu_class'      => 'menu',
'menu_id'         => '',
'echo'            => true,
'fallback_cb'     => 'wp_page_menu',
'before'          => '',
'after'           => '',
'link_before'     => '',
'link_after'      => '',
'items_wrap'      => '<ul id="primary_menu" class="header__nav">%3$s</ul>',
'depth'           => 4,
'walker'         => new  Walker_Nav_Primary(), // This controls the display of the Bootstrap Navbar
'fallback_cb'    => 'Walker::fallback', // For menu fallback
);?>
<?php wp_nav_menu($args);?>
<!--                        <ul class="header__nav">
                            <li class="current"><a href="index.html" title="">Home</a></li>
                            <li class="has-children">
                                <a href="#0" title="">Categories</a>
                                <ul class="sub-menu">
                                    <li><a href="category.html">Lifestyle</a></li>
                                    <li><a href="category.html">Health</a></li>
                                    <li><a href="category.html">Family</a></li>
                                    <li><a href="category.html">Management</a></li>
                                    <li><a href="category.html">Travel</a></li>
                                    <li><a href="category.html">Work</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#0" title="">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="single-video.html">Video Post</a></li>
                                    <li><a href="single-audio.html">Audio Post</a></li>
                                    <li><a href="single-gallery.html">Gallery Post</a></li>
                                    <li><a href="single-standard.html">Standard Post</a></li>
                                </ul>
                            </li>
                            <li><a href="style-guide.html" title="">Styles</a></li>
                            <li><a href="about.html" title="">About</a></li>
                            <li><a href="contact.html" title="">Contact</a></li>
                        </ul> -->
                        <!-- end header__nav -->

                        <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                    </nav> <!-- end header__nav-wrap -->

                </div> <!-- header-content -->
            </header> <!-- header -->
