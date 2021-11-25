<fieldset>
  <legend>Branding</legend>
<!--  <div class="form-group row">
    <label class="col-md-2 control-label" for="upload_logo">Logo</label>
    <div class="col-md-8">
      <label for="upload_logo">
      <input id="upload_logo" type="text" name="theme_settings[upload_logo]" value="<?php echo $options['upload_logo']; ?>" class="form-control"/>
      <input id="upload_logo_button" type="button" value="Upload Image" class="btn btn-primary"/>
      <br />
      <div class="small-note">Enter an URL or upload an image for the logo.</div>
      </label>
    </div>
    <div class="col-md-2">
      <?php if($options['upload_logo']):?>
      <div class="preview"><img src="<?php echo $options['upload_logo']; ?>"/></div>
      <div class="preview"><span class="small-note">Logo Preview</span></div>
      <?php endif;?>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 control-label" for="upload_favicon">favicon</label>
    <div class="col-md-8">
      <label for="upload_favicon">
      <input id="upload_favicon" type="text" name="theme_settings[upload_favicon]" value="<?php echo $options['upload_favicon']; ?>" class="form-control"/>
      <input id="upload_favicon_button" type="button" value="Upload Image" class="btn btn-primary"/>
      <br />
      <div class="small-note">Enter an URL or upload an image for the favicon.</div>
      </label>
    </div>
    <div class="col-md-2">
      <?php if($options['upload_favicon']):?>
      <div class="preview"><img src="<?php echo $options['upload_favicon']; ?>"/></div>
      <div class="preview"><span class="small-note">favicon Preview</span></div>
      <?php endif;?>
    </div>
  </div>-->
<?php form_field('logo', 'upload', '');?>
<?php form_field('favicon', 'upload', '');?>
</fieldset>
<fieldset>
  <legend>Others</legend>
  <?php //echo add_theme_setting_option('topbar-text', 'text', '');?>
  <?php // echo add_theme_setting_option('background', 'upload', '');?>
  <?php // echo add_theme_setting_option('test', 'textarea', '');?>
  <?php // echo add_theme_setting_option('test2', 'color', '');?>
  <?php // echo add_theme_setting_option('test3', 'check', '');?>
<!--  <div class="form-group row">
    <label class="col-md-2 control-label" for="theme_settings[topbar-text]">Top Bar Text</label>
    <div class="col-md-8">     
<textarea name="theme_settings[topbar-text]"  id="theme_settings[topbar-text]" type="text" class="inp textarea"/><?php if ( $options['topbar-text'] != '' ){ echo $options['topbar-text'];} ?></textarea>
    </div>
    <div class="col-md-2">
      
    </div>
  </div>-->
  
<!--  <div class="form-group row">
    <label class="col-md-2 control-label" for="theme_settings[background]">Background Color</label>
    <div class="col-md-8"> <input type="text" name="theme_settings[background]" value="<?php echo $options['background']; ?>" class="cpa-color-picker" >
    </div>
    <div class="col-md-2">
      
    </div>
    
  </div>-->
 </fieldset>