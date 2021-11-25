<?php
function form_field($label,$type,$class="form-control", $dd_arr=null, $numb_min=null, $numb_max=null){ 
  $options = get_option( 'theme_settings' ); 
  $label = ucfirst($label);
  $name = str_replace(" ", "_", $label);
  $class = ($class =="")?"form-control":$class;
?>
  <div class="form-group row">
 
<!---***
*** 1.LOGO ***
****---> 
    <?php if($type == "logo")://if text?>
  <label class="col-md-3 control-label" for="<?=$type?>">Logo</label>
   <div class="col-md-6">     
    <a href="<?php bloginfo('url'); ?>/wp-admin/customize.php?autofocus[control]=custom_logo" class="btn btn-primary <?=$class;?>"> Upload Logo</a>
   </div><div class="col-md-3">
<?php //this part is only to get the logo variable to use in img src
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
/////// ends var to get img src?>
    <?php if ( has_custom_logo() ) {?>
     <div class="preview"><img src="<?php echo esc_url( $logo[0] )?>" class="img-responsive img-thumbnail"/></div>
     <div class="preview"><span class="small-note">Logo Preview</span></div>
    <?php }else{?><div class="preview"><span class="small-note">No Image Selected!</span></div> <?php }?>
</div>
  <?php endif;//if logo?>     

<!---***
*** 2.TEXT ***
****---> 
<?php if($type == "text")://if text?>
  <label class="col-md-3 control-label" for="theme_settings[<?=$name?>]"><?=$label?></label>
    <div class="col-md-6">     
<input name="theme_settings[<?=$name?>]" id="theme_settings[<?=$name?>]" 
type="text" 
value='<?php echo $options[$name]; ?>'
class="<?=$class?>"/>
</div>
<div class="col-md-3">

</div>
<?php endif;//if text?>  

   <!---***
   *** 3.TEXTAREA ***
   ****--->     
  <?php if($type == "textarea")://if textarea?>
  <label class="col-md-3 control-label" for="theme_settings[<?=$name?>]"><?=$label?></label> 
     <div class="col-md-6">     
<textarea name="theme_settings[<?=$name?>]"  id="theme_settings[<?=$name?>]" class="<?=$class?>"/><?php if ( $options[$name] != '' ){ echo $options[$name];} ?></textarea>
    </div>
    <div class="col-md-3">
      
    </div>
  <?php endif;//if textarea?>
  
  
<!---***
*** 4.CHECKBOX ***
****--->   
<?php if($type == "checkbox")://if checkbox?>
    <label class="col-md-3 control-label" for="theme_settings[<?=$name?>]"><?=$label?></label>
    <div class="col-md-6">     
        <label class="checkbox-lh"><input class="form-check" name="theme_settings[<?=$name?>]"  id="theme_settings[<?=$name?>]" type="checkbox" value="subscribe" 
        <?=(isset($options[$name])?"checked='checked'":""); ?> /> <span>Yes</span></label>
    </div>
    <div class="col-md-3">
      
    </div>
 <?php endif;//if checkbox?>


<!---***
*** 5.COLORPICKER ***
****---> 

<?php if($type == "colorpicker")://if colorpicker?>
  <label class="col-md-3 control-label" for="theme_settings[<?=$name?>]"><?=$label?></label>
    <div class="col-md-6">     
<input name="theme_settings[<?=$name?>]" id="theme_settings[<?=$name?>]" 
type="text" 
value='<?php echo $options[$name]; ?>'
class="cpa-color-picker"/>
</div>
<div class="col-md-3">

</div>
  <?php endif;//if colorpicker?>   
  
  
<!---***
*** 6.FILE UPLOAD ***
****---> 
    <?php if($type == "upload")://if type upload?>
    <label class="col-md-3 control-label" for="<?=$name?>"><?=$label?></label>  
    <div class="col-md-6">
      <label for="<?=$name?>">
      <input id="<?=$name?>" type="text" name="theme_settings[<?=$name?>]" value='<?php echo $options[$name]; ?>' class="<?=$class?> form-control" />
      <input style="margin-top: -65px;margin-right: -11px;border-radius: 0px 3px 3px 0;" id="<?=$name?>_button" type="button" value="<?=ucfirst($type)?> <?=$label;?>" class="btn btn-primary"/>
      <br />
      <div class="small-note">Enter an URL or upload an image for <?=$name?>.</div>
      </label>
          <script>
    var upload_image_button=false;
    
jQuery(document).ready(function() {
 jQuery("#<?php echo $name;?>_button").click(function() {
        upload_image_button =true;
        formfieldID=jQuery(this).prev().attr("id");
     formfield = jQuery("#<?php echo $name;?>").attr('name');
     tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
        if(upload_image_button==true){

                var oldFunc = window.send_to_editor;
                window.send_to_editor = function(html) {

                imgurl = jQuery('img', html).attr('src');
                jQuery("#"+formfieldID).val(imgurl);
                 tb_remove();
                window.send_to_editor = oldFunc;
                }
        }
        upload_image_button=false;
  });
});
    </script>
    </div>
    <div class="col-md-3">
      <?php if($options[$name]):?>
        <div class="preview"><img src="<?php echo $options[$name]; ?>" class="img-responsive img-thumbnail"/></div>
      <div class="preview"><span class="small-note"><?=$label;?> Preview</span></div>
      <?php endif;?>
    </div>
  <?php endif;//if type upload?>
    
    
    <!---***
   *** 7.DROPDOWN ***
   ****--->     
  <?php if($type == "dropdown")://if textarea?>
  <label class="col-md-3 control-label" for="theme_settings[<?=$name?>]"><?=$label?></label> 
     <div class="col-md-6">     
         <select name="theme_settings[<?=$name?>]"  id="theme_settings[<?=$name?>]" class="<?=$class?>">
             <option value="">-- SELECT --</option>
             <?php foreach($dd_arr as $opt):?>
             <option value="<?=$opt?>" <?php if($options[$name] == $opt){ echo "selected";}?>><?=ucfirst($opt)?></option>
             <?php endforeach;?>
         </select>
    </div>
    <div class="col-md-3"></div>
  <?php endif;//if dropdown?>   
    
    
    <!---***
   *** 8.NUMBER ***
   ****--->     
  <?php if($type == "number")://if textarea?>
  <label class="col-md-3 control-label" for="theme_settings[<?=$name?>]"><?=$label?></label> 
     <div class="col-md-2">    
         <input type="number" value="<?php if ( $options[$name] != '' ){ echo $options[$name];} ?>" min="<?=$numb_min?>" max="<?=$numb_max?>"  name="theme_settings[<?=$name?>]" id="theme_settings[<?=$name?>]" class="input-sm"/>
    </div>
  <div class="col-md-8"> </div>
 
  <?php endif;//if number?>   
    
    
  </div>   
<?php }//ends formfield func ?>