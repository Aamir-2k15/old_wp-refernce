<?php if( is_admin() ) {?>
<link rel='stylesheet' href="<?php echo get_template_directory_uri();?>/admin/inc/bootstrap.min.css" type="text/css"/>
<link rel='stylesheet' href="<?php echo get_template_directory_uri();?>/admin/inc/settings.css" type="text/css"/>
<script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri();?>/admin/inc/bootstrap.min.js"></script>
<?php }?>
<?php
#function setting_field($name,$type){ echo '';}
?>
<div class="wrap">
  <div class="row">
    <div class="col-md-12">
      <h3 class="">Theme Settings</h3>
    </div>
  </div>

  <form method="post" action="options.php" enctype="multipart/form-data">
    <?php settings_fields('theme_settings'); ?>
    <?php $options = get_option('theme_settings'); ?>
    <?php //do_settings_sections('theme_settings');?>
     <?php /* show saved options message */    
    if ($_REQUEST['settings-updated']) : ?>
    <div class="updated">
    <p><strong class="alret">
    <?php _e('Options saved'); ?>
    </strong></p>
    </div>
    <?php endif; ?>
    <div class="the-container">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#Basics" aria-controls="Basics" role="tab" data-toggle="tab">Basics</a></li>
        <li role="presentation"><a href="#footer" aria-controls="footer" role="tab" data-toggle="tab">Footer</a></li>
        <li role="presentation"><a href="#social" aria-controls="social" role="tab" data-toggle="tab">Social</a></li>
<!--        <li role="presentation"><a href="#xxxx" aria-controls="xxxx" role="tab" data-toggle="tab">xxxxxx</a></li>
        <li role="presentation"><a href="#xxxx" aria-controls="xxxx" role="tab" data-toggle="tab">xxxxxx</a></li>
        <li role="presentation"><a href="#xxxx" aria-controls="xxxx" role="tab" data-toggle="tab">xxxxxx</a></li>-->
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="Basics">
          <?php include('pg/basic.php');?>
        </div>
        <div role="tabpanel" class="tab-pane" id="footer">
          <?php include('pg/footer_s.php');?>
        </div>
        <div role="tabpanel" class="tab-pane" id="social">
          <?php include('pg/social.php');?>
        </div>
<!--        <div role="tabpanel" class="tab-pane" id="xxxx">
          <?php //include('pg/xxxxx.php');?>
        </div>
        <div role="tabpanel" class="tab-pane" id="xxxx">
          <?php //include('pg/xxxxx.php');?>
        </div>-->
      </div>
    </div>
    <p>
    <input name="theme_settings[submit]" id="submit" value="Save Changes" type="submit" class="btn btn-primary btn-md pull-right"/>
    </p>
  </form>
</div>
<!--/the page--> 