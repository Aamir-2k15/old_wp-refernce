<?php
/* 
 * Template Name: New Temp T-V1
 */?><?php get_header(); ?><?php global $options;global $social_arr; ?><?php if (have_posts()):while (have_posts()):the_post(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

<div class="container">
  <div class="row">
    <div class="col-md-10 ml-auto mr-auto pb-3">
        <h2 class="pt-4 heading-md-b"><?=get_field('secondary_title');?></h2>
      <div class="pt-4">
          <?= the_content();?>
      </div>
    </div>
  </div>
  <div class="row pb-5 mb-5">
    <div class="col-md-10 ml-auto mr-auto">
      <div class="row about-row">
    <?php 
	ECHO 'TEST30092020';
	?>  

<?php if ($author_id = get_post_meta(get_the_ID(), 'wpc_post_editor', true)) { ?>
      Editor: <?php echo get_the_author_meta('display_name', $author_id); ?>
	  
<?php } ?>
<?php $something= new wpc_post_editor(); echo $something->meta_box_html();?>
	
        </div>
          
        <div class="col-md-6">
            <div class="d-block d-lg-none d-md-none"><div class="pt-3 pb-3"><hr/></div></div>

        </div>
      </div>
    </div>
  </div>
</div><?php endwhile; endif;?>

<?php get_footer(); ?>