<?php
/* 
 * Template Name: FAQs
 */?>
<?php get_header(); ?>
<?php global $options;global $social_arr; ?>
<!--FAQS-->
<div class="container-fluid" id="faq">
  <div class="row mr-0 pl-5  pr-5 pt-5 p-5">
      <h1 class="heading-md-b">
      <?php // the_title(); ?>Frequently Asked Questions
    </h1>
    <div class="col-md-12 content pt-5">
        <p><strong class="lead">Note:</strong> Click on a question to find out the answer.</p>
      <div id="accordion">
        <?php        $args2 = array(  
        'post_type' => 'faqs',
        'post_status' => 'publish',
        'orderby' => 'ID', 
        'order' => 'DESC', 
    );
    $loop2 = new WP_Query( $args2 ); 
     $n = 1;   
    while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
        <div class="card">
          <div class="card-header text-center pointer" id="heading<?=$n;?>" data-toggle="collapse" data-target="#collapse<?=$n;?>" aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <!--<button class="btn  collapsed">-->
              <h4 class="text-center accent-text"><?php echo the_title();?> <i class="fa fa-plus"></i></h4>
              <!--</button>-->
            </h5>
          </div>
          <div id="collapse<?=$n;?>" class="collapse" aria-labelledby="heading<?=$n;?>" data-parent="#accordion">
            <div class="card-body"> <?php echo the_content();?> </div>
          </div>
        </div>
        <?php $n++;
    endwhile; 
    wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>