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
<?php // add_theme_setting_option('logo', 'upload', '');?>
<?php // add_theme_setting_option('favicon', 'upload', '');?>
</fieldset>
<fieldset>
  <legend>Others</legend>
  <?php echo add_theme_setting_option('topbar-text', 'text', '');?>
  <?php // echo add_theme_setting_option('background', 'upload', '');?>
  <?php echo add_theme_setting_option('footer_text', 'textarea', '');?>
  <?php echo add_theme_setting_option('test2', 'color', '');?>
  <?php echo add_theme_setting_option('test3', 'check', '');?>
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

<div class="form-group row">
    <label class="col-md-2 control-label" for="theme_settings[xyz_media]">upload image</label>
    <div class="col-md-8"> 
        <button type="button" name="theme_settings[xyz_media_upl]">Upload</button> 
        <input type="text" name="theme_settings[xyz_media]" value="<?php echo $options['xyz_media']; ?>" class=""/>
    </div>
    <div class="col-md-2">
      
    </div>
    
  </div>


<tr>
                <th class="NAME_photo_upload_td_header"><label for="NAME_photo_upload">Upload Photo:</label></th>
                <td class="NAME_photo_upload_td_class">   
                    
                     <?php if($options['NAME_photo_upload']){ ?>
	<div class="col-sm-4"><input type="text" readonly name="settings[NAME_photo_upload]" id="NAME_photo_upload" value="<?php echo $options['NAME_photo_upload']; ?>" size="30" /></div>
	<div class="col-sm-6"><div class="col-sm-12 images_parent_class"><div class="col-sm-9 NAME_photo_upload_upload-delete delete_btn">X</div><img src="<?php echo $options['NAME_photo_upload']; ?>" id="NAME_photo_upload_new-img" style="margin-left: auto; margin-right: auto; display: block;"/></div></div> <?php } ?>
                    
                    <div class="row image_upload_row">
    <div class="NAME_photo_upload_imagetextarea">
        </div>
	<div class="col-sm-2"><input type="button" name="logo" id="NAME_photo_upload_upload-btn" class="button-secondary" value="Upload Image"></div>
	<div class="col-sm-6" style="padding-top: 20px;"></div>
	</div>
    <div class="NAME_photo_upload_imagearea">
        </div>
	            <br><span class="description"></span>
		
<script>
var $ = jQuery;
jQuery(document).ready(function($){
$("#NAME_photo_upload_upload-btn").click(function(e) {
e.preventDefault();
var image = wp.media({ 
        title: "Upload Image",
        // mutiple: true if you want to upload multiple files at once
        multiple: false
}).open()
.on("select", function(e){
        // This will return the selected image from the Media Uploader, the result is an object
        var uploaded_image = image.state().get("selection").first();
        // We convert uploaded_image to a JSON object to make accessing it easier
        // Output to the console uploaded_image
        console.log(uploaded_image);
        var image_url = uploaded_image.toJSON().url;
        // Lets assign the url value to the input field
        $('.NAME_photo_upload_imagetextarea').html('<div class="col-sm-4"><input type="text" readonly name="theme_settings[NAME_photo_upload]" id="NAME_photo_upload" value="'+image_url+'" size="30" /></div>');
        $('.NAME_photo_upload_imagearea').html('<div class="col-sm-6"><div class="col-sm-12 images_parent_class"><div class="col-sm-9 NAME_photo_upload_upload-delete delete_btn">X</div><img src="'+image_url+'" id="NAME_photo_upload_new-img" style="margin-left: auto; margin-right: auto; display: block;"/></div></div>');
});
});
});
$(document).on('click','.NAME_photo_upload_upload-delete',function(){
$('.NAME_photo_upload_imagetextarea .col-sm-4').remove();
$('.NAME_photo_upload_imagearea .col-sm-6').remove();
});
</script>
        <style>
        .delete_btn {
    color: white;
    font-weight: bold;
    cursor: pointer;
    position: absolute;
    top: -10px;
    right: -10px;
    border: 2px solid red;
    border-radius: 50px;
    text-align: center;
    width: 18px;
    height: 18px;
    background-color: red;
}
.images_parent_class
{
	display: inline-block;
	position:relative;
	width: 150px;
    height: 150px;
}
.images_parent_class img
{
	max-width:100%;
	width:100%;
	height:auto;
}select option, option, label,input{text-transform:capitalize !important;}
table input, table select, table textarea {    width: 360px !important;text-transform:capitalize !important;}.assoc{margin:15px 0;padding:20px 0;}

        </style>	
               
                </td></tr>
 </fieldset>