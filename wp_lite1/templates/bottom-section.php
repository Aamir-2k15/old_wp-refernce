  <div id="default_bottom_stripe">
  <div class="container">
  	<!--<div class="row">-->
    	<div class="d-flex flex-md-row flex-column <?=($options['default_bottom_stripe_text_align']=="center")?'justify-content-center text-center':'justify-content-between';?>">
  <?php is_active_sidebar('default_footer_bottom') ? dynamic_sidebar('default_footer_bottom') : '' ?>
</div>
    <!--</div>-->
  </div>
  </div>