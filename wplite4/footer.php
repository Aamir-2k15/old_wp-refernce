<!--FOOTER-->
<?php
/* get theme options */ $options = get_option('theme_settings');
global $options;
?>
<!--==========================
    Footer
  ============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-md-5 footer-info">
                    <?php dynamic_sidebar('footer_1'); ?>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <?php dynamic_sidebar('footer_2'); ?>
                </div>

                <div class="col-md-2 footer-links">
                    <?php dynamic_sidebar('footer_3'); ?>
                </div>

                <div class="col-md-3 footer-contact">
                    <h4>Contact Us</h4>
                    <p><strong>Phone:</strong> <?= $options['phone']; ?><br>
                        <strong>Email:</strong> <?= $options['site_email']; ?><br>
                    </p>

                    <div class="social-links">
                        <a href="<?= $options['twitter']; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="<?= $options['facebook']; ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="<?= $options['instagram']; ?>" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="<?= $options['linkedin']; ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>



            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><?php bloginfo('name'); ?></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
    </div>
</footer><!-- #footer -->
<?php wp_footer(); ?>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="<?= get_template_directory_uri() ?>/lib/jquery/jquery.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/js/script.js"></script>
<script src="<?= get_template_directory_uri() ?>/lib/mobile-nav/mobile-nav.js"></script>
<script src="<?= get_template_directory_uri() ?>/lib/jquery/jquery-migrate.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= get_template_directory_uri() ?>/lib/easing/easing.min.js"></script>

<script src="<?= get_template_directory_uri() ?>/lib/wow/wow.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/lib/counterup/counterup.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/lib/lightbox/js/lightbox.min.js"></script>

<script src="<?= get_template_directory_uri() ?>/js/main.js"></script>

</body>
</html>