<?php get_header(); ?>
<?php global $options; global $social_arr;?>
<style>#primary-post img{width:100%;height: auto;}.feat-img-cont{max-width: 100%;max-height: 300px;overflow: hidden;min-height: 300px;border: 1px dotted #FEFEFE;text-align: center;}.feat-img-cont img{width:100%;height: auto;}</style>
<div class="container-fluid" id="blog" style="background:#EEEDE8;">
  <div class="row mr-0 pl-5  pr-5 pt-5 p-5">
      <div class="container" id="primary-post">
      <?php        $args = array(  
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 1, 
         'category_name'     => 'primary', 
        'orderby' => 'ID', 
        'order' => 'DESC', 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="row">
        <div class="col-md-5">
          <?php if (has_post_thumbnail()) { ?>
            <?= the_post_thumbnail(); ?>
          <?php } ?>
        </div>
        <div class="col-md-7">
          <div class="pt-5">
              <h1 class="heading-lg-b">
                <a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a>
            </h1>
            <h4 class="pt-3 heading-sm-b">Written by <?php the_author_posts_link(); ?></h4>
            <div class="pt-3 lead">
              <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="pt-3 lead">Read More</a> </div>
        </div>
      </div>
      <?php 
    endwhile;
    wp_reset_postdata(); ?>
    </div>
  </div>
</div>
<div class="container-fluid" id="blog-posts" style="">
  <div class="row mr-0 pl-5  pr-5 pt-5 p-5">
    <div class="container">
      <div class="row pb-2">
        <?php if (have_posts()):while (have_posts()):the_post(); ?>
        <div class="col-md-4 mt-2 mb-2">
          <div class="p-4 pointer article">
            <?php if (has_post_thumbnail()) { ?>
              <div class="feat-img-cont"><a href="<?php the_permalink(); ?>" class=""><?= the_post_thumbnail(); ?></a></div>
            <?php } ?>
            <div class="lead text-center pt-3"><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a></div>
          </div>
        </div>
        <?php
    endwhile; wp_reset_postdata();
endif;
?>
      </div>
        <div class="row">
    <div class="col-full">
      <nav class="pgn">
        <ul>
          <?php wpStarter_pagination();?>
        </ul>
      </nav>
    </div>
  </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
