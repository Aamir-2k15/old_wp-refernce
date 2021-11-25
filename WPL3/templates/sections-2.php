<?php
/* 
 * Template Name:Sections V-2
 */

//error_reporting(0);?>
<?php get_header(); ?><hr><hr>
<?php if (have_posts()):while (have_posts()):the_post(); ?>

<?php 
$section_1 = get_field('section_1');
$col_1 = $section_1['col_1'];
//print_r($col_1);

?>


<section id="section_1">
    <div class="container">
        <div class="row">

            <div class="col col_1">
                <?=$col_1['heading'] ?><hr>
                <?=$col_1['content'] ?><hr>
                <?=$col_1['bg'] ?><hr>
                <?=$col_1['link']['title'] ?><hr>
                <?=$col_1['link']['url'] ?><hr>
            </div>

            <div class="col col_2">
                <?=$col_2['heading'] ?><hr>
                <?=$col_1['content'] ?><hr>
                <?=$col_1['bg'] ?><hr>
                <?=$col_1['link']['title'] ?><hr>
                <?=$col_1['link']['url'] ?><hr>
            </div>
 
        </div>
    </div><hr>
</section>



<?php endwhile; endif;?>
<hr><hr><?php get_footer(); ?>