<fieldset>
    <legend>Common Settings</legend>
    
    <?php $field = new FormFields(); ?>
    <?php $field->wp_upl('theme_settings[logo]', 'Upload logo', $options['logo'],'logo', $desc, $css_class);?> 
   
   <?php $field->wp_upl('theme_settings[favicon]', 'Upload favicon', $options['favicon'],'favicon', $desc, $css_class);?>
    <?php $field->text('theme_settings[phone]', 'Phone Number', $options['phone'], $req, $desc, $css_class); ?>  
    <?php $field->text('theme_settings[site_email]', 'Site Email', $options['site_email'], $req, $desc, $css_class); ?>  

    <?php $field->textarea('theme_settings[address]', 'Address', $options['address'], $req, $desc, $css_class); ?> 
    <?php $field->textarea('theme_settings[map]', 'Map', $options['map'], $req, $desc, $css_class); ?> 
    
    <hr/>
    
    <?php $field->textarea('theme_settings[site_dsec]', 'Site Dsecription', $options['site_dsec'], $req, $desc, $css_class); ?>    
    <?php $field->textarea('theme_settings[author_desc]', 'Website Author Description', $options['author_desc'], $req, $desc, $css_class); ?>
 <?php $field->multiple('theme_settings[multi]', 'multiples',  $options['multi'], $req, array('a','b','c','d'), $desc, $css_class, '3')?>
 <?php $field->wp_color('theme_settings[theColor]', 'Color', $options['theColor'], $req, $desc, $css_class);?>
 <?php $field->wp_link('theme_settings[pages]', 'pages', $options['pages'], $req, $desc, 'testimonials', $css_class,$key,$val);?>
</fieldset>