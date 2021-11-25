<?php /*
 * Template Name: Contact
 */ ?><?php get_header(); ?><?php global $options;
global $social_arr; ?><?php if (have_posts()):while (have_posts()):the_post(); ?>
        <style>iframe {    width: 100% !important;}textarea {
                max-height: 140px;
                resize: none;
            }input[type="text"], input[type="email"], textarea {
                border: 1px solid #AAA !important;border-radius: 0;
                width: 100%;
            }input[type='submit'] {
                border: none !important;
                padding: 12px 36px !important;
            }</style><?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
        <div class="container-fluid" id="about" style="background:url('<?php echo $image[0]; ?>') center center / cover no-repeat;">
            <div class="row mr-0 pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto pb-5">
                            <div class="text-white pt-5 mt-5 pb-5 mb-5 pl-5 ml-0">
                                <h1 class="pt-4 heading-lg-b"><?= the_title() ?></h1>
                                <h3 class="pt-4 text-b-lg"></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row pb-5 mb-5">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="row pt-5 mt-5">
                        <div class="col-md-6 pt-3"><?= the_content(); ?>

                            <div class="pb-4 pt-4">
                                <p class="lead"><i class="fa fa-home"></i> <?php echo ($options['address'] ? $options['address'] : ''); ?></p>
                                
                                <p class="lead"><i class="fa fa-phone"></i> <?php echo ($options['phone'] ? $options['phone'] : ''); ?></p>
                                <p class="lead"><i class="fa fa-envelope-o"></i> <?php echo get_bloginfo('admin_email'); ?></p>
                            </div>
                            <h4 class="heading-sm-b pt-2 pb-3">Follow us on:</h4>
                            <ul class="list-inline mb-3 contact-social">
                                <?php if (($options['facebook']) != "") { ?>
                                    <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank" href="<?= $options['facebook']; ?>"><i class="fa fa-2x  fa-facebook"></i> </a> </li>
                                <?php } ?>
                                <?php if (($options['pinterest']) != "") { ?>
                                    <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank" href="<?= $options['pinterest']; ?>"><i class="fa fa-2x  fa-pinterest"></i> </a> </li>
                                <?php } ?>
                                <?php if (($options['youtube']) != "") { ?>
                                    <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank" href="<?= $options['youtube']; ?>"><i class="fa fa-2x  fa-youtube"></i> </a> </li>
                                <?php } ?>
                                <?php if (($options['google-plus']) != "") { ?>
                                    <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank" href="<?= $options['google-plus']; ?>"><i class="fa fa-2x  fa-google-plus"></i> </a> </li>
                                <?php } ?>
                                <?php if (($options['twitter']) != "") { ?>
                                    <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank" href="<?= $options['twitter']; ?>"><i class="fa fa-2x  fa-twitter"></i> </a> </li>
                                <?php } ?>
                                <?php if (($options['instagram']) != "") { ?>
                                    <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank" href="<?= $options['instagram']; ?>"><i class="fa fa-2x  fa-instagram"></i> </a> </li>
                                <?php } ?>
                                <?php if (($options['email']) != "") { ?>
                                    <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank" href="<?= $options['email']; ?>"><i class="fa fa-2x  fa-envelope"></i> </a> </li>
                                <?php } ?>
                                <?php if (($options['linkedin']) != "") { ?>
                                    <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank" href="<?= $options['linkedin']; ?>"><i class="fa fa-2x  fa-linkedin"></i> </a> </li>
                                <?php } ?>
                            </ul>

                        </div>
                        <div class="col-md-6"><?php echo do_shortcode('[contact-form-7 id="332" title="Contact us"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo ($options['map'] ? $options['map'] : ''); ?><?php endwhile;
endif; ?>

<?php get_footer(); ?>