<?php

/***********
 * STYLESHEETS & SCRIPTS
 */
function add_theme_scripts() { 
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fa.min.css', array(), '5.7.2', 'all');
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.2.1', 'all');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
 
  wp_enqueue_script("jquery");
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), '4.2.1', true);
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/***********
 * ADDING MENU
 */
include( get_template_directory() . '/inc/navwalker.php');
add_theme_support('menus');
function register_theme_menus() {
    register_nav_menus(
            array('primary'=> _('Primary'))
    );
    register_nav_menus(
            array('secondary'=> _('Secondary'))
    );
    register_nav_menus(
            array('topbar_menu'=> _('TopBar Menu'))
    );
}
add_action('init','register_theme_menus');
/***********
 * REMOVING UNWANTED SCRIPTS
 */
//remove_action('wp_head', 'wp_generator');
//remove_action( 'wp_head', 'rsd_link' );
//remove_action( 'wp_head', 'wlwmanifest_link' );
//remove_action( 'wp_head', 'wp_generator' );
//remove_action( 'wp_head', 'start_post_rel_link' );
//remove_action( 'wp_head', 'index_rel_link' );
//remove_action( 'wp_head', 'adjacent_posts_rel_link' );
//remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
//remove_action( 'wp_head', 'bs_shortcodes-css' );
//remove_action( 'wp_head', 'bs_bootstrap-css' );
//remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
//remove_action('wp_head', 'start_post_rel_link', 10, 0);
//remove_action('wp_head', 'feed_links', 2);
//remove_action('wp_head', 'feed_links_extra', 3);
//remove_action('wp_head', 'parent_post_rel_link', 10, 0);

/***********
 * WIDGETS
 */

function create_widget( $name, $id, $description ) {
    register_sidebar(array(
            'name' => __( $name ),	 
            'id' => $id, 
            'description' => __( $description ),
//            'before_widget' => '<div id="%1$s" class="widget %2$s">',
//            'after_widget' => '</div>',
            'before_widget' => '',
            'after_widget' => '',
//            'before_title' => '',
//            'after_title' => ''
            'before_title' => '<h3 class="widget-title %2$s">',
            'after_title' => '</h3>'
    ));
}

create_widget( 'Page Sidebar', 'page', 'Appears on the side of pages with a sidebar' );
//create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

create_widget( 'Topbar Left One', 'topbar-left-1', 'Appears top left corner of the website.');
create_widget( 'Topbar Left Two', 'topbar-left-2', 'Appears top left corner of the website.');

//global $hs3_items; $hs3_items = array('categories', 'search', 'wishlist', 'compare','cart');
function hs3_items(){
    $hs3_items = array('categories', 'search','cart');
    return $hs3_items;
}
$hs3_items = hs3_items();
foreach($hs3_items as $hs3_item){
    create_widget( 'Header '.ucfirst($hs3_item), 'header-'.$hs3_item, 'Appears at header section 3');   
}
for($s = 1; $s <= 5; $s++){
    create_widget( 'Footer '.$s, 'footer-'.$s, 'Appears at Footer as a section');  
}
//create_widget( 'Footer Widget ', 'fwp', 'Footer WooCommerce Products' );
//create_widget( 'Header Right', 'header-right', 'One the right side of the header' );
//create_widget( 'Footer Right', 'footer-right', 'One the right side of the footer' );

/* Disable WordPress Admin Bar for all users but admins. */
//add_filter( 'show_admin_bar', '__return_false' );

/**
 * ADDING FEATURED IMAGE OPTION
 */
add_theme_support( 'post-thumbnails' );

/***
*Removing p Tags
***/
//remove_filter ('the_content',  'wpautop');
remove_filter ('the_excerpt',  'wpautop');

/*****
** ADDING BLOG HOME TO NAVIGATION IF CREATING BLOG
***/
function childtheme_menu_args($args) {
$args = array(
'show_home' => 'Home',
'sort_column' => 'menu_order',
'menu_class' => 'menu',
'echo' => true
);
return $args;
}
add_filter('wp_page_menu_args','childtheme_menu_args');
/*****
** BREADCRUMBS
***/
function the_breadcrumb() {
echo "<ol class='breadcrumb'>";
if (!is_home()) {
    echo '<li><a href="'.get_option('home').'"> Home '."</a><li>";
    if (is_category() || is_single()) {echo '<li>'.the_category('title_li=').'</li>';
        if (is_single()) {the_title();}
    } 
    elseif (is_page()) {the_title();}
}//is_home
echo "</ol>";
}

/* CUSTOM EXCERPT LENGTH */
function custom_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'custom_excerpt_length');

/****
REMOVE [] FROM EXCERPT:
***/
function new_excerpt_more( $more ) {
	return '...';
}
//add_filter('excerpt_more', 'new_excerpt_more');
///////////////////////////////////
//// KILL THE ADMIN NAG
///////////////////////////////////
//if (!current_user_can('edit_users')) {
//	add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
//	add_filter('pre_option_update_core', create_function('$a', "return null;"));
//}
////////////////////////////
////||UPLOAD LOGO
////////////////////////////
//function themeslug_theme_customizer( $wp_customize ) {
/* First, we'll create a new section for our logo upload. Note that the description will not be displayed when using the Theme Customizer; it is simply used for the section heading's title attribute.*/
/*$wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );*/
/*Next, we register our new setting. It doesn't get any easier than this:*/
//$wp_customize->add_setting( 'themeslug_logo' );
/*Lastly, we tell the Theme Customizer to let us use an image uploader for setting our logo:*/
/*$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
) ) );*/

//}
//CALLING THE FUNCTION
//add_action('customize_register', 'themeslug_theme_customizer');

/////////////////////////////////////////
// CATEGORY ID IN BODY AND POST CLASS
////////////////////////////////
function category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
		$classes [] = 'cat-' . $category->cat_ID . '-id';
		return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

////////////////////////////
// ESCAPE HTML ENTITIES IN COMMENTS
///////////////////////////
function encode_code_in_comment($source) {
	$encoded = preg_replace_callback('/<code>(.*?)<\/code>/ims',
	create_function('$matches', '$matches[1] = preg_replace(array("/^[\r|\n]+/i", "/[\r|\n]+$/i"), "", $matches[1]); 
	return "<code>" . htmlentities($matches[1]) . "</code>";'), $source);
	if ($encoded)
		return $encoded;
	else
		return $source;
}
add_filter('pre_comment_content', 'encode_code_in_comment');
////////////////////////////
// THEME OPTIONS
///////////////////////////

//logo in theme options
function bootpress_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'bootpress_custom_logo_setup' );

include('admin/themeOptions.php');
/*get theme options*/  $options = get_option( 'theme_settings' ); 
global $options;