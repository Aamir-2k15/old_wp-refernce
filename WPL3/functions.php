<?php
////////////////////////////
// THEME OPTIONS
///////////////////////////

include('theme-options/themeOptions.php');
/* get theme options */ $options = get_option('theme_settings');
global $options;

/* * *********
 * Adding Useful Function
 */

//require_once get_template_directory().'/admin/admin.php';

/* * *********
 * STYLESHEETS & SCRIPTS
 */
function add_theme_scripts() {
    global $options;
//  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');
//    wp_enqueue_style('bs', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');
//     wp_enqueue_style('fa', get_template_directory_uri() . '/css/fa.min.css', array(), '1.1', 'all');

    for ($c = 1; $c < 12; $c++) {

        $is_live = $options['css_' . $c . '_live'] == "" ? get_template_directory_uri() . '/css/' : '';
        @wp_enqueue_style($options['css_' . $c . '_id'], $is_live . $options['css_' . $c], array(), '1.1', 'all');
    }



    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/custom.css', array(), '1.1', 'all');

    wp_enqueue_script("jquery");


    for ($j = 1; $j < 12; $j++) {

        $is_live = $options['js_' . $j . '_live'] == "" ? get_template_directory_uri() . '/js/' : '';
        @wp_enqueue_script($options['js_' . $j . '_id'], $is_live . $options['js_' . $j], array('jquery'), '1.1', 'all');
    }
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), 1.1, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

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
 * * */
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
        'before_widget' => '',
        'after_widget' => '',
//            'before_title' => '',
//            'after_title' => ''
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>'
    ));
}

//create_widget( 'Default Header Right', 'default_header_right', 'On the right side of the header' );

create_widget('Page Sidebar', 'page', 'Appears on the side of pages with a sidebar');
create_widget('Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section');

$number_of_widgets_header = $options['header_widgets'] != "" ? $options['header_widgets'] + 1 : '';

for ($x = 1; $x < $number_of_widgets_header; $x++) {
    create_widget('Header ' . $x, 'header_' . $x, 'Displays on header.');
}

$number_of_widgets = $options['footer_widgets'] != "" ? $options['footer_widgets'] + 1 : '';
for ($y = 1; $y < $number_of_widgets; $y++) {
    create_widget('Footer ' . $y, 'footer_' . $y, 'Displays on footer.');
}


create_widget(' Footer Bottom 1', 'footer_bottom_1', 'Displays on the bottom section of footer.');
create_widget(' Footer Bottom 2', 'footer_bottom_2', 'Displays on the bottom section of footer.');

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
function new_excerpt_more($more) {
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

/* Remove editor support for page template */
add_action('admin_init', 'hide_editor');

function hide_editor() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
    if (!isset($post_id))
        return;

    $template_file = get_post_meta($post_id, '_wp_page_template', true);

    if ($template_file == 'templates/sections-1.php') { // edit the template name
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
    $related_args = array('post_type' => 'post', 'category_name' => $category, 'post__not_in' => array(get_the_ID()), 'posts_per_page' => 3);
    $related = new WP_Query($related_args);
    ?>
    <div class="row pb-5 related">
                    <?php while ($related->have_posts()): $related->the_post(); ?>
            <div class="col-md-4 p-3">
                <div class="article post-<?php echo get_the_ID(); ?>"> <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
                        <?php if (has_post_thumbnail()) { ?>
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
                            <img src="<?php echo $image[0]; ?>" class="img-fluid ml-auto mr-auto" width=""/>
            <?php } ?>
                        <p class="text-center"><?php echo get_the_title(); ?></p>
                    </a> </div>
            </div>
    <?php endwhile;
    wp_reset_postdata();
    ?>
    </div>
    <?php
}

//related posts
add_shortcode('related_posts', 'related_posts');
/* * **
 * 
 *  CUSTOM SERCH FORM
 * ** */

function custom_serach_form() {
    ?>
    <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Type Something...." value="<?php echo get_search_query() ?>" name="s">
            <div class="input-group-append">
                <button class="btn button" type="submit">Search</button>
            </div>
        </div>
    </form>
<?php
}

add_shortcode('wpl_search', 'custom_serach_form');
?><?php

//CUSTOM 
/* * **
 * 
 *  CUSTOM PT
 * ** */
/* * * * 
 * TESTIMONIALS
 *  *  */
function cptui_register_my_cpts() {

    /**
     * Post Type: Testimonials.
     */
    $labels = [
        "name" => __("Testimonials", "custom-post-type-ui"),
        "singular_name" => __("Testimonial", "custom-post-type-ui"),
    ];

    $args = [
        "label" => __("Testimonials", "custom-post-type-ui"),
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
        "rewrite" => ["slug" => "testimonials", "with_front" => true],
        "query_var" => true,
        "menu_position" => 9,
        "menu_icon" => "dashicons-testimonial",
        "supports" => ["title", "editor", "thumbnail", "excerpt", "custom-fields"],
    ];

    register_post_type("testimonials", $args);
}

add_action('init', 'cptui_register_my_cpts');

/* * **
 * 
 *  THEME SHORTCODEs
 * ** */

function wp_lite_button_func($atts) {
    $title = $atts['title'];
    $type = $atts['type'];
    $link = $atts['link'];
    return "<a href='$link' class='btn $type-btn'>$title</a>";
}

add_shortcode('btn', 'wp_lite_button_func');

//[btn title='' type='' link='']

function row_shortcode_func() {
    $output = '<div class="row">';
    return $output;
}

add_shortcode('row', 'row_shortcode_func');

function rowend_shortcode_func() {
    $output = '</div>';
    return $output;
}

add_shortcode('row_end', 'rowend_shortcode_func');

//[row][row_end]

function col_shortcode_func() {
    $output = '<div class="col col-xs-12">';
    return $output;
}

add_shortcode('col', 'col_shortcode_func');

function colend_shortcode_func() {
    $output = '</div>';
    return $output;
}

add_shortcode('col_end', 'colend_shortcode_func');

//[col][col_end]
/* * *
 * LOOP SHOTCODES
 * * */
/* * 
 * TESTIMONIALS
 * * */
//LOOP TESTIMONIALS
function loop_testimonials($atts) {
    global $post;
    $pt = "testimonials";
    $per_page = $atts['per_page'] != "" ? $atts['per_page'] : '3';
    $show_person_position = $atts['show_person_position'];
    $show_image = $atts['show_image'];
    $order = $atts['order'];
    $linked = $atts['linked'];
    $show_date = $atts['show_date'];
    $css_class = $atts['css_class'];
    $n = 1;
    $related_args = array('post_type' => $pt, 'category_name' => $cate, 'posts_per_page' => $per_page,
        'orderby' => 'ID', 'order' => $order);

    $person_position = get_field('person_position', 'Testimonials');

    $query = new WP_Query($related_args);
//$output ='<div class="row pb-5 looped-pt pt-'.$pt.'">';
    while ($query->have_posts()) {
        $query->the_post();

        $output .= '<div class="post-' . get_the_ID() . ' ' . $pt . ' ' . $pt . '-' . $n . ' ' . $css_class . ' ">';
        if (has_post_thumbnail()) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
            if ($show_image != "") {
                $output .= '<div class="loop-' . $pt . '-img-container"><img src="' . $image[0] . '" class="img-fluid ml-auto mr-auto"/></div>';
            }
        }

        $output .= '<div class="the_testimonial ' . $pt . '-content">' . get_the_content() . '</div>';
        $output .= '<div class="loop-' . $pt . '-title">';
        if ($linked != "") {
            $output .= '<a href="' . get_the_permalink(get_the_ID()) . '">';
        }
        $output .= get_the_title();
        if ($linked != "") {
            $output .= '</a>';
        }
        $output .= '</div> <!---loop title---->'; // loop title
        $output .= '<div class="' . $pt . '-person-position">' . $person_position . '</div><!---person position--->'; // person position
        if ($show_date != "") {
            $output .= '<div class="' . $pt . '-date">' . get_the_date() . '</div> <!---date---->';
        }//date

        $output .= '</div>';
        $n++;
    }// endwhile;      
    wp_reset_postdata();
    return $output;
}

//func testimonials

add_shortcode('testimonials', 'loop_testimonials');

//EXAMPLE: [testimonials order='ASC' col_width='4' per_page='8' show_image='yes' show_person_position='yes' show_date='yes' linked='yes']
/* * 
 * ALL POST TYPES
 * * */
function loop_posts($atts) {
    global $post;
    $post_type = $atts['pt'];
    $cate = $atts['cate'];
    $col_width = $atts['col_width'];
    $per_page = $atts['per_page'];
    $excerpt = $atts['excerpt'];
    $content = $atts['content'];
    $feat_img = $atts['feat_img'];
    $author = $atts['author'];
    $readmore_title = $atts['readmore_title'];
    $order = $atts['order'];
    $date = $atts['date'];
    $date_format = $atts['date_format'];
    $custom_field_1_group = $atts['custom_field_1_group'];
    $custom_field_2_group = $atts['custom_field_2_group'];
    $custom_field_1 = $atts['custom_field_1'];
    $custom_field_2 = $atts['custom_field_2'];



    $n = 1;
    $the_args = array('post_type' => $post_type, 'category_name' => $cate, 'posts_per_page' => $per_page, 'orderby' => 'ID', 'order' => $order, 'post__not_in' => array(get_the_ID()));

    $query = new WP_Query($the_args);
    $output = '<div class="row pb-5 looped-pt pt-' . $post_type . '">';
    while ($query->have_posts()): $query->the_post();
        $output .= '<div class="col-md-' . $col_width . ' p-3" id="position_' . $n . '">';
        $output .= '<div class="post-' . get_the_ID() . ' ' . $post_type . ' ' . $post_type . '-' . $n . '">';
        if ($feat_img != "") {
            if (has_post_thumbnail()) {
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                $output .= '<div class="loop-' . $post_type . '-img-container"><a href="' . get_the_permalink(get_the_ID()) . '"><img src="' . $image[0] . '" class="img-fluid ml-auto mr-auto"/></a></div>';
            }
        }
        $output .= '<h4 class="loop-' . $post_type . '-title"><a href="' . get_the_permalink(get_the_ID()) . '">' . get_the_title() . '</a></h4>';
        if ($excerpt != "") {
            $output .= '<p class="excerpt ' . $post_type . '-excerpt">' . get_the_excerpt() . '</p>';
        }
        if ($content != "") {
            $output .= '<p class="content ' . $post_type . '-content">' . get_the_content() . '</p>';
        }
        if ($author != "") {
            $output .= '<p class="author ' . $post_type . '-author">' . get_the_author() . '</p>';
        }
        if ($date != "") {
            $output .= '<p class="date ' . $post_type . '-date">' . get_the_date($date_format) . '</p>';
        }

        if ($custom_field_1 != "" && $custom_field_1_group != "") {
            $output .= '<p class=" ' . $post_type . '-custom_field_1">' . get_field($custom_field_1, $custom_field_1_group) . '</p>';
        }
        if ($custom_field_2 != "" && $custom_field_2_group != "") {
            $output .= '<p class=" ' . $post_type . '-custom_field_2">' . get_field($custom_field_2, $custom_field_2_group) . '</p>';
        }


        if ($readmore_title != "") {
            $output .= '<a class="more-link" href="' . get_the_permalink(get_the_ID()) . '">' . $readmore_title . '</a>';
        }

        $output .= '</div>';
        $output .= '</div>';

        $n++;
    endwhile;
    wp_reset_postdata();
    $output .= '</div>';
    return $output;
}

//loop posts

add_shortcode('loop_pt', 'loop_posts');

//EXAMPLE: [loop_pt pt='posts' feat_img='' cate='popular' order='ASC' col_width='4' per_page='8' excerpt='yes' readmore_title='readmore' date='yes']


/* * *
 *  * COMMON SECTIONS
 *  * * */
function cs_1() {
    ob_start();
    include_once('templates/common_section_1.php');
    $sidebar = ob_get_contents();
    ob_end_clean();

    return $sidebar;
}

add_shortcode('common_section', 'cs_1');

function cs_2() {
    ob_start();
    include_once('templates/common_section_2.php');
    $sidebar = ob_get_contents();
    ob_end_clean();

    return $sidebar;
}

add_shortcode('common_section_2', 'cs_2');

function cs_3() {
    ob_start();
    include_once('templates/common_section_3.php');
    $sidebar = ob_get_contents();
    ob_end_clean();

    return $sidebar;
}

add_shortcode('common_section_3', 'cs_3');

//
function show_phone() {
    global $options;
    return $options['phone'] . '!';
}

add_shortcode('phone', 'show_phone');

function show_email() {
    global $options;
    return $options['email'];
}

add_shortcode('site_email', 'show_email');

function show_addr() {
    global $options;
    return $options['address'];
}

add_shortcode('addr', 'show_addr');

function show_map() {
    global $options;
    return $options['map'];
}

add_shortcode('map', 'show_map');

/**
 * SOCIAL MEDIA LINKS SHORTCODES 
 * * */
function fb() {
    global $options;
    return $options['facebook'];
}

add_shortcode('facebook', 'fb');

function tw() {
    global $options;
    return $options['twitter'];
}

add_shortcode('twitter', 'tw');

function instagram() {
    global $options;
    return $options['instagram'];
}

add_shortcode('instagram', 'instagram');

function pinterest() {
    global $options;
    return $options['pinterest'];
}

add_shortcode('pinterest', 'pinterest');

function youtube() {
    global $options;
    return $options['youtube'];
}

add_shortcode('youtube', 'youtube');

function gp() {
    global $options;
    return $options['google-plus'];
}

add_shortcode('google-plus', 'gp');

/*
 * METABOXES
 *  */
/*function add_new_metabox($metabox_name){

function addnewmetabox_get_meta($value) {
    global $post;

    $field = get_post_meta($post->ID, $value, true);
    if (!empty($field)) {
        return is_array($field) ? stripslashes_deep($field) : stripslashes(wp_kses_decode_entities($field));
    } else {
        return false;
    }
}
add_action('add_meta_boxes', 'section_one_add_meta_box');


}//ends





function section_one_html($post){
    wp_nonce_field('_section_one_nonce', 'section_one_nonce');
     
    ?>  
    <div id="s1" class="disabled">
        <p>
            <label for="section_one_heading"><?php _e('heading', 'section_one'); ?></label><br>
            <input type="text" name="section_one_heading" id="section_one_heading" value="<?php echo section_one_get_meta('section_one_heading'); ?>">
        </p>	
        <p>
            <label for="section_one_text"><?php _e('text', 'section_one'); ?></label><br>
            <textarea name="section_one_text" id="section_one_text" ><?php echo section_one_get_meta('section_one_text'); ?></textarea>

        </p>
    </div>     
    <?php
}

function section_one_save($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
    if (!isset($_POST['section_one_nonce']) || !wp_verify_nonce($_POST['section_one_nonce'], '_section_one_nonce'))
        return;
    if (!current_user_can('edit_post', $post_id))
        return;
    
    if (isset($_POST['section_one_heading']))
        update_post_meta($post_id, 'section_one_heading', esc_attr($_POST['section_one_heading']));
    if (isset($_POST['section_one_text']))
        update_post_meta($post_id, 'section_one_text', esc_attr($_POST['section_one_text']));
}

add_action('save_post', 'section_one_save');
*/
/* * 
 * DISABLE GUTENBERG
 * * */
// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

/* * 
 * METABOX
 * * */

/**
        * additional info
        * made with the meta box generator from market port GmbH
        */
        class customMetaBoxes{
        
        
        private $postTypes = array(
        'post',
                'page',
                
        );
       
        
           
        public function __construct() {
            add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
            add_action( 'admin_footer', array( $this, 'admin_footer' ) );
            add_action( 'save_post', array( $this, 'save_fields' ) );
            
        }
        public function add_meta_boxes() {
        
            foreach ( $this->postTypes as $postType ) {
                
                
       
             add_meta_box(
                's1c1_metabox',
                __( 'Section 1, Column 1', '' ),
                array( $this, 's1c1_callback' ),
                $postType,
                'advanced',
                'default'
            );
            
             add_meta_box(
                'another_one',
                __( 'another one', '' ),
                array( $this, 'another_one_callback' ),
                $postType,
                'advanced',
                'default'
            );
            
             add_meta_box(
                'thetime',
                __( 'the time', '' ),
                array( $this, 'thetime_callback' ),
                $postType,
                'advanced',
                'default'
            );
            
             add_meta_box(
                'newinfo',
                __( 'newinfo', '' ),
                array( $this, 'newinfo_callback' ),
                $postType,
                'advanced',
                'default'
            );
            
             add_meta_box(
                'we',
                __( 'whatelse', '' ),
                array( $this, 'we_callback' ),
                $postType,
                'advanced',
                'default'
            );
            

            }
        }
        
        
            public function s1c1_callback($post){
                
                wp_nonce_field( 'customMetaBoxes_data', 'customMetaBoxes_nonce' );
                ?>
                
                            <textarea id="content_additional" name="content_additional" class="box-input"><?php echo get_post_meta( $post->ID, 'content_additional', true ); ?></textarea>
                            
                            <input id="cheading" name="cheading" type="text" class="box-input" value="<?php echo get_post_meta( $post->ID, 'cheading', true ); ?>" placeholder="<?php _e('content heading', ''); ?>"  />
                            
                <?php
            }
            
            public function another_one_callback($post){
                
                wp_nonce_field( 'customMetaBoxes_data', 'customMetaBoxes_nonce' );
                ?>
                
                            <input id="field_8655" name="field_8655" type="text" class="box-input" value="<?php echo get_post_meta( $post->ID, 'field_8655', true ); ?>" placeholder="<?php _e('heading', ''); ?>"  />
                            
                            <textarea id="field_1968" name="field_1968" class="box-input"><?php echo get_post_meta( $post->ID, 'field_1968', true ); ?></textarea>
                            
                <?php
            }
            
            public function thetime_callback($post){
                
                wp_nonce_field( 'customMetaBoxes_data', 'customMetaBoxes_nonce' );
                ?>
                
                        
                        <?php   wp_editor(get_post_meta( $post->ID, 'theeditor', true ), 'theeditor' ); ?>
                            <input id="timeofthe" name="timeofthe" type="text" class="datepicker" value="<?php echo date( 'd.m.Y', get_post_meta( $post->ID, 'timeofthe', true ) ); ?>" placeholder="<?php _e('the time', ''); ?>" autocomplete="off" />
                            
                <?php
            }
            
            public function newinfo_callback($post){
                
                wp_nonce_field( 'customMetaBoxes_data', 'customMetaBoxes_nonce' );
                ?>
                
                            <input id="thedatef" name="thedatef" type="text" class="datepicker" value="<?php echo get_post_meta( $post->ID, 'thedatef', true ); ?>" placeholder="<?php _e('the date', ''); ?>" autocomplete="off" />
                            
                            <input id="thetime" name="thetime" type="time" class="box-input" value="<?php echo get_post_meta( $post->ID, 'thetime', true ); ?>" placeholder="<?php _e('the time', ''); ?>"  />
                            
                            <input id="theurl" name="theurl" type="url" class="box-input" value="<?php echo get_post_meta( $post->ID, 'theurl', true ); ?>" placeholder="<?php _e('the url', ''); ?>"  />
                            
                <?php
            }
            
            public function we_callback($post){
                
                wp_nonce_field( 'customMetaBoxes_data', 'customMetaBoxes_nonce' );
                ?>
                
                            <?php
                            $meta_value = get_post_meta( $post->ID, 'mu', true );
                            $view = '';
                    
                            if ( wp_attachment_is_image( $meta_value ) ){
                                $view = wp_get_attachment_image( $meta_value, 'thumbnail' ).'<span class="delete-item button-link">'.__( 'Remove attachment', '' ).'</span>';
                            } elseif( !empty( $meta_value ) ) {
                                $view =  basename ( get_attached_file( $meta_value ) ).'<span class="delete-item button-link">'.__( 'Remove attachment', '' ).'</span>';
                            }
                            ?>
                    
                            <div id="mu_view" class="view-item">
                                <?php echo $view; ?>
                            </div>
                            <input id="mu" name="mu" type="hidden" value="<?php echo get_post_meta( $post->ID, 'mu', true ); ?>" /> <input style="width: 19%" class="button title-media" id="mu_button" name="mu_button" type="button" value="<?php _e('Upload', ''); ?>" />
                            
                <?php
            }
            
                    
            public function save_fields( $post_id ) {
                if ( ! isset( $_POST['customMetaBoxes_nonce'] ) )
                    return $post_id;
               
                $nonce = $_POST['customMetaBoxes_nonce'];
                if ( !wp_verify_nonce( $nonce, 'customMetaBoxes_data' ) )
                    return $post_id;
                    
                if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
                    return $post_id;
                
                // Update metafields
                    	
                        if ( isset( $_POST['content_additional'] ) )
                            update_post_meta( $post_id, 'content_additional', esc_attr( $_POST['content_additional'] ) );	
                        if ( isset( $_POST['cheading'] ) )
                            update_post_meta( $post_id, 'cheading', esc_attr( $_POST['cheading'] ) );	
                        if ( isset( $_POST['field_8655'] ) )
                            update_post_meta( $post_id, 'field_8655', esc_attr( $_POST['field_8655'] ) );	
                        if ( isset( $_POST['field_1968'] ) )
                            update_post_meta( $post_id, 'field_1968', esc_attr( $_POST['field_1968'] ) );	
                        if ( isset( $_POST['theeditor'] ) )
                            update_post_meta( $post_id, 'theeditor',  $_POST['theeditor']  );	
                        if ( isset( $_POST['timeofthe'] ) )
                            update_post_meta( $post_id, 'timeofthe', strtotime( $_POST['timeofthe'].'00:00') );	
                        if ( isset( $_POST['thedatef'] ) )
                            update_post_meta( $post_id, 'thedatef', esc_attr( $_POST['thedatef'] ) );	
                        if ( isset( $_POST['thetime'] ) )
                            update_post_meta( $post_id, 'thetime', esc_attr( $_POST['thetime'] ) );	
                        if ( isset( $_POST['theurl'] ) )
                            update_post_meta( $post_id, 'theurl', esc_url_raw( $_POST['theurl'] ) );	
                        if ( isset( $_POST['mu'] ) )
                            update_post_meta( $post_id, 'mu', esc_attr( $_POST['mu'] ) );

            }
            
            
        public function admin_footer() {
        ?>
            <style>
            .box-input { width: 100%; padding: 10px; margin-bottom: 15px;} 
            .input-label { margin-bottom: 5px; display: block } 
            .editor-input { margin-bottom: 25px; }
            .delete-item { display: block; margin-bottom: 5px !important; }
            ::-webkit-input-placeholder { font-style: italic; }
            ::-moz-placeholder { font-style: italic; }
            :-ms-input-placeholder { font-style: italic; }
            :-moz-placeholder { font-style: italic; }
            .ui-datepicker{padding:5px;background:rgba(225,225,225,0.5);border:1px solid #EEE;}
            </style>
            
            
            <script>
                jQuery(document).ready(function($){
                    if ( typeof wp.media !== 'undefined' ) {
                        var _custom_media = true,
                            _orig_send_attachment = wp.media.editor.send.attachment;
                        $('.title-media').click(function(e) {
                            var send_attachment_bkp = wp.media.editor.send.attachment;
                            var button = $(this);
                            var id = button.attr('id').replace('_button', '');
                            var view = jQuery('#'+id+'_view');

                            _custom_media = true;
                            wp.media.editor.send.attachment = function(props, attachment){
                                if ( _custom_media ) {
                                    
                                    $('input#'+id).val(attachment.id);
                                    if( attachment.type === 'image' ){
                                        if( view.find('img').length > 0 ){ 
                                            view.find('img').attr('src', attachment.sizes.thumbnail.url);
                                        } else {
                                            view.html('<img src="'+attachment.sizes.thumbnail.url+'" /><span class="delete-item button-link"><?php _e('Remove attachment', ''); ?></span>');
                                        }
                                    } else {
                                        view.html(attachment.filename+'<span class="delete-item button-link"><?php _e('Remove attachment', ''); ?></span>');
                                        console.log(attachment.filename);
                                    }

                                } else {
                                    return _orig_send_attachment.apply( this, [props, attachment] );
                                };
                            }
                            wp.media.editor.open(button);
                            return false;
                        });
                        $('.add_media').on('click', function(){
                            _custom_media = false;
                        });
                    }
                    
                    
                     jQuery('.view-item').on('click', '.delete-item', function (e) {
                        e.preventDefault();
                        var to_delete = jQuery(this).parent().attr('id');
                        var to_delete_id = to_delete.replace('_view',"");
                        var view = jQuery('#'+to_delete_id+'_view');
        
                        jQuery('input#'+to_delete_id).val('');
                        view.html('');
                        console.log(to_delete);
                    });
                });
            </script>
            
              <script>
              jQuery(document).ready(function(){
                // If English, delete all german options.
                jQuery( ".datepicker" ).datepicker({
                    prevText: '&#x3c;zurück', prevStatus: '',
                    prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
                    nextText: 'Vor&#x3e;', nextStatus: '',
                    nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: '',
                    currentText: 'Today', currentStatus: '',
                    todayText: 'Today', todayStatus: '',
                    clearText: '-', clearStatus: '',
                    closeText: 'schließen', closeStatus: '',
                    monthNames: ['January','February','Märch','April','May','June',
                        'July','August','September','October','November','December'],
                    monthNamesShort: ['Jan','Feb','Mär','Apr','May','Jun',
                        'Jul','Aug','Sep','Oct','Nov','Dec'],
                    dayNames: ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'],
                    dayNamesShort: ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'],
                    dayNamesMin: ['S','M','T','W','Th','Fr','Sa'],
                    firstDay: 1 ,// Start with Monday
                    showMonthAfterYear: false,
                    dateFormat:'dd.mm.yy'
                } );
            } );
             </script>
            
           <?php
        
        }
        
        
                public function admin_scripts( ){
                    if (!wp_script_is( 'jquery', 'enqueued' )) {
                        wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, false, true );
                    }           
                    if (!wp_script_is( 'jqueryui', 'enqueued' )) {
                        wp_enqueue_script( 'jqueryui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery'), '1', true );
                    }
                    if (!wp_style_is( 'jqueryui', 'enqueued' )) {
                        wp_enqueue_style( 'jqueryui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css');
                    }
            
                $enqueue_media = ( did_action( 'wp_enqueue_media' ) < 1 )? true : false;
                if($enqueue_media){ 
                  wp_enqueue_media();
                }
            
            
                }
    
            
        
        }  
        new customMetaBoxes;
//Source: http://tools.marketport.site/generators/metabox-generator
//
        ?>
        
