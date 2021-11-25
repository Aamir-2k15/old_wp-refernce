<div class="section"><h3>Theme Colors</h3>
<table width="100%" class="basic-settings">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
 <?php for($x = 1; $x <= 4; $x++):?>   
 <tr>
    <th valign="top"><label for="theme_settings[color-<?=$x;?>]">Preset Color <?=$x;?></label></th>
    <td><input type="text" name="theme_settings[color-<?=$x;?>]" id="theme_settings[color-<?=$x;?>]" 
			   value='<?php echo $options["color-".$x.""]; ?>' class="cpa-color-picker" ></td>
    <td>&nbsp;</td>
 </tr>
<?php endfor;?>	
</table>
</div>