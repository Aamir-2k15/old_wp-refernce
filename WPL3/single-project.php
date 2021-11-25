<?php get_header(); ?> <?php global $options;
global $social_arr;
?><?php if (have_posts()):while (have_posts()):the_post(); ?>
<div class="container">
<div class="row pt-5 pb-5">
<div class="col-md-12 pl-5 pr-5">
    <h1 class="heading-lg-b"><?php the_title(); ?></h1>
    <div class="content pt-5">
        <?php if (has_post_thumbnail()) { ?><?= the_post_thumbnail(); ?><?php } ?>
        
		<hr>
		<h2><?=section_one_get_meta( 'section_one_heading' );?></h2>
		
		<p><?=section_one_get_meta( 'section_one_text' );?></p>
		
		<hr>
		
		<h2><?=section_one_get_meta( 'section_two_heading' );?></h2>
		
		<p><?=section_one_get_meta( 'section_two_text' );?></p>
        
		<?php the_content(); ?>
		<?php edit_post_link('edit', '<p>', '</p><br/>'); ?>
    </div>
</div>
</div>
</div>
    <?php endwhile; endif;?>
<?php get_footer(); ?>