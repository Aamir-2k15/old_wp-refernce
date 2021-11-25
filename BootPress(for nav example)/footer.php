<!-- Signup Newsletter Start -->
<?php /*get theme options*/ $options = get_option( 'theme_settings' ); ?>
<div class="container" style="background: #004085;">
      <div class="row"> 
        <!-- Single Footer Start -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single-footer">
            <?php dynamic_sidebar('footer-1');?>
          </div>
        </div>
        <!-- Single Footer Start --> 
        <!-- Single Footer Start -->
        <div class="col-md-2 col-sm-4 col-xs-6 footer-full">
          <div class="single-footer"> 
            <!--<h3 class="footer-title">My Account</h3>-->
            <div class="footer-content">
              <?php dynamic_sidebar('footer-2');?>
            </div>
          </div>
        </div>
        <!-- Single Footer Start --> 
        <!-- Single Footer Start -->
        <div class="col-md-2 col-sm-4 col-xs-6 footer-full">
          <div class="single-footer">
            <div class="footer-content">
              <?php dynamic_sidebar('footer-3');?>
            </div>
          </div>
        </div>
        <!-- Single Footer Start --> 
        <!-- Single Footer Start -->
        <div class="col-md-2 col-sm-4 col-xs-6 footer-full">
          <div class="single-footer">
            <div class="footer-content">
              <?php dynamic_sidebar('footer-4');?>
            </div>
          </div>
        </div>
        <!-- Single Footer Start --> 
        <!-- Single Footer Start -->
        <div class="col-md-2 col-sm-4 col-xs-6 footer-full">
          <div class="single-footer">
            <div class="footer-content">
              <?php dynamic_sidebar('footer-5');?>
            </div>
          </div>
        </div>
        <!-- Single Footer Start --> 
      </div>
      <!-- Row End --> 
    </div>
<?php wp_footer(); ?>
</body>
</html>