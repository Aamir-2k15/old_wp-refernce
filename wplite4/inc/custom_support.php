<?php
/* * * *
 * IN THIS SECTION:
 * 1. Disable gutenburg 
 * 2. Post Views
 * 3. Escape HTML entities in comments
 * 4. Pagination
 * * * * */
/***
 * Disable gutenburg
 * ****/ 
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

//img alt tag from img name
function get_img_alt($img_url) {
    $URL = $img_url;
    $image_name = (stristr($URL, '?', true)) ? stristr($URL, '?', true) : $URL;
    $pos = strrpos($image_name, '/');
    $image_name = substr($image_name, $pos + 1);

    $without_extension = pathinfo($image_name, PATHINFO_FILENAME);
    echo ucfirst(str_replace('-', ' ', $without_extension));
}

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


/* * 
 *  PAGINATION
 * * */
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