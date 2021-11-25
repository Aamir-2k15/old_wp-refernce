<?php get_header(); ?>
<?php if (have_posts()):while (have_posts()):the_post(); ?>
<div class="breadcrumb-area ptb-50">
<div class="container">
   <?php //the_breadcrumb();?>
</div>
<!-- Container End -->
</div>
<div class="container"> 
<?php the_content(); ?>
<?php edit_post_link('edit', '<p>', '</p><br/>'); ?>
</div>   
<?php endwhile; endif;?>
<?php get_footer(); ?>