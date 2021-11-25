<div class="section"><h3>Branding</h3>
<table width="100%" class="basic-settings">
	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>

<?php foreach($branding_settings as $branding_setting):?>
<tr valign="top"><th><?=$branding_setting;?></th>
<td><label for="upload_<?=$branding_setting;?>_button">
<input id="upload_<?=$branding_setting;?>" class="inp inp-big" type="text" size="36" name="theme_settings[upload_<?=$branding_setting;?>]" value='<?php echo $options["upload_".$branding_setting]; ?>' />
<input id="upload_<?=$branding_setting;?>_button" type="button" value="Upload Image" class="button button-primary <?=$branding_setting;?>"/>
<br />
<div class="small-note">Enter a URL or upload an image for the <?=$branding_setting;?>.</div>
</label>
</td>
<td valign="top">
        <?php if($options['upload_'.$branding_setting]):?>
        <div class="preview"><img src="<?php echo $options['upload_'.$branding_setting]; ?>"/>
        </div>
        <div class="preview"><span class="small-note"><?=$branding_setting;?> Preview</span>
        </div>
        <?php endif;?>
</td></tr>
<?php endforeach;?>
 
  <tr>
    <th width=""><label for="theme_settings[topbar-text]">Top Bar Text</label></th>
    <td width="">
        <textarea name="theme_settings[topbar-text]"  id="theme_settings[topbar-text]" type="text" class="inp textarea"/><?php if ( $options['topbar-text'] != '' ){ echo $options['topbar-text'];} ?></textarea>
    </td>
    <td>&nbsp;</td>
  </tr>
  
</table>
</div>