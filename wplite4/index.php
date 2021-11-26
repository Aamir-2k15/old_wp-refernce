<?php get_header(); ?><?php if (have_posts()):while (have_posts()):the_post(); ?>
        <section id="why-us" class="wow fadeIn">
            <div class="container">
                <header class="section-header">
                    <h1><?php the_title(); ?></h1>

                </header>
            </div>
        </section>
        <main id="main">
            <div class="container">
                <?php the_content(); ?>
                <?php edit_post_link('edit', '<p>', '</p><br/>'); ?>
            </div>
        </main>
        <?php
    endwhile;
endif;
?>
<?php get_footer(); ?>