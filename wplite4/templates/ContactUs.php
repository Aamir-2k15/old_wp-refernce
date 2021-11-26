<?php /*
 * Template Name: Contact Us
 */ ?>
<?php get_header(); ?>
<section id="contact" class="mt-4">
    <div class="container-fluid mt-4">

        <div class="section-header">
            <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

            <div class="col-lg-6">
                <div class="map mb-4 mb-lg-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-5 info">
                        <i class="ion-ios-location-outline"></i>
                        <p><?= $options['address']; ?></p>
                    </div>
                    <div class="col-md-4 info">
                        <i class="ion-ios-email-outline"></i>
                        <p><?= $options['site_email']; ?></p>
                    </div>
                    <div class="col-md-3 info">
                        <i class="ion-ios-telephone-outline"></i>
                        <p><?= $options['phone']; ?></p>
                    </div>
                </div>

                <div class="form">
                    <?= do_shortcode('[contact-form-7 id="33" title="Contact form 1"]'); ?>
                </div>
            </div>

        </div>

    </div>
</section><!-- / -->
<?php get_footer(); ?>