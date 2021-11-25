<?php get_header(); ?>
<?php global $options; global $social_arr;?>
<?php if (have_posts()):while (have_posts()):the_post(); ?>
<!--<style>.cate * {    color: #E0519D;    list-style: none;    font-size: 18px;}.author {    text-transform: capitalize;}</style>-->
<div class="container-fluid" id="single">
  <div class="row mr-0 pl-5  pr-5 pt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col-md-10 ml-auto mr-auto">
          <div class="text-center list-unstyled cate"><?php echo the_category();?></div>
          <h1 class="text-center pb-0 mb-4">
            <?php the_title(); ?>
          </h1>
          <div class="pt-0">
            <h4 class="pt-0 meta text-center author">
              <?php the_author_posts_link(); ?>
            </h4>
            <p class="pt-0 meta text-center"><?php echo the_date();?> </p>
            <?php if (has_post_thumbnail()) { ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
            <img src="<?php echo $image[0]; ?>" class="img-fluid" width="100%"/>
            <?php }?>
            <div class="pt-5 pl-5 pr-5 ml-5 mr-5">
              <?php the_content(); ?>
            </div>
            <?php edit_post_link('edit', '<p>', '</p><br/>'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php     endwhile; endif; ?>
<?php get_footer(); ?>
