<?php 
/* Template Name: Posts */
get_header(); ?>


     
 <div class="main" id="blog">
     <!-- SECTION 2 -->
     <section class="section-2">
        <h1 class="heading-border-middle heading-black">Blog Posts</h1>
      </section>

      <!-- SECTION 3 -->
      <section class="section-3">
          
          
        <!-- CONTAINER 1 -->
        <div class="container"> <div class="row justify-content-center row-1">
 <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'post',
     'posts_per_page' => 4,
     'paged' => $paged
);$n =1;
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post(); $num =  $loop->found_posts; ?>         


              <div class="col-lg-5 post_<?=$n;?>">
              <div class="img-para-box">
                <div class="small-img-box">
                    <?php if (has_post_thumbnail()) { ?>
                  <!--<img src="<?php echo $image[0];?>" alt="" class="small-img-1 img-fluid" />-->
                  <?= the_post_thumbnail(); ?>
                  <?php } ?>
                </div>
                <div class="image-right-column">
					<h5 class="heading-5"><a href="<?= the_permalink();?>" class="img-btn"><?php the_title(); ?></a></h5>
                  <div class="img-para">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?= the_permalink();?>" class="img-btn">Read More</a>
                </div>
              </div>
            </div>


<?php $n++;

 if($n %2 != 0){echo '<hr/>';} 
endwhile;
?></div> </div> </section>
<section class="section-3"><div class="container"><div class="row justify-content-center"><div class="pagination">
     <?php
     $big = 999999999;
     echo paginate_links( array(
          'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $loop->max_num_pages,
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;'
     ) );
?>
</div></div></div></section>
<?php wp_reset_postdata(); ?>
<?php edit_post_link('edit', '<p>', '</p><br/>'); ?>
<?php get_footer(); ?>