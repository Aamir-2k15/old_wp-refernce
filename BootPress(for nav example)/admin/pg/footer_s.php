<fieldset>
  <legend>Footer</legend>
  <div class="form-group row">
    <label class="col-md-2 control-label" for="theme_settings[subscribe]">Subscribe section</label>
    <div class="col-md-8">     
<label><input class="form-check" name="theme_settings[subscribe]"  id="theme_settings[subscribe]" type="checkbox" value="subscribe" <?=(isset($options['subscribe'])?"checked='checked'":""); ?> />
      Enable </label>
    </div>
    <div class="col-md-2">
      
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-md-2 control-label" for="theme_settings[copyright-text]">Copyright Text</label>
    <div class="col-md-8"><textarea name="theme_settings[copyright-text]"  id="theme_settings[copyright-text]" type="text" class="inp textarea form-control"/><?php echo $options['copyright-text']; ?></textarea>
    </div><div class="col-md-2">
      
    </div>
    
  </div>
 </fieldset>