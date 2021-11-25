<?php get_header(); ?>
 <?php  query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged'));?>
 <?php if (have_posts() ) : ?>
<style>.single-blog {max-height: 600px !important;   min-height: 600px !important;}.older{float:right;}
/* Pagination */.page_nav .page-numbers{position:relative;display:block;padding:.5rem .75rem;margin-left:-1px;line-height:1.25;color:#007bff;background-color:#fff;border:1px solid #dee2e6}.page_nav .page-numbers:hover{z-index:1;color:#fff;background-color:#007bff;border-color:#007bff}.page_nav .current{z-index:1;color:#fff;background-color:#007bff;border-color:#007bff}.the_excerpt{padding:15px;margin:10px 0;background-color:#f9f9f9;border-bottom:1px solid #f0f0f0}
</style>
<div class="container">
    <div class="row">
<div class="clearfix">&nbsp;</div>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the 
lede, informing new readers quickly and efficiently about what's most 
interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16f600d9a5e%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16f600d9a5e%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.20000076293945%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16f600d9a68%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16f600d9a68%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.20000076293945%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          </div>
        </div>
      </div>
   

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Blog Posts
          </h3>
          <div class="blog-post">
                 <?php while ( have_posts() ) : the_post(); ?>   
                <!-- Single Post Start -->
                <div class="the_excerpt row">
<?php $thumbnail_id = get_post_thumbnail_id(); $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);?>
         <?php if(has_post_thumbnail()):?>           <div class="blog-img col-md-3">
                        <a href="<?php the_permalink(); ?>"><img class="img img-responsive img-thumbnail" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></a>
                    </div> <?php endif;?>
                    <div class="blog-content <?=has_post_thumbnail()?'col-md-9':'col-md-12'?>">
                        <div class="blog-content-upper">
                            <h6 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <div class="blog-content-lower">
                            <a href="#">By <?php the_author(); ?></a>
                            <span class="f-right"><?php echo the_time('jS F Y');?></span>
                        </div>
                    </div>
                </div>
                <!-- Single Post End -->
           
           <?php endwhile; ?>
          </div><!-- /.blog-post -->

<!--<span class="newer"><?php // previous_posts_link(__('« Newer','example')) ?></span>--> 
<!--<ul class="pagination page_nav"><?php // wpStarter_pagination();?></ul>-->
<!--<span class="older"><?php // next_posts_link(__('Older »','example')) ?></span>-->
                <!-- End of .blog-pagination -->

          <nav class="blog-pagination">
            <!--<a class="btn btn-outline-primary older" href="#"><?php //next_posts_link(__('Older »','example')) ?></a>-->
            <ul class="pagination page_nav"><?=wpStarter_pagination();?></ul>
            <!--<a class="btn btn-outline-secondary newer" href="#"><?php //previous_posts_link(__('« Newer','example')) ?></a>-->
          </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <?php is_active_sidebar('blog')?dynamic_sidebar('blog'):'Add some widgets to your blog.'?>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
    
    <div class="clearfix m-4">&nbsp;</div>
</div>
</div>
   <?php endif; ?>
    
<?php get_footer(); ?>