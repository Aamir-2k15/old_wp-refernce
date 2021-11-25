<?php get_header(); ?>
 <?php  query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged'));?>
      <?php if (have_posts() ) : ?>
<style>.single-blog {max-height: 600px !important;   min-height: 600px !important;}.older{float:right;}</style>
<div class="breadcrumb-area ptb-50">
    <div class="container">
<!--    <div class="breadcrumb">
        <ul>
            <li><a href="<?php bloginfo('url');?>">Home</a></li>
            <li class="active"><a href="<?php bloginfo('url');?>/blog">Blog</a></li>
        </ul>
    </div>-->
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Blog Area Start -->
<div class="blog-area off-white-bg pb-50">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-xs-12">
                <div class="section-title text-center ptb-50">
                    <h3 class="section-info">ALL LATEST BLOGS</h3>
                </div>
            </div>
            <!-- Section Title End -->
        </div>
        <!-- Row End -->
        <div class="row">
      <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-md-4 col-sm-6">
                <!-- Single Blog Start -->
                <div class="single-blog">
                    <div class="blog-img">
                        <?php $thumbnail_id = get_post_thumbnail_id(); $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
              $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-content-upper">
                            <h6 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <div class="blog-content-lower">
                            <a href="#">By <?php the_author(); ?></a>
                            <span class="f-right"><?php echo the_time('F jS, Y');?></span>
                        </div>
                    </div>
                </div>
                <!-- Single Blog End -->
            </div>
           <?php endwhile; ?>
         </div>
        <!-- Row End -->
        <div class="row">
            <div class="col-sm-12">
<ul class="blog-pagination ptb-20"></ul>
<?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?>
                <!-- End of .blog-pagination -->
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div><?php endif; ?>
<?php get_footer(); ?>