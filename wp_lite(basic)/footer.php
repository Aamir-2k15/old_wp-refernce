<!--FOOTER-->
<?php /* get theme options */ $options = get_option('theme_settings'); global $options;?><?php if($options['custom_footer'] !=""){ include_once('templates/custom_footer.php'); }else{?>
<footer class="default_footer" id="default_footer">
  <div  id="default_footer_sections">
  <div class="container">
    <div class="row">
      <?php if(is_active_sidebar('default_footer_1')){?>
      <div class="col-md-<?=($options['def_footer_col_1'] !="" ? $options['def_footer_col_1'] : '3');?>">
        <?php  dynamic_sidebar('default_footer_1') ?>
      </div><?php } ?>
      <?php if(is_active_sidebar('default_footer_2')){?>
      <div class="col-md-<?=($options['def_footer_col_2'] !="" ? $options['def_footer_col_2'] : '3');?>">
        <?php  dynamic_sidebar('default_footer_2') ?>
      </div><?php } ?>
      <?php if(is_active_sidebar('default_footer_3')){?>
      <div class="col-md-<?=($options['def_footer_col_3'] !="" ? $options['def_footer_col_3'] : '3');?>">
        <?php  dynamic_sidebar('default_footer_3') ?>
      </div><?php } ?>
      <?php if(is_active_sidebar('default_footer_4')){?>
      <div class="col-md-<?=($options['def_footer_col_4'] !="" ? $options['def_footer_col_4'] : '3');?>">
        <?php  dynamic_sidebar('default_footer_4') ?>
      </div><?php } ?>
    </div>
  </div>
  </div>
<?php 
    if($options['enable_bottom_section'] != ""){
        include_once 'templates/bottom-section.php';
    }
?>
</footer>
<?php wp_footer(); ?>
<script>
(function ($) {
 $(document).ready(function() {	
	//
 });
})(jQuery);	
</script>
</div>
</body>
</html>
<?php }?>