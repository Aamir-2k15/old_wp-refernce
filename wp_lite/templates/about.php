<?php
/* 
 * Template Name: About
 */?><?php get_header(); ?><?php global $options;global $social_arr; ?><?php if (have_posts()):while (have_posts()):the_post(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
<div class="container-fluid" id="about" style="background:url('<?php echo $image[0]; ?>') center center / cover no-repeat;">
  <div class="row mr-0 pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ml-auto mr-auto pb-5">
          <div class="text-white pt-5 mt-5 pb-5 mb-5 pl-5 ml-0">
              <h1 class="pt-4 heading-lg-b"><?= the_title()?></h1>
            <h3 class="pt-4 text-b-lg"><?=get_field('banner_text');?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
        <div class="col-md-6"><img src="<?=get_field('toby_img');?>" class="img-fluid">
            <h5 class="heading-sm-b pt-2">Rosie</h5>
        </div>
          
        <div class="col-md-6">
            <div class="d-block d-lg-none d-md-none"><div class="pt-3 pb-3"><hr/></div></div>
            <img src="<?=get_field('rosie_img');?>" class="img-fluid">
            <h5 class="heading-sm-b pt-2">Toby</h5>
        </div>
      </div>
    </div>
  </div>
</div><?php endwhile; endif;?>

<?php get_footer(); ?>