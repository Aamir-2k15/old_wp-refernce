<?php
/* * **
 * IN THIS SECTION SHORTCODES FOR:
 * 1. Button with css class [btn]
 * 2. Bootstrap Row & Columns [row][row_end][col][col_end]
 * 3. Loop Posts [loop_pt pt='posts' feat_img='' cate='popular' order='ASC' col_width='4' per_page='8' excerpt='yes' readmore_title='readmore' date='yes']
 * 4. Social Media [phone][email][address][map][facebook][youtube][google-plus][linkedin][instagram][pinterest]
 * 5. Related Post [related_posts]
 * 6. Search Form [wpl_search]
 * 7. Later Versions: (1)Login(2)Register(3)Forgot Passoword
 * * */
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


//social
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



/* * **
 * //RELATED POSTS
 * ** */
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
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
    <?php
}

//related posts
add_shortcode('related_posts', 'related_posts');


/* * **
 * CUSTOM SERCH FORM
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