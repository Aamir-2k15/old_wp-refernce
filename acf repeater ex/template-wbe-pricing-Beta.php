<?php
/*
  Template Name: (Beta)WEB Pricing
 */

get_header();

$current_page_id = get_queried_object_id();
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet"/>
<script>

    function check() {
        var checkBox = document.getElementById("checbox");
        var yearly = document.getElementsByClassName("yearly");
        var monthly = document.getElementsByClassName("monthly");

        for (var i = 0; i < yearly.length; i++) {
            if (checkBox.checked == false) {
                yearly[i].style.display = "none";
                monthly[i].style.display = "block";
            } else if (checkBox.checked == true) {
                yearly[i].style.display = "block";
                monthly[i].style.display = "none";
            }
        }
    }
    check();
</script>
<script>
    $(document).ready(function () {
        $('.collapse.in').prev('.panel-heading').addClass('active');
        $('#accordion, #bs-collapse')
                .on('show.bs.collapse', function (a) {
                    $(a.target).prev('.panel-heading').addClass('active');
                })
                .on('hide.bs.collapse', function (a) {
                    $(a.target).prev('.panel-heading').removeClass('active');
                });
    });

</script>
<!--Top Section-->
<?php if (have_rows('section_one')) { ?>
<?php
    while (have_rows('section_one')) {
        the_row();
        ?>
<!--Top Section-->
<section class="page-header-container pricing-header">
<div class="container-fluid">
  <h1 class="banner-title">
    <?php the_sub_field('heading'); ?>
  </h1>
  <div class="row">
    <?php if (have_rows('features')) : ?>
    <?php while (have_rows('features')) : the_row(); ?>
    <div class="col-xs-12 col-sm-3 gap-top">
      <p class="point"> <span class="circle"></span> <?php echo the_sub_field('the_feautre'); ?> </p>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <?php $button = get_sub_field('button'); ?>
  <?php if ($button) : ?>
  <div class="row trialBtn">
    <button class="btn btn-default btnFreeTrial" onclick="window.location.href = '<?php echo esc_url($button['url']); ?>'"> <?php echo esc_html($button['title']); ?> </button>
  </div>
  <?php endif; ?>
</div>
</section>
<?php }//endwhile; ?>
<?php }//endif;    ?>

<!--PLANS-->
<div class="container-fluid pricing">
  <div class="row">
    <div class="col-md-12">
      <div class="top">
        <div class="toggle-btn">
          <label class="toggle-label">
            <input type="checkbox" id="checbox" onclick="check()"/>
            <span class="back"> <span class="toggle"></span> <span class="label on">Monthly</span> <span class="label off">Yearly</span> </span> </label>
        </div>
      </div>
    </div>
  </div>
  <div class="row pricingTables"> 
    <!--MONTHLY-->
    
    <?php
        $n = 1;
        if (have_rows('monthly')) {
            ?>
    <?php
            while (have_rows('monthly')) {
                the_row();
                ?>
    <?php
                // Check rows exists.
                if (have_rows('plan')):
                    // Loop through rows.
                    while (have_rows('plan')) : the_row();
                        // Load sub field value.
                        $heading = get_sub_field('heading');
                        $subheading = get_sub_field('subheading');

                        switch ($n) {
                            case $n == 1:
                                $color = 'yellow';
                                break;
                            case $n == 2:
                                $color = 'blue';
                                break;
                            case $n == 3:
                                $color = 'green';
                                break;
                            case $n == 4:
                                $color = 'purple';
                                break;

                            default:
                                $color = 'yellow';
                                break;
                        }
                        ?>
    <div class="col-md-3 princing-item <?php echo $color; ?> monthly plan_<?php echo $n; ?>">
      <div class="pricingBox">
        <div class="pricing-divider text-center">
          <div class="topHeading">
            <h3 class="text-light"> <?php echo $heading; ?> </h3>
            <p>
              <?php the_sub_field('subheading'); ?>
            </p>
          </div>
          <div class="pricingPlan">
            <h4>
              <?php the_sub_field('price'); ?>
              <span class="currencyIcon"><i class="fas fa-euro-sign"></i></span> </h4>
          </div>
          <div class="billingCircle">
            <p>per month billed annualy</p>
          </div>
          <div class="bookingIncluded">
            <p><span class="bookingIncludedValue">
              <?php the_sub_field('bookings'); ?>
              </span> monthly bookings included</p>
          </div>
          <div class="costPerBooking">
            <h6>Cost Per Booking:</h6>
            <p><span class="costPerBookingAmount">
              <?php the_sub_field('cost_per_booking'); ?>
              </span> eur/booking</p>
          </div>
          <div class="signUpButton">
            <?php $signup_link = get_sub_field('signup_link'); ?>
            <?php if ($signup_link) : ?>
            <button type="button" class="btn btnSignUp btnYellow" onclick="window.location.href = '<?php echo esc_url($signup_link['url']); ?>'">Sign up</button>
            <?php endif; ?>
            <p>
              <?php the_sub_field('plan_information'); ?>
            </p>
          </div>
        </div>
        <div class="card-body">
          <?php if (have_rows('plan_features')) : ?>
          <?php while (have_rows('plan_features')) : the_row(); ?>
          <ul class="list-unstyled mb-5 position-relative">
            <?php if (get_sub_field('feature')) { ?>
            <li> <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/<?php echo $color; ?>Tick.png" />
              <?php the_sub_field('feature'); ?>
            </li>
            <?php } ?>
          </ul>
          <?php endwhile; ?>
          <?php endif; ?>
          <?php $learn_more = get_sub_field('learn_more'); ?>
          <?php if ($learn_more) : ?>
          <div class="learnBtn">
            <button type="button" class="btn btnMore" onclick="window.location.href = '<?php echo esc_url($learn_more['url']); ?>'"><?php echo esc_html($learn_more['title']); ?></button>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php
                        $n++;
                    // End loop.
                    endwhile;
// No value.
                else :
                // Do NOTHING ...
                endif;
                ?>
    
    <!--ENDS PLAN 4-->
    <?php } //endwhile monthly       ?>
    <?php } //endif monthly      ?>
    
    <!--YEARLY-->
    <?php
        $n_yearly = 1;
        if (have_rows('yearly')) {
            ?>
    <?php
            while (have_rows('yearly')) {
                the_row();
                ?>
    <?php
                // Check rows exists.
                if (have_rows('plan')):
                    // Loop through rows.
                    while (have_rows('plan')) : the_row();
                        // Load sub field value.
                        $heading = get_sub_field('heading');
                        $subheading = get_sub_field('subheading');

                        switch ($n_yearly) {
                            case $n_yearly == 1:
                                $color = 'yellow';
                                break;
                            case $n_yearly == 2:
                                $color = 'blue';
                                break;
                            case $n_yearly == 3:
                                $color = 'green';
                                break;
                            case $n_yearly == 4:
                                $color = 'purple';
                                break;

                            default:
                                $color = 'yellow';
                                break;
                        }
                        ?>
    <div class="col-md-3 princing-item <?php echo $color; ?> yearly plan_<?php echo $n_yearly; ?>">
      <div class="pricingBox">
        <div class="pricing-divider text-center">
          <div class="topHeading">
            <h3 class="text-light"> <?php echo $heading; ?> </h3>
            <p>
              <?php the_sub_field('subheading'); ?>
            </p>
          </div>
          <div class="pricingPlan">
            <h4>
              <?php the_sub_field('price'); ?>
              <span class="currencyIcon"><i class="fas fa-euro-sign"></i></span> </h4>
          </div>
          <div class="billingCircle">
            <p>per month billed annualy</p>
          </div>
          <div class="bookingIncluded">
            <p><span class="bookingIncludedValue">
              <?php the_sub_field('bookings'); ?>
              </span> monthly bookings included</p>
          </div>
          <div class="costPerBooking">
            <h6>Cost Per Booking:</h6>
            <p><span class="costPerBookingAmount">
              <?php the_sub_field('cost_per_booking'); ?>
              </span> eur/booking</p>
          </div>
          <div class="signUpButton">
            <?php $signup_link = get_sub_field('signup_link'); ?>
            <?php if ($signup_link) : ?>
            <button type="button" class="btn btnSignUp btnYellow" onclick="window.location.href = '<?php echo esc_url($signup_link['url']); ?>'">Sign up</button>
            <?php endif; ?>
            <p>
              <?php the_sub_field('plan_information'); ?>
            </p>
          </div>
        </div>
        <div class="card-body">
          <?php if (have_rows('plan_features')) : ?>
          <?php while (have_rows('plan_features')) : the_row(); ?>
          <ul class="list-unstyled mb-5 position-relative">
            <?php if (get_sub_field('feature')) { ?>
            <li> <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/<?php echo $color; ?>Tick.png" />
              <?php the_sub_field('feature'); ?>
            </li>
            <?php } ?>
          </ul>
          <?php endwhile; ?>
          <?php endif; ?>
          <?php $learn_more = get_sub_field('learn_more'); ?>
          <?php if ($learn_more) : ?>
          <div class="learnBtn">
            <button type="button" class="btn btnMore" onclick="window.location.href = '<?php echo esc_url($learn_more['url']); ?>'"><?php echo esc_html($learn_more['title']); ?></button>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php
                        $n_yearly++;
                    // End loop.
                    endwhile;
// No value.
                else :
                // Do NOTHING ...
                endif;
                ?>
    
    <!--ENDS PLAN 4-->
    <?php } //endwhile monthly       ?>
    <?php } //endif monthly      ?>
    
    <!--ENDS PLANS SECTION--> 
  </div>
  <div class="row">
    <div class="col-md-12 note">
      <p>*Local taxes (VAT, GST, etc.) will be charged in addition to the prices mentioned above. </p>
    </div>
  </div>
</div>

<!-------------------------------------------LOGS SECTION--------------------------------------------------->
<?php if (have_rows('logos_section')) { ?>
<?php
    while (have_rows('logos_section')) {
        the_row();
        ?>
<div class="container-fluid travelAgent text-center">
  <div class="row">
    <div class="col-md-12">
      <h2>
        <?php the_sub_field('heading'); ?>
      </h2>
    </div>
  </div>
  <?php $the_logos = get_sub_field('the_logos'); ?>
  <?php if ($the_logos): ?>
  <div class="row logoBox">
    <?php foreach ($the_logos as $image): ?>
    <div class="col-md-2 logoBlock"> <img class="img-responsive" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/> </div>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <div class="row">
    <?php $button = get_sub_field('button'); ?>
    <?php if ($button) : ?>
    <button class="btn btn-default btnFreeTrial" onclick="window.location.href = '<?php echo esc_url($button['url']); ?>'"> <?php echo esc_html($button['title']); ?> </button>
    <?php endif; ?>
  </div>
</div>
<?php } //endwhile;  ?>
<?php } //endif;       ?>

<!--TESTIMONIALS-->
<?php if (have_rows('testimonial_section')) : ?>
<?php while (have_rows('testimonial_section')) : the_row(); ?>
<div class="container-fluid testimonials">
  <div class="row">
    <div class="col-md-6 headingSection">
      <h2>
        <?php the_sub_field('heading'); ?>
      </h2>
    </div>
    <div class="col-md-6">
      <?php if (get_sub_field('logo_img')) : ?>
      <img class="img-responsive" src="<?php the_sub_field('logo_img'); ?>" />
      <?php endif ?>
      <p>
        <?php the_sub_field('testimaonial'); ?>
      </p>
      <h3>
        <?php the_sub_field('name'); ?>
      </h3>
      <h3>
        <?php the_sub_field('meta_info'); ?>
      </h3>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<!--FAQs-->
<div class="container-fluid faqs">
  <div class="row">
    <div class="col-md-12 text-center faqsHeading">
      <h2>Frequently Asked Questions</h2>
      <span> 
      <!--<button class="btn btn-default btnExpandAll">Expand All</button></span>--> 
    </div>
    <?php if (have_rows('faqs_section')) { ?>
    <?php
            while (have_rows('faqs_section')) {
                the_row();
                ?>
    <div class="col-md-12">
      <div class="panel-group wrap" id="bs-collapse"> 
        
        <!-- end of panel --> 
        
        <!------------------------->
        <?php
                        $x = 1;
                        if (have_rows('the_section')) :
                            ?>
        <?php while (have_rows('the_section')) : the_row(); ?>
        <div class="panel">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#question_<?php echo $x; ?>">
              <?php the_sub_field('question'); ?>
              </a> </h4>
          </div>
          <div id="question_<?php echo $x; ?>" class="panel-collapse collapse">
            <div class="panel-body">
              <p>
                <?php the_sub_field('answer'); ?>
              </p>
            </div>
          </div>
        </div>
        <?php
                                $x++;
                            endwhile;
                            ?>
        <?php endif; ?>
        
        <!-------------------------> 
      </div>
      <!-- end of #bs-collapse  --> 
    </div>
    <?php } //endwhile;        ?>
    <?php } //endif;       ?>
  </div>
</div>
<?= get_template_part('request-demo') ?>
<?php get_footer(); ?>
