<?php get_header(); ?>
<?php global $options;global $social_arr; ?>
<!--SLIDER-->

<div id="slider" class="carousel slide" data-ride="carousel"> 
  <!--  <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>-->
  <div class="carousel-inner">
    <?php        $args = array(  
        'post_type' => 'sliders',
        'post_status' => 'publish',
        'posts_per_page' => 1, 
        'orderby' => 'ID', 
        'order' => 'ASC', 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
           $link = get_field('button');    $link_url = $link['url']; $link_title = $link['title'];//$slide = get_field('image');?>
    <div class="carousel-item active"> <img src="<?=get_field('image')?>" alt="Slide One" width="100%" height="auto"/>
      <div class="carousel-caption">
        <h2 class="heading-lg-b"><?=get_field( "heading",false,false );?></h2>
        <p class="lead b "><?=get_field( "subheading",false,false );?></p>
        <a class="btn btn-lg button" href="<?=$link_url?>">
        <?=$link_title?>
        </a> </div>
    </div>
  </div>
  <?php 
    endwhile;
    wp_reset_postdata(); ?>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a> 
</div>

<!-- Page Content --> 
<!--SLIDER-->
<div class="border-bottom">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="pt-3">
          <?= get_field('post_slider_stripe');?>
        </div>
      </div>
    </div>
  </div>
</div>
<!--2ND FULL WIDTH-->
<?php
$ss = get_field('secondary_section');
if( $ss ): ?>
<div class="bor-dark container-fluid bg pt-5 pb-5" id="get-start">
  <div class="row mr-0">
    <div class="col-lg-5 col-md-5 col-sm-5"> <img src="<?php echo esc_url( $ss['image'] ); ?>" class="img-fluid"/> </div>
    <div class="col">
      <div class="pt-5 pl-4">
        <h2 class="accent-text heading-md-b"><?php echo $ss['heading']; ?></h2>
        <p class="pt-3 mb-5 lead accent-text"><?php echo $ss['text']; ?></p>
        <a class="btn btn-lg button" href="<?php echo esc_url( $ss['button']['url'] ); ?>"><?php echo esc_html( $ss['button']['title'] ); ?></a> </div>
    </div>
  </div>
</div>
<?php endif; ?>
<!--BEST SELLERS SECTION-->
<?php $bs = get_field('best_sellers');
if( $bs ): ?>
<div class="container pt-5 pb-5">
  <div class="row pb-5">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h2 class="text-center heading-md-b">
        <?=$bs['title'];?>
      </h2>
    </div>
  </div>
    <div class="row pb-0 pl-4 pr-4">
        <?php if ( class_exists( 'WooCommerce' ) ) { echo do_shortcode('[products limit="4" columns="4" best_selling="true" /]'); }?>        
    </div>  
  <div class="row pb-2">
    <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a class="btn btn-lg button" href="<?php echo $bs['link']['url'] ; ?>"><?php echo $bs['link']['title'] ; ?></a> </div>
  </div>
</div>
<?php endif; ?>
<!--COMMITMENT/ICONS SECTION-->
<?php if(get_field('show_commitment_section')){?>
<?php include get_template_directory() . '/templates/comm-sect.php'; ?>
<?php }?>
<!--Nature is the Star-->
<?php $sf = get_field('section_five');
if( $sf['enable'] ): ?>
<div class="container-fluid" id="nature">
  <div class="row mr-0">
    <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="pl-5 pt-5 pb-5">
        <h2 class="heading-md-b"><?php echo $sf['heading']; ?></h2>
        <div class="pt-3 mt-5"><?php echo $sf['text']; ?> </div>
        <?php if($sf['button'] != ""){ ?>
        <a class="btn btn-lg button" href="<?php echo $sf['button']['url']; ?>"><?php echo $sf['button']['title']; ?> </a>
        <?php }?>
      </div>
    </div>
    <div class="col mr-0 nature-bg-col bg-col" style="background:url('<?php echo $sf["image"]; ?>') 0% 0% / cover no-repeat;">
      <p>&nbsp;</p>
    </div>
  </div>
</div>
<?php endif; ?>
<!--No side effects-->
<?php $six = get_field('section_six');
if( $six['enable'] ): ?>
<div class="container-fluid pt-5 pb-5" id="no-side-effects" style="background:url('<?php echo $six["image"]; ?>') 0% 0% / cover no-repeat;">
  <div class="row mr-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
          <div class="pl-5 pt-5 pb-5 pr-5 fade-bg mt-5 mb-5">
            <h2 class="accent-text heading-md-b"><?php echo $six['heading']; ?></h2>
            <div class="pt-3 mt-5 accent-text pb-4"><?php echo $six['text']; ?></div>
            <?php if($six['button'] != ""){ ?>
            <a class="btn btn-lg button" href="<?php echo $six['button']['url']; ?>"><?php echo $six['button']['title']; ?> </a>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<!--Made for you-->
<?php $sev= get_field('section_seven');
if( $sev['enable'] ): ?>
<div class="container-fluid" id="made-for-you">
  <div class="row mr-0">
    <div class="col-lg-6 col-md-6 col-sm-6 pt-5">
      <div class="pl-5 pt-5 pb-5">
        <h2 class="heading-md-b mt-3"><?php echo $sev['heading']; ?></h2>
        <div class="pt-3 mt-2 mb-5"><?php echo $sev['text']; ?> </div>
        <?php if($sev['button'] != ""){ ?>
        <a class="btn btn-lg button" href="<?php echo $sev['button']['url']; ?>"><?php echo $sev['button']['title']; ?> </a>
        <?php }?>
      </div>
    </div>
    <div class="col mr-0 made-for-you-col bg-col" style="background:url('<?php echo $sev['image']; ?> ') 0% 0% / cover no-repeat;">
      <p>&nbsp;</p>
    </div>
  </div>
</div>
<?php endif; ?>
<!--Testimonial 1-->

<div class="container-fluid" id="testimonial-1">
  <div class="row mr-0">
    <div class="d-none d-sm-block d-md-none p-3 ">
      <h2 class="text-center">Testimonials</h2>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 mr-0 testimonial1-col bg-col" style="background:url('<?php echo get_field("testimonials_section_image_1"); ?>') 0% 0% / cover no-repeat;">
      <p>&nbsp;</p>
    </div>
    <div class="col">
      <div class="pl-5 pt-5 pb-5 pr-5">
          <?php        $args = array(  
        'post_type' => 'testimonials',
        'post_status' => 'publish',
        'posts_per_page' => 2, 
         'cat'     => 5, 
        'orderby' => 'ID', 
        'order' => 'DESC', 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="testimonial pt-2  pb-2 mt-5 pl-2 pr-5">
          <div class="accent-text"><?php echo the_content();?></div>
          <div class="b accent-text"><?php echo the_title();?></div>
        </div>
      
      <?php 
    endwhile;
    wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</div>
</div>

<!--Testimonial 2-->
<div class="container-fluid" id="testimonial-2">
  <div class="row mr-0">
    <div class="col-lg-6 col-md-6 col-sm-12 mr-0">
      <div class="pl-5 pt-5 pb-5 pr-5"> 
          <?php        $args2 = array(  
        'post_type' => 'testimonials',
        'post_status' => 'publish',
        'posts_per_page' => 2, 
        'cat'     => 6, 
        'orderby' => 'ID', 
        'order' => 'DESC', 
    );

    $loop2 = new WP_Query( $args2 ); 
        
    while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
        <div class="testimonial pt-2  pb-2 mt-5 pl-2 pr-5">
          <div class="accent-text"><?php echo the_content();?></div>
          <div class="b accent-text"><?php echo the_title();?></div>
        </div>
      
      <?php 
    endwhile;
    wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="col testimonial1-col bg-col" style="background:url('<?php echo get_field("testimonials_section_image_2"); ?>') 0% 0% / cover no-repeat;">
      <p>&nbsp;</p>
    </div>
  </div>
</div>
<?php get_footer(); ?>