<?php get_header(); ?> <?php global $options; global $social_arr;?>
<?php if (have_posts()):while (have_posts()):the_post(); ?>
<div class="container-fluid" id="single">
  <div class="row mr-0 pl-5  pr-5 pt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col-md-10 ml-auto mr-auto"> 
            <?php if (has_post_thumbnail()) { ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
            <img src="<?php echo $image[0]; ?>" class="img-fluid" width="100%"/>
            <?php }?>
          <div class="pt-5">
            <h1 class="heading-lg-b"><?php the_title(); ?></h1>
            <h4 class="pt-4 meta"><div class="float-left">By <?php the_author_posts_link(); ?><?php //the_author();?> on <?php echo the_date();?> in &nbsp;</div><div class="float-left"><?php echo the_category();?></div></h4>
            <div class="pt-5">
              <?php the_content(); ?>
            </div>
             <?php edit_post_link('edit', '<p>', '</p><br/>'); ?>
            <?php //the_author_meta( 'description' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <?php     endwhile; endif; ?>
<?php get_footer(); ?>