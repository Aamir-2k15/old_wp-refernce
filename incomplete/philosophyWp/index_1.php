<?php get_header(); ?>
<?php if (have_posts()):while (have_posts()):the_post(); ?>   
   <!-- .container -->
	<main role="main" class="">

      <div class="container"><div class="row">
              <div class="col-8"> 
        <h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php edit_post_link('edit', '<p>', '</p><br/>'); ?>
              </div>
              <div class="col-4"><?php get_sidebar(); ?></div>
      </div></div>

    </main><!-- /.container -->
	<?php endwhile; endif;?>
<?php get_footer(); ?>