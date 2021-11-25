<fieldset class="special">
  <?php $field = new FormFields(); ?>
  <?php global $borders;global  $border_types;global $cols;global $text_align; global $text_transform_arr;?>
  <legend>Common</legend>
  <br>
  <?php $field->wp_color('theme_settings[default_font_color]', 'Default Font Color', $options['default_font_color'],'','');?>
  <?php $field->text('theme_settings[default_container_width]', 'Default Container Width', $options['default_container_width'], $req, 'in px', 'Please don\'t add px', 'input-sm'); ?>
  <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-6">
        <?php $field->wp_color('theme_settings[default_a_color]', 'Link color', $options['default_a_color'],'','');?>
      </div>
      <div class="col-md-6">
        <?php $field->checkbox('theme_settings[default_a_unerline]', 'Underline?', $options['default_a_unerline'], $req, 'yes', ''); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <?php $field->wp_color('theme_settings[default_a_hover_color]', 'Hover color', $options['default_a_hover_color'],'','');?>
      </div>
      <div class="col-md-6">
        <?php $field->checkbox('theme_settings[default_a_hover_unerline]', 'Hover underline?', $options['default_a_hover_unerline'], $req, 'yes', '',''); ?>
      </div>
    </div>
  </div>
  <legend>Buttons</legend>
    <div class="container pt-3 border-bottom">
    
    <div class="row pb-3">
        <div class="col-md-3">BUTTON PRIMARY</div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
    </div>
        <div class="row"><div class="col-md-3">
           <?php $field->text('theme_settings[default_btn_primary_fontsize]', 'Font Size', $options['default_btn_primary_fontsize'],'','','', 'input-sm');?>
        </div></div>
    <div class="row">
        <div class="col-md-3"><?php $field->wp_color('theme_settings[def_btn_primary_bgcolor]', 'Background', $options['def_btn_primary_bgcolor'],'','','');?></div>
        <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_primary_color]', 'Color', $options['default_btn_primary_color'],'','','');?></div>

        
        <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_primary_hover_bgcolor]', 'Hover Bg', $options['default_btn_primary_hover_bgcolor'],'','','');?></div>
        <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_primary_hover_color]', 'Hover Color', $options['default_btn_primary_hover_color'],'','','');?></div>
    </div>
        
    <div class="row">
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_primary_border_top]', 'Border Top', $options['default_btn_primary_border_top'],'',$borders,'', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_primary_border_right]', 'Right', $options['default_btn_primary_border_right'],'',$borders,'', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_primary_border_bottom]', 'Bottom', $options['default_btn_primary_border_bottom'], $req, $borders, '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_primary_border_left]', 'Left', $options['default_btn_primary_border_left'], $req, $borders, '', 'input-sm');?></div>
    </div>
        
    <div class="row">
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_primary_border_type]', 'Border Type', $options['default_btn_primary_border_type'],'',$border_types,'', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_primary_border_color]', 'Border Color', $options['default_btn_primary_border_color'], $req, '', '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_primary_border_hover_color]', 'Hover Border', $options['default_btn_primary_border_hover_color'], $req, '', '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_primary_texttransform]', 'Transform', $options['default_btn_primary_texttransform'], $req, $text_transform_arr, '', 'input-sm');?></div>
    </div>
 
    <div class="row">
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_primary_borderradius_top]', 'Radius Top', $options['default_btn_primary_borderradius_top'],'','','', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_primary_borderradius_right]', 'Right', $options['default_btn_primary_borderradius_right'],'','','', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_primary_borderradius_bottom]', 'Bottom', $options['default_btn_primary_borderradius_bottom'], $req, '', '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_primary_borderradius_left]', 'Left', $options['default_btn_primary_borderradius_left'], $req, '', '', 'input-sm');?></div>
    </div>  
 
    <div class="row">
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_primary_padding_top]', 'Padding Top', $options['default_btn_primary_padding_top'],'','','', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_primary_padding_right]', 'Right', $options['default_btn_primary_padding_right'],'','','', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_primary_padding_bottom]', 'Bottom', $options['default_btn_primary_padding_bottom'], $req, '', '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_primary_padding_left]', 'Left', $options['default_btn_primary_padding_left'], $req, '', '', 'input-sm');?></div>
    </div>  
    </div>   
  <div class="container pt-3 border-bottom">
  <div class="row pb-3">
        <div class="col-md-3">BUTTON SECONDARY</div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
    </div>
        <div class="row"><div class="col-md-3">
           <?php $field->text('theme_settings[default_btn_secondary_fontsize]', 'Font Size', $options['default_btn_secondary_fontsize'],'','','', 'input-sm');?>
        </div></div>
    <div class="row">
        <div class="col-md-3"><?php $field->wp_color('theme_settings[def_btn_secondary_bgcolor]', 'Background', $options['def_btn_secondary_bgcolor'],'','','');?></div>
        <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_secondary_color]', 'Color', $options['default_btn_secondary_color'],'','','');?></div>

        
        <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_secondary_hover_bgcolor]', 'Hover Bg', $options['default_btn_secondary_hover_bgcolor'],'','','');?></div>
        <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_secondary_hover_color]', 'Hover Color', $options['default_btn_secondary_hover_color'],'','','');?></div>
    </div>
        
    <div class="row">
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_secondary_border_top]', 'Border Top', $options['default_btn_secondary_border_top'],'',$borders,'', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_secondary_border_right]', 'Right', $options['default_btn_secondary_border_right'],'',$borders,'', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_secondary_border_bottom]', 'Bottom', $options['default_btn_secondary_border_bottom'], $req, $borders, '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_secondary_border_left]', 'Left', $options['default_btn_secondary_border_left'], $req, $borders, '', 'input-sm');?></div>
    </div>
        
    <div class="row">
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_secondary_border_type]', 'Border Type', $options['default_btn_secondary_border_type'],'',$border_types,'', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_secondary_border_color]', 'Border Color', $options['default_btn_secondary_border_color'], $req, '', '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_secondary_border_hover_color]', 'Hover Border', $options['default_btn_secondary_border_hover_color'], $req, '', '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_secondary_texttransform]', 'Transform', $options['default_btn_secondary_texttransform'], $req, $text_transform_arr, '', 'input-sm');?></div>
    </div>
 
    <div class="row">
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_secondary_borderradius_top]', 'Radius Top', $options['default_btn_secondary_borderradius_top'],'','','', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_secondary_borderradius_right]', 'Right', $options['default_btn_secondary_borderradius_right'],'','','', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_secondary_borderradius_bottom]', 'Bottom', $options['default_btn_secondary_borderradius_bottom'], $req, '', '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_secondary_borderradius_left]', 'Left', $options['default_btn_secondary_borderradius_left'], $req, '', '', 'input-sm');?></div>
    </div>  
 
    <div class="row">
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_secondary_padding_top]', 'Padding Top', $options['default_btn_secondary_padding_top'],'','','', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_secondary_padding_right]', 'Right', $options['default_btn_secondary_padding_right'],'','','', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_secondary_padding_bottom]', 'Bottom', $options['default_btn_secondary_padding_bottom'], $req, '', '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_secondary_padding_left]', 'Left', $options['default_btn_secondary_padding_left'], $req, '', '', 'input-sm');?></div>
    </div>  
  </div>
  <div class="container pt-3 border-bottom">
     <div class="row pb-3">
        <div class="col-md-3">BUTTON TERTIARY</div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
    </div>
        <div class="row"><div class="col-md-3">
           <?php $field->text('theme_settings[default_btn_tertiary_fontsize]', 'Font Size', $options['default_btn_tertiary_fontsize'],'','','', 'input-sm');?>
        </div></div>
    <div class="row">
        <div class="col-md-3"><?php $field->wp_color('theme_settings[def_btn_tertiary_bgcolor]', 'Background', $options['def_btn_tertiary_bgcolor'],'','','');?></div>
        <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_tertiary_color]', 'Color', $options['default_btn_tertiary_color'],'','','');?></div>

        
        <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_tertiary_hover_bgcolor]', 'Hover Bg', $options['default_btn_tertiary_hover_bgcolor'],'','','');?></div>
        <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_tertiary_hover_color]', 'Hover Color', $options['default_btn_tertiary_hover_color'],'','','');?></div>
    </div>
        
    <div class="row">
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_tertiary_border_top]', 'Border Top', $options['default_btn_tertiary_border_top'],'',$borders,'', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_tertiary_border_right]', 'Right', $options['default_btn_tertiary_border_right'],'',$borders,'', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_tertiary_border_bottom]', 'Bottom', $options['default_btn_tertiary_border_bottom'], $req, $borders, '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_tertiary_border_left]', 'Left', $options['default_btn_tertiary_border_left'], $req, $borders, '', 'input-sm');?></div>
    </div>
        
    <div class="row">
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_tertiary_border_type]', 'Border Type', $options['default_btn_tertiary_border_type'],'',$border_types,'', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_tertiary_border_color]', 'Border Color', $options['default_btn_tertiary_border_color'], $req, '', '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->wp_color('theme_settings[default_btn_tertiary_border_hover_color]', 'Hover Border', $options['default_btn_tertiary_border_hover_color'], $req, '', '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->select('theme_settings[default_btn_tertiary_texttransform]', 'Transform', $options['default_btn_tertiary_texttransform'], $req, $text_transform_arr, '', 'input-sm');?></div>
    </div>
 
    <div class="row">
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_tertiary_borderradius_top]', 'Radius Top', $options['default_btn_tertiary_borderradius_top'],'','','', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_tertiary_borderradius_right]', 'Right', $options['default_btn_tertiary_borderradius_right'],'','','', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_tertiary_borderradius_bottom]', 'Bottom', $options['default_btn_tertiary_borderradius_bottom'], $req, '', '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_tertiary_borderradius_left]', 'Left', $options['default_btn_tertiary_borderradius_left'], $req, '', '', 'input-sm');?></div>
    </div>  
 
    <div class="row">
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_tertiary_padding_top]', 'Padding Top', $options['default_btn_tertiary_padding_top'],'','','', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_tertiary_padding_right]', 'Right', $options['default_btn_tertiary_padding_right'],'','','', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_tertiary_padding_bottom]', 'Bottom', $options['default_btn_tertiary_padding_bottom'], $req, '', '', 'input-sm');?></div>
      <div class="col-md-3"><?php $field->text('theme_settings[default_btn_tertiary_padding_left]', 'Left', $options['default_btn_tertiary_padding_left'], $req, '', '', 'input-sm');?></div>
    </div>  
        
    </div>  
  <?php if($options['custom_header'] ==""){?>
  <legend>Header</legend>
  <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-4">
        <?php $field->text('theme_settings[header_container_maxwidth]', 'Container Width', $options['header_container_maxwidth'], $req, 'in px', '', 'input-sm'); ?>
      </div>
      <div class="col-md-4">
        <?php $field->wp_color('theme_settings[default_header_bg_color]', 'Header Bg-Color', $options['default_header_bg_color'],'','');?>
      </div>
              <div class="col-md-4">
        <?php $field->checkbox('theme_settings[sticky_header]', 'Sticky?', $options['sticky_header'], $req, 'yes', ''); ?>
      </div>
    </div>
  </div>
  <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-4">
        <?php $field->wp_color('theme_settings[default_header_a_color]', 'Link color', $options['default_header_a_color'],'','Font color');?>
      </div>
      <div class="col-md-4">
        <?php $field->checkbox('theme_settings[default_header_a_unerline]', 'Underline?', $options['default_header_a_unerline'], $req, 'yes', 'Underline?'); ?>
      </div>

    </div>

    <div class="row">
      <div class="col-md-4">
        <?php $field->wp_color('theme_settings[default_header_a_hover_color]', 'Link Hover', $options['default_header_a_hover_color'],'','Hover Font color');?>
      </div>
      <div class="col-md-4">
        <?php $field->checkbox('theme_settings[default_header_a_hover_unerline]', 'Hover underline?', $options['default_header_a_hover_unerline'], $req, 'yes', 'Hover underline?',''); ?>
      </div>
    </div>
      
  </div>
            <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-6">
        <?php $field->text('theme_settings[default_header_padding_top]', 'Header Padding Top', $options['default_header_padding_top'], $req, 'in px', '', 'input-sm'); ?>
        <?php $field->text('theme_settings[default_header_padding_right]', 'Right', $options['default_header_padding_right'], $req, 'in px', '', 'input-sm'); ?>
      </div>
      <div class="col-md-6">
        <?php $field->text('theme_settings[default_header_padding_bottom]', 'Bottom', $options['default_header_padding_bottom'], $req, 'in px', '', 'input-sm'); ?>
        <?php $field->text('theme_settings[default_header_padding_left]', 'Left', $options['default_header_padding_left'], $req, 'in px', '', 'input-sm'); ?>
      </div>
    </div>
  </div>
     <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-4">
        <?php $field->select('theme_settings[default_header_border_bottom]', 'Border bottom', $options['default_header_border_bottom'], $req, $borders, $desc, 'input-sm')?>
      </div>
      <div class="col-md-4">
        <?php $field->select('theme_settings[default_header_border_bottom_type]', '', $options['default_header_border_bottom_type'], $req, $border_types, $desc, 'input-sm')?>
      </div>
        <div class="col-md-4">
        <?php $field->wp_color('theme_settings[default_header_border_bottom_color]', '', $options['default_header_border_bottom_color'],'','input-sm');?>    
        </div>
    </div>
  </div>
     <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-3">
        <?php $field->select('theme_settings[default_header_box_shadow_top]', 'Box shadow', $options['default_header_box_shadow_top'], $req, $borders, $desc, 'input-sm')?>
      </div>
      <div class="col-md-2">
        <?php $field->select('theme_settings[default_header_box_shadow_right]', '', $options['default_header_box_shadow_right'], $req, $borders, $desc, 'input-sm')?>
      </div>
      <div class="col-md-2">
        <?php $field->select('theme_settings[default_header_box_shadow_bottom]', '', $options['default_header_box_shadow_bottom'], $req, $borders, $desc, 'input-sm')?>
      </div>
      <div class="col-md-2">
        <?php $field->select('theme_settings[default_header_box_shadow_left]', '', $options['default_header_box_shadow_left'], $req, $borders, $desc, 'input-sm')?>
      </div>
        
        <div class="col-md-3">
        <?php $field->wp_color('theme_settings[default_header_box_shadow_color]', '', $options['default_header_box_shadow_color'],'','input-sm');?>    
        </div>
        
    </div>
  </div>
      <?php }?>  <?php if($options['custom_footer'] ==""){?>
  <legend>Footer</legend>
  <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-6">
        <?php $field->wp_color('theme_settings[default_footer_bg_color]', 'Footer Background Color', $options['default_footer_bg_color'],'','');?>
      </div>
      <div class="col-md-6">
        <?php $field->text('theme_settings[footer_container_maxwidth]', 'Footer Container Width', $options['footer_container_maxwidth'], $req, 'in px', '', 'input-sm'); ?>
      </div>
    </div>
  </div>
  <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-6">
        <?php $field->text('theme_settings[default_footer_padding_top]', 'Footer Padding Top', $options['default_footer_padding_top'], $req, 'in px', '', 'input-sm'); ?>
        <?php $field->text('theme_settings[default_footer_padding_right]', 'Right', $options['default_footer_padding_right'], $req, 'in px', '', 'input-sm'); ?>
      </div>
      <div class="col-md-6">
        <?php $field->text('theme_settings[default_footer_padding_bottom]', 'Bottom', $options['default_footer_padding_bottom'], $req, 'in px', '', 'input-sm'); ?>
        <?php $field->text('theme_settings[default_footer_padding_left]', 'Left', $options['default_footer_padding_left'], $req, 'in px', '', 'input-sm'); ?>
      </div>
    </div>
  </div>
  <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-4">
        <?php $field->select('theme_settings[default_footer_border_top_width]', 'Top Border', $options['default_footer_border_top_width'], $req, $borders, $desc, 'input-sm');?>
      </div>
      <div class="col-md-4">
        <?php $field->select('theme_settings[default_footer_border_top_type]', 'Type', $options['default_footer_border_top_type'], $req, $border_types, $desc, 'input-sm');?>
      </div>
      <div class="col-md-4">
        <?php $field->wp_color('theme_settings[default_footer_border_top_color]', '', $options['default_footer_border_top_color'],'','Border top color');?>
      </div>
    </div>
  </div>
  <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-3">
        <?php $field->select('theme_settings[def_footer_col_1]', 'Widget1', $options['def_footer_col_1'], $req, $cols, 'Columns', 'input-sm');?>
      </div>
      <div class="col-md-3">
        <?php $field->select('theme_settings[def_footer_col_2]', 'Widget2', $options['def_footer_col_2'], $req, $cols, 'Columns', 'input-sm');?>
      </div>
      <div class="col-md-3">
        <?php $field->select('theme_settings[def_footer_col_3]', 'Widget3', $options['def_footer_col_3'], $req, $cols, 'Columns', 'input-sm');?>
      </div>
      <div class="col-md-3">
        <?php $field->select('theme_settings[def_footer_col_4]', 'Widget4', $options['def_footer_col_4'], $req, $cols, 'Columns', 'input-sm');?>
      </div>
    </div>
  </div>
  <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-3">
        <?php $field->text('theme_settings[default_footer_column_padding_top]', 'Columns Top Padding', $options['default_footer_column_padding_top'], $req, 'in px', '', 'input-sm'); ?>
      </div>
      <div class="col-md-3">
        <?php $field->text('theme_settings[default_footer_column_padding_right]', 'Right', $options['default_footer_column_padding_right'], $req, 'in px', '', 'input-sm'); ?>
      </div>
      <div class="col-md-3">
        <?php $field->text('theme_settings[default_footer_column_padding_bottom]', 'Bottom', $options['default_footer_column_padding_bottom'], $req, 'in px', '', 'input-sm'); ?>
      </div>
      <div class="col-md-3">
        <?php $field->text('theme_settings[default_footer_column_padding_left]', 'Left', $options['default_footer_column_padding_left'], $req, 'in px', '', 'input-sm'); ?>
      </div>
    </div>
  </div>
  <legend>Bottom Stripe</legend>
  <?php $field->checkbox('theme_settings[enable_bottom_section]', 'Enable bottom section?', $options['enable_bottom_section'], $req, 'yes', $desc, $css_class);?>
  <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-4">
        <?php $field->wp_color('theme_settings[default_bottom_stripe_bgcolor]', 'BgColor', $options['default_bottom_stripe_bgcolor'],'','');?>
      </div>
      <div class="col-md-4">
        <?php $field->text('theme_settings[default_bottom_stripe_padding]', 'Padding', $options['default_bottom_stripe_padding'], $req, 'in px', '', 'input-sm'); ?>
      </div>
    </div>
  </div>
  
  <div class="container pt-3 border-top border-bottom">
  <div class="row">
    <div class="col-md-4">
      <?php $field->wp_color('theme_settings[default_bottom_stripe_color]', 'Text Color', $options['default_bottom_stripe_color'], $req, '', '', 'input-sm'); ?>
    </div>
    <div class="col-md-4"><?php $bottom_stripe_text_align_arr = ['left','center']; ?>
      <?php $field->select('theme_settings[default_bottom_stripe_text_align]', 'Align', $options['default_bottom_stripe_text_align'], $req, $bottom_stripe_text_align_arr, $desc, 'input-sm');?>
    </div>
  </div>
</div>
  
  <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-4">
        <?php $field->text('theme_settings[default_bottom_stripe_border_top_width]', 'BorderTop', $options['default_bottom_stripe_border_top_width'], $req, 'in px', '', 'input-sm'); ?>
      </div>
      <div class="col-md-4">
        <?php $field->select('theme_settings[default_bottom_stripe_border_top_type]', '', $options['default_bottom_stripe_border_top_type'], $req, $border_types, '', 'input-sm');?>
      </div>
      <div class="col-md-4">
        <?php $field->wp_color('theme_settings[default_bottom_stripe_border_top_color]', '', $options['default_bottom_stripe_border_top_color'],'','Border top color');?>
      </div>
    </div>
  </div>
  <div class="container pt-3 border-top border-bottom">
    <div class="row">
      <div class="col-md-12">
        <?php $field->text('theme_settings[default_bottom_stripe_col_paddings]', 'Default Bottom stripe Columns Padding', $options['default_bottom_stripe_col_paddings'], $req, 'in px', '', 'input-sm'); ?>
      </div>
    </div>
  </div><?php }?>
</fieldset>