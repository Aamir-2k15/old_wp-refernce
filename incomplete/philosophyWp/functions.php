<?php
global $options;
/***********
 * Adding Useful Function
 */
//require_once get_template_directory().'/admin/admin.php';

/***********
 * STYLESHEETS & SCRIPTS
 */
function add_theme_scripts() { 

//  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');

  wp_enqueue_style( 'base', get_template_directory_uri() . '/css/base.css', array(), '1.1', 'all');
  wp_enqueue_style( 'vendor', get_template_directory_uri() . '/css/vendor.css', array(), '1.1', 'all');
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.1', 'all');

  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
 
  wp_enqueue_script("jquery");
  
//  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
 wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array ( 'jquery' ), 1.1, true);
 wp_enqueue_script( 'pace-min', get_template_directory_uri() . '/js/pace.min.js', array ( 'jquery' ), 1.1, true);
 wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array ( 'jquery' ), 1.1, true);
 wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/***********
 * STYLESHEETS & SCRIPTS
 */
//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/***********
 * ADDING MENU
 */
include( get_template_directory() . '/inc/walker.php');
include( get_template_directory() . '/inc/walker_mobile.php');
add_theme_support('menus');
function register_theme_menus() {
    register_nav_menus(
            array('primary_menu'=> _('Primary Menu'))
    );
    register_nav_menus(
            array('footer_menu'=> _('Footer Menu'))
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
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

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
for($s = 1; $s <= 4; $s++){
    create_widget( 'Footer '.$s, 'footer-'.$s, 'Appears at Footer as a section');  
}
//create_widget( 'Footer Woo Products', 'fwp', 'Footer WooCommerce Products' );
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

// Numbered Pagination
function wpStarter_pagination() {
	global $wp_query;
		$big = 999999999; // need an unlikely integer
			echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
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

include('admin/themeOptions.php');
/*get theme options*/  $options = get_option( 'theme_settings' ); 
global $options;
////////////////////////////
// SHORTCODES
///////////////////////////
/* function lorem_func( $paras ){
    $para1 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nam at lectus urna duis. Ut tellus elementum sagittis vitae et leo. Ullamcorper a lacus vestibulum sed. Augue eget arcu dictum varius duis at consectetur lorem. Odio ut enim blandit volutpat maecenas. Non enim praesent elementum facilisis leo. Imperdiet sed euismod nisi porta. Mi proin sed libero enim sed faucibus. Sed tempus urna et pharetra pharetra massa massa ultricies. Magna eget est lorem ipsum dolor sit amet consectetur. Ut porttitor leo a diam sollicitudin tempor id eu. Ut porttitor leo a diam. At risus viverra adipiscing at in tellus integer.";
    $para2 = "Nunc consequat interdum varius sit amet mattis vulputate. Senectus et netus et malesuada fames ac. Nec ultrices dui sapien eget mi proin sed libero. Nulla facilisi etiam dignissim diam. Justo eget magna fermentum iaculis eu non. Volutpat consequat mauris nunc congue nisi vitae. Risus pretium quam vulputate dignissim suspendisse. Commodo ullamcorper a lacus vestibulum sed arcu non. Dignissim convallis aenean et tortor at risus. Porttitor rhoncus dolor purus non enim. Nunc lobortis mattis aliquam faucibus purus in massa. Scelerisque eleifend donec pretium vulputate sapien. Sagittis id consectetur purus ut faucibus. Velit ut tortor pretium viverra suspendisse potenti nullam ac. Ultricies leo integer malesuada nunc vel risus commodo. Odio euismod lacinia at quis risus. Mollis nunc sed id semper risus in. Quam id leo in vitae.";
    $para3 = "Viverra vitae congue eu consequat ac felis donec. Odio ut sem nulla pharetra diam. Id donec ultrices tincidunt arcu non sodales. Sed augue lacus viverra vitae. Ac placerat vestibulum lectus mauris ultrices eros. Habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat. Odio pellentesque diam volutpat commodo. Eget mi proin sed libero enim sed faucibus turpis in. Id porta nibh venenatis cras sed felis eget. Dignissim convallis aenean et tortor at risus viverra adipiscing at. Convallis posuere morbi leo urna molestie at elementum. Est ultricies integer quis auctor elit sed vulputate. Sem integer vitae justo eget magna fermentum iaculis eu. Eget magna fermentum iaculis eu. Pellentesque id nibh tortor id. Eu volutpat odio facilisis mauris sit amet.";
    $para4 = "Fringilla ut morbi tincidunt augue. Egestas quis ipsum suspendisse ultrices gravida dictum. Libero enim sed faucibus turpis in. Sodales neque sodales ut etiam sit amet nisl purus in. Dolor morbi non arcu risus quis varius quam quisque id. Elementum facilisis leo vel fringilla est. Viverra tellus in hac habitasse platea. Morbi tincidunt ornare massa eget egestas purus viverra accumsan. Turpis egestas maecenas pharetra convallis. Cras semper auctor neque vitae tempus quam pellentesque. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Suspendisse sed nisi lacus sed viverra tellus in hac habitasse. Odio euismod lacinia at quis. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Purus in massa tempor nec feugiat nisl. In massa tempor nec feugiat nisl pretium fusce id velit.";
    $para5 = "Interdum varius sit amet mattis vulputate enim nulla aliquet. Lacus sed viverra tellus in hac. Ac orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet. Vitae purus faucibus ornare suspendisse sed nisi lacus. Magna eget est lorem ipsum dolor sit amet. Tellus integer feugiat scelerisque varius morbi. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium. Sodales neque sodales ut etiam sit. Consequat interdum varius sit amet mattis vulputate enim. Et tortor consequat id porta nibh. Pharetra diam sit amet nisl suscipit adipiscing. Lacus sed viverra tellus in hac habitasse. Laoreet sit amet cursus sit amet dictum sit amet. Ullamcorper a lacus vestibulum sed arcu non odio euismod. Cursus euismod quis viverra nibh.";

    
    
    switch ($paras) {
    case 1:
        return '<p>'.$para1.'</p>';
        break;
    case 2:
        return '<p>'.$para1.'</p>'.'<p>'.$para2.'</p>';
        break;
    case 3:
        '<p>'.$para1.'</p>'.'<p>'.$para2.'</p>'.'<p>'.$para3.'</p>';
        break;
    case 4:
        '<p>'.$para1.'</p>'.'<p>'.$para2.'</p>'.'<p>'.$para3.'</p>'.'<p>'.$para4.'</p>';
        break;
    case 5:
        '<p>'.$para1.'</p>'.'<p>'.$para2.'</p>'.'<p>'.$para3.'</p>'.'<p>'.$para4.'</p>'.'<p>'.$para5.'</p>';
        break;
    default:
        return '<p>'.$para1.'</p>';
    }
    
}
add_shortcode( 'LOREM', 'lorem_func' ); */


/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}
/*****************
 * COMMON ARRAYS
 * * */
 include_once('inc/common_arr.php');global $social_arr;
 
?>