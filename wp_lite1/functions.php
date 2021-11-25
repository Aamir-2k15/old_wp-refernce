<?php

/* * *********
 * Adding Useful Function
 */

//require_once get_template_directory().'/admin/admin.php';

include('admin/themeOptions.php');
/* get theme options */ $options = get_option('theme_settings');
global $options;


/* * *********
 * STYLESHEETS & SCRIPTS
 */
function add_theme_scripts() {
//  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');

    wp_enqueue_style('bs', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style('fa', get_template_directory_uri() . '/css/fa.min.css', array(), '1.1', 'all');

    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
	
    wp_enqueue_script("jquery");

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), 1.1, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');


// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

/* * *********
 * STYLESHEETS & SCRIPTS
 */

//Page Slug Body Class
function add_slug_body_class($classes) {
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

add_filter('body_class', 'add_slug_body_class');

/* * *********
 * ADDING MENU
 */
include( get_template_directory() . '/inc/walker.php');
include( get_template_directory() . '/inc/walker_mobile.php');
add_theme_support('menus');

function register_theme_menus() {
    register_nav_menus(
            array('primary_menu' => _('Primary Menu'))
    );
    register_nav_menus(
            array('secondary_menu' => _('Secondary Menu'))
    );
}

add_action('init', 'register_theme_menus');
/**
 * CSS FOR ACF PAGE TEMPLATE BACKEND
 * **/
add_action('admin_head', 'pagebg_custom_css');

function pagebg_custom_css() {
  echo '<style>
    .special, .special * {background:#EEE;} 
  </style>';
}
/* * *********
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

/* * *********
 * WIDGETS
 */

function create_widget($name, $id, $description) {
    register_sidebar(array(
        'name' => __($name),
        'id' => $id,
        'description' => __($description),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
//            'before_title' => '',
//            'after_title' => ''
        'before_title' => '<h4 class="widget-title %2$s">',
        'after_title' => '</h4>'
    ));
}

create_widget( 'Default Header Right', 'default_header_right', 'On the right side of the header' );

create_widget('Page Sidebar', 'page', 'Appears on the side of pages with a sidebar');
create_widget('Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section');
create_widget('Default Footer 1', 'default_footer_1', 'Displays on the left column in default footer.');
create_widget('Default Footer 2', 'default_footer_2', 'Displays on the 2nd column in default footer.');
create_widget('Default Footer 3', 'default_footer_3', 'Displays on the 3rd column in default footer.');
create_widget('Default Footer 4', 'default_footer_4', 'Displays on the 4th column in default footer.');

create_widget('Default Footer Bottom', 'default_footer_bottom', 'Displays on the bottom section of default footer.');

create_widget('Common section 1', 'common_section_1', 'Displays on common section when called on sections template.');

create_widget('Common section 2', 'common_section_2', 'Displays on common section 2 if/when called on sections template.');

create_widget('Common section 3', 'common_section_3', 'Displays on common section 3 if/when called on sections template.');



//create_widget( 'Footer Woo Products', 'fwp', 'Footer WooCommerce Products' );
//
//create_widget( 'Footer Right', 'footer-right', 'One the right side of the footer' );

/* Disable WordPress Admin Bar for all users but admins. */
//add_filter( 'show_admin_bar', '__return_false' );

/**
 * ADDING FEATURED IMAGE OPTION
 */
add_theme_support('post-thumbnails');

/* * *
 * Removing p Tags
 * * */
//remove_filter ('the_content',  'wpautop');
remove_filter('the_excerpt', 'wpautop');
//remove_filter ('acf_the_field', 'wpautop');
/* * ***
 * * ADDING BLOG HOME TO NAVIGATION IF CREATING BLOG
 * * */

function childtheme_menu_args($args) {
    $args = array(
        'show_home' => 'Home',
        'sort_column' => 'menu_order',
        'menu_class' => 'menu',
        'echo' => true
    );
    return $args;
}

add_filter('wp_page_menu_args', 'childtheme_menu_args');
/* * ***
 * * BREADCRUMBS
 * * */

function the_breadcrumb($class) {
    echo "<ol class='breadcrumb '.$class>";
    if (!is_home()) {
        echo '<li><a href="' . get_option('home') . '"> Home ' . "</a><li>";
        if (is_category() || is_single()) {
            echo '<li>' . the_category('title_li=') . '</li>';
            if (is_single()) {
                the_title();
            }
        } elseif (is_page()) {
            the_title();
        }
    }//is_home
    echo "</ol>";
}

/* CUSTOM EXCERPT LENGTH */

function custom_excerpt_length($length) {
    return 30;
}

//add_filter('excerpt_length', 'custom_excerpt_length');

/* * **
  REMOVE [] FROM EXCERPT:
 * * */
function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Numbered Pagination
function wpStarter_pagination() {
    echo "<style>  .pagination a, .pagination span {    position: relative;    float: left;    padding: 6px 12px;    margin-left: -1px;    line-height: 1.42857143;    color: #337ab7;    text-decoration: none;    background-color: #fff;    border: 1px solid #ddd;}</style>";
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    echo '<ul class="pagination">' . paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    )) . '</ul>';
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
/* First, we'll create a new section for our logo upload. Note that the description will not be displayed when using the Theme Customizer; it is simply used for the section heading's title attribute. */
/* $wp_customize->add_section( 'themeslug_logo_section' , array(
  'title'       => __( 'Logo', 'themeslug' ),
  'priority'    => 30,
  'description' => 'Upload a logo to replace the default site name and description in the header',
  ) ); */
/* Next, we register our new setting. It doesn't get any easier than this: */
//$wp_customize->add_setting( 'themeslug_logo' );
/* Lastly, we tell the Theme Customizer to let us use an image uploader for setting our logo: */
/* $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
  'label'    => __( 'Logo', 'themeslug' ),
  'section'  => 'themeslug_logo_section',
  'settings' => 'themeslug_logo',
  ) ) ); */

//}
//CALLING THE FUNCTION
//add_action('customize_register', 'themeslug_theme_customizer');
/////////////////////////////////////////
// CATEGORY ID IN BODY AND POST CLASS
////////////////////////////////
function category_id_class($classes) {
    global $post;
    foreach ((get_the_category($post->ID)) as $category)
        $classes [] = 'cat-' . $category->cat_ID . '-id';
    return $classes;
}

add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

////////////////////////////
// ESCAPE HTML ENTITIES IN COMMENTS
///////////////////////////
function encode_code_in_comment($source) {
    $encoded = preg_replace_callback('/<code>(.*?)<\/code>/ims', create_function('$matches', '$matches[1] = preg_replace(array("/^[\r|\n]+/i", "/[\r|\n]+$/i"), "", $matches[1]); 
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


/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    } else {
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

/* * ***************
 * COMMON ARRAYS
 * * */
include_once('inc/common_arr.php');
global $social_arr;



/* * ***************
 * HOME PAGE
 * * */
//add_action('admin_head', 'remove_content_editor');

/**
 * Remove the content editor from pages as all content is handled through Panels
 */
function remove_content_editor() {
    if ((int) get_option('page_on_front') == get_the_ID()) {
        remove_post_type_support('page', 'editor');
    }
}
/*Remove editor support for page template*/
add_action( 'admin_init', 'hide_editor' );
 
function hide_editor() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
 
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
     
    if($template_file == 'templates/sections-1.php'){ // edit the template name
        remove_post_type_support('page', 'editor');
    }
}

//function hide_editor() {
//// Get the Post ID.
//    @$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
//    if (!isset($post_id))
//        return;
//
//// Hide the editor on the page titled 'Homepage'
//    $homepgname = get_the_title($post_id);
//
//
//// Hide the editor on a page with a specific page template
//// Get the name of the Page Template file.
//    $template_file = get_post_meta($post_id, '_wp_page_template', true);
//
//    if ($template_file == 'templates/faq.php' || $template_file == 'templates/sections-1.php') { // the filename of the page template
//        remove_post_type_support('page', 'editor');
//    }
//}



//RELATED POSTS
function related_posts($category) {
    global $post;
	$related_args = array(	'post_type' => 'post','category_name' => $category,'post__not_in' => array( get_the_ID() ),	'posts_per_page' => 3);
	$related = new WP_Query( $related_args );?>
<div class="row pb-5 related">
<?php while( $related->have_posts() ): $related->the_post();?>
<div class="col-md-4 p-3">
  <div class="article post-<?php echo get_the_ID(); ?>"> <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
    <?php if (has_post_thumbnail()) { ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
    <img src="<?php echo $image[0]; ?>" class="img-fluid ml-auto mr-auto" width=""/>
    <?php } ?>
    <p class="text-center"><?php echo get_the_title(); ?></p>
    </a> </div>
</div>
<?php endwhile;       
        wp_reset_postdata();?>
</div>
<?php
    
}//related posts

/****
 * 
 *  CUSTOM SERCH FORM
 ****/

function custom_serach_form() {?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Type Something...." value="<?php echo get_search_query() ?>" name="s">
    <div class="input-group-append">
      <button class="btn button" type="submit">Search</button>
    </div>
  </div>
</form>
<?php }
add_shortcode( 'wplite_search', 'custom_serach_form' );
?><?php
//CUSTOM 
/****
 * 
 *  CUSTOM WIDGET
 ****/


/****
 * 
 *  THEME SHORTCODEs
 ****/
function wp_lite_button_func( $atts ) {
    $title =  $atts['title'];
    $type =  $atts['type'];
    $link =  $atts['link'];
return "<a href='$link' class='btn $type-btn'>$title</a>";
}
add_shortcode( 'btn', 'wp_lite_button_func' );


function row_shortcode_func(){
    $output = '<div class="row">';
    return $output;
}add_shortcode( 'row', 'row_shortcode_func' );
function rowend_shortcode_func(){
    $output = '</div>';
    return $output;
}add_shortcode( 'row_end', 'rowend_shortcode_func' );


function col_shortcode_func(){
    $output = '<div class="col col-xs-12">';
    return $output;
}add_shortcode( 'col', 'col_shortcode_func' );

function colend_shortcode_func(){
    $output = '</div>';
    return $output;
}add_shortcode( 'col_end', 'colend_shortcode_func' );


//LOOP
function loop_posts($atts) {
    global $post;
	$post_type =  $atts['post_type'];
	$cate =  $atts['cate'];
	$col_width =  $atts['col_width'];
	$per_page =  $atts['per_page'];
	$excerpt =  $atts['excerpt'];
	$image =  $atts['image'];
        $content =  $atts['content'];
        $author =  $atts['author'];
	$readmore_title =  $atts['readmore_title'];
	$order =  $atts['order'];
	$date =  $atts['date'];
	$date_format =  $atts['date_format'];
        $custom_field_1_group  =  $atts['custom_field_1_group'];
        $custom_field_2_group  =  $atts['custom_field_2_group'];
        $custom_field_1  =  $atts['custom_field_1'];
        $custom_field_2  =  $atts['custom_field_2'];
	$n = 1;
	$related_args = array(	'post_type' => $post_type,'category_name' => $cate,'posts_per_page' => $per_page,    'orderby'        => 'ID',    'order' => $order);
	//if($cate == ""){$query = new WP_Query();}else{$query = new WP_Query( $related_args );}
	$query = new WP_Query( $related_args );
$output ='<div class="row pb-5 looped-pt pt-'.$post_type.'">';
  while( $query->have_posts() ): $query->the_post(); 
$output .='<div class="col-md-'.$col_width.' p-3" id="position_'.$n.'">';
$output .='<div class="post-'.get_the_ID().' '.$post_type.' '.$post_type.'-'.$n.'">'; 
 if ($image !="") { 
    if (has_post_thumbnail()) {   
 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
    $output .='<div class="loop-'.$post_type.'-img-container"><a href="'.get_the_permalink(get_the_ID()).'"><img src="'.$image[0].'" class="img-fluid ml-auto mr-auto"/></a></div>';
     }
}    
    $output .='<h4 class="loop-'.$post_type.'-title"><a href="'.get_the_permalink(get_the_ID()).'">'.get_the_title().'</a></h4>';
    	if($excerpt != "") {$output .='<p class="excerpt '.$post_type.'-excerpt">'.  get_the_excerpt() .'</p>';}
	if($content != "") {$output .='<p class="content '.$post_type.'-content">'.  get_the_content() .'</p>';}
	if($author != "") {$output .='<p class="author '.$post_type.'-author">'. get_the_author() .'</p>';}
	if($date != "") {$output .='<p class="date '.$post_type.'-date">'. get_the_date($date_format) .'</p>';}
        
	if($custom_field_1 != "" && $custom_field_1_group != "" ) {$output .='<p class=" '.$post_type.'-custom_field_1">'. get_field($custom_field_1, $custom_field_1_group) .'</p>';}
	if($custom_field_2 != "" && $custom_field_2_group != "" ) {$output .='<p class=" '.$post_type.'-custom_field_2">'. get_field($custom_field_2, $custom_field_2_group) .'</p>';}
        
        
	if($readmore_title !=""){ $output .='<a class="more-link" href="'.get_the_permalink(get_the_ID()).'">'.$readmore_title.'</a>'; }    

$output .='</div>';
$output .='</div>';

$n++; 
 endwhile;      
        wp_reset_postdata(); $output .='</div>';
		return $output;   
}//loop posts

add_shortcode( 'loop_pt', 'loop_posts' );
//EXAMPLE: [loop_pt post_type='posts' cate='popular' image='yes' order='ASC' col_width='4' per_page='8' excerpt='yes' readmore_title='readmore']

/* * * * 
 * TESTIMONIALS
 *  *  */
function cptui_register_my_cpts() {

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => __( "Testimonials", "custom-post-type-ui" ),
		"singular_name" => __( "Testimonial", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Testimonials", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "testimonials", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 9,
		"menu_icon" => "dashicons-testimonial",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
	];

	register_post_type( "testimonials", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
//LOOP TESTIMONIALS
function loop_testimonials($atts) {
    global $post;
	$pt =  "testimonials";
	$per_page =  $atts['per_page'];
	$show_person_position =  $atts['show_person_position'];
	$show_image =  $atts['show_image'];
	$order =  $atts['order'];
	$linked =  $atts['linked'];
	$show_date =  $atts['show_date'];
	$css_class =  $atts['css_class'];
	$n = 1;
	$related_args = array(	'post_type' => $pt,'category_name' => $cate,'posts_per_page' => $per_page,
            'orderby'=> 'ID','order'=> $order);
	
        $person_position = get_field('person_position', 'Testimonials');
        
	$query = new WP_Query( $related_args );
//$output ='<div class="row pb-5 looped-pt pt-'.$pt.'">';
  while( $query->have_posts() ){ $query->the_post();

$output .='<div class="post-'.get_the_ID().' '.$pt.' '.$pt.'-'.$n.' '. $css_class.' ">'; 
 if (has_post_thumbnail()) { 
 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
   if($show_image !="") {$output .='<div class="loop-'.$pt.'-img-container"><img src="'.$image[0].'" class="img-fluid ml-auto mr-auto"/></div>';}
     } 
    
    	$output .='<div class="the_testimonial '.$pt.'-content">'.  get_the_content() .'</div>';
        $output .='<div class="loop-'.$pt.'-title">';
        if($linked !=""){ $output .=    '<a href="'.get_the_permalink(get_the_ID()).'">';}
        $output .=get_the_title();
         if($linked !=""){ $output .=    '</a>';}
        $output .=        '</div> <!---loop title---->';// loop title
	$output .='<div class="'.$pt.'-person-position">'.$person_position.'</div><!---person position--->'; // person position
        if($show_date !=""){ $output .='<div class="'.$pt.'-date">'. get_the_date().'</div> <!---date---->'; }//date
        
$output .='</div>';



$n++; 
}// endwhile;      
        wp_reset_postdata(); 
		return $output;   
}//func testimonials

add_shortcode( 'testimonials', 'loop_testimonials' );
//EXAMPLE: [testimonials order='ASC' col_width='4' per_page='8' show_image='yes' show_person_position='yes' show_date='yes' linked='yes']
