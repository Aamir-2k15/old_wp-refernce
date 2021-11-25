<div class="section">
    <!--<h3>Topbar Settings</h3>-->
<table width="100%" class="basic-settings">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  
  <tr>
    <th width=""><label for="theme_settings[topbar-text]">Top Bar Text</label></th>
    <td width="">
        <textarea name="theme_settings[topbar-text]"  id="theme_settings[topbar-text]" type="text" class="inp textarea"/><?php if ( $options['topbar-text'] != '' ){ echo $options['topbar-text'];} ?></textarea>
    </td>
    <td>&nbsp;</td>
  </tr>
  
</table>
<?php // $menus = get_registered_nav_menus();
//
//foreach ( $menus as $location => $description ) {
//
//	echo $location . ': ' . $description . '<br />';
//} ?></div>
<?php /*?><div class="section"><h3>Header Section 3 Settings</h3>
<table width="100%" class="basic-settings">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
 <?php 
 $hs3_items = hs3_items();
 foreach($hs3_items as $hs3_item):?> 
  <tr>
    <th width="30%"><label for="theme_settings[<?=$hs3_item;?>]"><?=$hs3_item;?> Section</label></th>
    
    <td><label>
<input name="theme_settings[<?=$hs3_item;?>]"  id="theme_settings[<?=$hs3_item;?>]" type="checkbox" value="responsive" <?=(isset($options[$hs3_item])?"checked='checked'":""); ?> />
    Enable</label></td>
  
  </tr>
 <?php endforeach;?>  
</table></div><?php */?>