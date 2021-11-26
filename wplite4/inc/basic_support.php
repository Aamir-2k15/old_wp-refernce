<?php

/* * **
 * IN THIS SECTION:
 * 1. Post slug to body class, Category in post body class
 * 2. Nav Menu Walker class and for mobile walker class
 * 3. Nav Menu Support for the theme:(1)Primary(2)Secondary
 * 4. Removal of unwanted wp scripts or style tags in the header
 * 5. Widegets support: (1).Blog(2).Footers
 * 6. Featured Image support
 * 7. Colorpicker scripts
 * 8. Removal of p tag & [] from excerpt 
 * * */

function add_theme_scripts() {
    global $options;
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), 1.1, true);
}

//add_action('wp_enqueue_scripts', 'add_theme_scripts');
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
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

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
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

//create_widget('Page Sidebar', 'page', 'Appears on the side of pages with a sidebar');
create_widget('Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section');

create_widget('Footer 1', 'footer_1', 'Displays as footer 1.');
create_widget('Footer 2', 'footer_2', 'Displays as footer 2.');
create_widget('Footer 3', 'footer_3', 'Displays as footer 3.');

/* Disable WordPress Admin Bar for all users but admins. */
//add_filter( 'show_admin_bar', '__return_false' );

/**
 * ADDING FEATURED IMAGE SUPPORT
 */
add_theme_support('post-thumbnails');

/**
 * ADDING WP COLORPICKER SUPPORT
 */
add_action('admin_enqueue_scripts', 'wplite_add_color_picker');

function wplite_add_color_picker($hook) {

    if (is_admin()) {

        // Add the color picker css file       
        wp_enqueue_style('wp-color-picker');

        // Include our custom jQuery file with WordPress Color Picker dependency
        wp_enqueue_script('custom-script-handle', get_template_directory_uri() . '/theme-options/inc/custom-script.js', array('wp-color-picker'), false, true);
    }
}

add_action('admin_footer', 'colorPicker_scripts');

function colorPicker_scripts() {
    ?>
    <script>(function ($) {

            // Add Color Picker to all inputs that have 'color-field' class
            $(function () {
                $('.color-field').wpColorPicker();
            });

        })(jQuery);</script>
    <?php

}

////////////////////////////////////////////////////
/* * *
 * Removing p Tags
 * * */
//remove_filter ('the_content',  'wpautop');
remove_filter('the_excerpt', 'wpautop');

//remove_filter ('acf_the_field', 'wpautop');

/* * **
  REMOVE [] FROM EXCERPT:
 * * */

function new_excerpt_more($more) {
    return '';
}

/* CUSTOM EXCERPT LENGTH */

function custom_excerpt_length($length) {
    return 30;
}

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

/* * ***
 * * CHILD THEME SUPPORT
 * * */

//function childtheme_menu_args($args) {
//    $args = array(
//        'show_home' => 'Home',
//        'sort_column' => 'menu_order',
//        'menu_class' => 'menu',
//        'echo' => true
//    );
//    return $args;
//}
//
//add_filter('wp_page_menu_args', 'childtheme_menu_args');

