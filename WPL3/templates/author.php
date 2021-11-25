<?php
/* 
 * Template Name: Author
 */?><?php get_header(); ?><?php global $options;global $social_arr; ?>
<?php if (have_posts()):while (have_posts()):the_post(); ?>
<div class="container" id="author">
  <div class="row pt-5 pb-5">
    <div class="col-md-4">
      <div class="pt-1 max-width">
          <h3 class="heading-md-b text-center"><?php the_author();?></h3>
        <?php if (has_post_thumbnail()) { ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
            <img src="<?php echo $image[0]; ?>" class="img-fluid" width=""/><?php } ?></div>
    </div>
    <div class="col-md-8">
      <div class=" pt-5">
          <?php the_content();?>
      </div>
    </div>
  </div>
    <?php related_posts('author_related');?>
</div>

  <?php endwhile; endif;?>
<?php get_footer(); ?>