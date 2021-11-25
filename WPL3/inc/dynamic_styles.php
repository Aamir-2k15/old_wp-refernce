<?php /* get theme options */ $options = get_option('theme_settings');global $options; ?>
<style>
body, html {
color:<?=($options['default_font_color'] !="")?$options['default_font_color']:'inherit';
?>;
}
#default_header #logo{max-width:<?=($options['logo_maxwidth'])?$options['logo_maxwidth']:'auto'?>;max-height:<?=($options['logo_maxheight'])?$options['logo_maxheight']:'auto'?>;}
.container {
max-width: <?=($options['default_container_width'] !="")?$options['default_container_width']:'1140px';
?>;
}
a {
color:<?=($options['default_a_color'] !="")?$options['default_a_color']:'inherit';
?>;
text-decoration:<?=($options['default_a_unerline'] !="")?'underline':'inherit';
?>;
}
a:hover {
color:<?=($options['default_a_hover_color'] =="yes")?'underline':'inherit';
?>;
text-decoration:<?=($options['default_a_hover_unerline'] =="yes")?'underline':'inherit';
?>;
}
/*section{padding-top:;padding-bottom:;}*/

/*p{font-size:;font-weight:;line-height:;}*/

#default_header {
background:<?=($options['default_header_bg_color'] !="")?$options['default_header_bg_color']:'inherit';
?>;
padding:<?=($options['default_header_padding_top'] !="")?$options['default_header_padding_top']:'inherit';
?> <?=($options['default_header_padding_right'] !="")?$options['default_header_padding_right']:'inherit';
?> <?=($options['default_header_padding_bottom'] !="")?$options['default_header_padding_bottom']:'inherit';
?> <?=($options['default_header_padding_left'] !="")?$options['default_header_padding_left']:'inherit';
?>;
border-bottom:<?=($options['default_header_border_bottom'])?$options['default_header_border_bottom']:'none';?> <?=($options['default_header_border_bottom_type'])?$options['default_header_border_bottom_type']:'';?> <?=($options['default_header_border_bottom_color'])?$options['default_header_border_bottom_color']:'';?>;
box-shadow: <?=($options['default_header_box_shadow_top'])?$options['default_header_box_shadow_top']:'';?> <?=($options['default_header_box_shadow_right'])?$options['default_header_box_shadow_right']:'';?> <?=($options['default_header_box_shadow_bottom'])?$options['default_header_box_shadow_bottom']:'';?> <?=($options['default_header_box_shadow_left'])?$options['default_header_box_shadow_left']:'';?> <?=($options['default_header_box_shadow_color'])?$options['default_header_box_shadow_color']:'';?>;
}
#default_header .container {
max-width:<?=$options['header_container_maxwidth']?>;
}
/*header link items, hover, font*/
#default_header a {
color:<?=($options['default_header_a_color'] !="")?$options['default_header_a_color']:'inherit';
?>;
text-decoration:<?=($options['default_header_a_unerline'] !="")?'underline':'inherit';
?>;
}
#default_header a:hover {
color:<?=($options['default_header_a_hover_color'] !="")?$options['default_header_a_hover_color']:'inherit';
?>;
text-decoration:<?=($options['default_header_a_hover_unerline'] !="")?'underline':'inherit';
?>;
}
/*footer container width*/
#default_footer #default_footer_sections {
background:<?=($options['default_footer_bg_color'] !="")?$options['default_footer_bg_color']:'inherit';
?>;
padding:<?=($options['default_footer_padding_top'] !="")?$options['default_footer_padding_top']:'inherit';
?> <?=($options['default_footer_padding_right'] !="")?$options['default_footer_padding_right']:'inherit';
?> <?=($options['default_footer_padding_bottom'] !="")?$options['default_footer_padding_bottom']:'inherit';
?> <?=($options['default_footer_padding_left'] !="")?$options['default_footer_padding_left']:'inherit';
?>;
 border-top:<?=($options['default_footer_border_top_width'] !="")?$options['default_footer_border_top_width']:'inherit';
?> <?=($options['default_footer_border_top_type'] !="")?$options['default_footer_border_top_type']:'inherit';
?> <?=($options['default_footer_border_top_color'] !="")?$options['default_footer_border_top_color']:'inherit';
?>;
}
#default_footer .container {
max-width:<?=$options['footer_container_maxwidth']?>;
}
/*footer cols paddings*/
#default_footer [class*="col-"] {
padding:<?=($options['default_footer_column_padding_top'] !="")?$options['default_footer_column_padding_top']:'inherit';
?> <?=($options['default_footer_column_padding_right'] !="")?$options['default_footer_column_padding_right']:'inherit';
?> <?=($options['default_footer_column_padding_bottom'] !="")?$options['default_footer_column_padding_bottom']:'inherit';
?> <?=($options['default_footer_column_padding_left'] !="")?$options['default_footer_column_padding_left']:'inherit';
?>;
}
/*footer bottom bar paddings*/
#default_footer #default_bottom_stripe {
background:<?=($options['default_bottom_stripe_bgcolor'] !="")?$options['default_bottom_stripe_bgcolor']:'inherit';
?>;
 padding:<?=($options['default_bottom_stripe_padding'] !="")?$options['default_bottom_stripe_padding']:'inherit';
?>;
 border-top:<?=($options['default_bottom_stripe_border_top_width'] !="")?$options['default_bottom_stripe_border_top_width']:'inherit';
?> <?=($options['default_bottom_stripe_border_top_type'] !="")?$options['default_bottom_stripe_border_top_type']:'inherit';
?> <?=($options['default_bottom_stripe_border_top_color'] !="")?$options['default_bottom_stripe_border_top_color']:'inherit';
?>;
}
#default_bottom_stripe .d-flex aside {
padding:<?=($options['default_bottom_stripe_col_paddings'] !="")?$options['default_bottom_stripe_col_paddings']:'inherit';
?>;
}
#default_footer #default_bottom_stripe * {
color:<?=($options['default_bottom_stripe_color'] !="")?$options['default_bottom_stripe_color']:'inherit';
?>;
}

#default_bottom_stripe ul.menu li.menu-item {
	float: left;
	padding: 0 15px;
	line-height: 0;
	margin: 0;
	position: relative;
	top: -2px;
}
/*BUTTONS FOR NOW JUST one size*/
.primary-btn {
font-size:<?=$options['default_btn_primary_fontsize'];
?>;
color:<?=$options['default_btn_primary_color'];?> !important;
background:<?=$options['def_btn_primary_bgcolor'];
?>;
border-top:<?=($options['default_btn_primary_border_top'])?$options['default_btn_primary_border_top']:'0';
?> <?=($options['default_btn_primary_border_top'])?$options['default_btn_primary_border_type']:'none';
?> <?=($options['default_btn_primary_border_top'])?$options['default_btn_primary_border_color']:'';
?>;
border-right:<?=($options['default_btn_primary_border_right'])?$options['default_btn_primary_border_right']:'0';
?> <?=($options['default_btn_primary_border_right'])?$options['default_btn_primary_border_type']:'none';
?> <?=($options['default_btn_primary_border_right'])?$options['default_btn_primary_border_color']:'';
?>;
border-bottom:<?=($options['default_btn_primary_border_bottom'])?$options['default_btn_primary_border_bottom']:'0';
?> <?=($options['default_btn_primary_border_bottom'])?$options['default_btn_primary_border_type']:'none';
?> <?=($options['default_btn_primary_border_bottom'])?$options['default_btn_primary_border_color']:'';
?>;
border-left:<?=($options['default_btn_primary_border_left'])?$options['default_btn_primary_border_left']:'0';
?> <?=($options['default_btn_primary_border_left'])?$options['default_btn_primary_border_type']:'none';
?> <?=($options['default_btn_primary_border_left'])?$options['default_btn_primary_border_color']:'';
?>;
padding-top:<?=$options['default_btn_primary_padding_top']?>;
padding-right:<?=$options['default_btn_primary_padding_right']?>;
padding-bottom:<?=$options['default_btn_primary_padding_bottom']?>;
padding-left:<?=$options['default_btn_primary_padding_left']?>;
border-radius:<?=$options['default_btn_primary_borderradius_top']?>px <?=$options['default_btn_primary_borderradius_right']?>px <?=$options['default_btn_primary_borderradius_bottom']?>px <?=$options['default_btn_primary_borderradius_left']?>px !important;
text-transform:<?=$options['default_btn_primary_texttransform']?>;
}
.primary-btn:hover {
background:<?=$options['default_btn_primary_hover_bgcolor'];?>;
border-color:<?=$options['default_btn_primary_border_hover_color'];?>;
color:<?=$options['default_btn_primary_hover_color'];?> !important;
}
/*SECONDAY BTN*/
.secondary-btn {
font-size:<?=$options['default_btn_secondary_fontsize'];
?>;
color:<?=$options['default_btn_secondary_color'];?> !important;
background:<?=$options['def_btn_secondary_bgcolor'];
?>;
border-top:<?=($options['default_btn_secondary_border_top'])?$options['default_btn_secondary_border_top']:'0';
?> <?=($options['default_btn_secondary_border_top'])?$options['default_btn_secondary_border_type']:'none';
?> <?=($options['default_btn_secondary_border_top'])?$options['default_btn_secondary_border_color']:'';
?>;
border-right:<?=($options['default_btn_secondary_border_right'])?$options['default_btn_secondary_border_right']:'0';
?> <?=($options['default_btn_secondary_border_right'])?$options['default_btn_secondary_border_type']:'none';
?> <?=($options['default_btn_secondary_border_right'])?$options['default_btn_secondary_border_color']:'';
?>;
border-bottom:<?=($options['default_btn_secondary_border_bottom'])?$options['default_btn_secondary_border_bottom']:'0';
?> <?=($options['default_btn_secondary_border_bottom'])?$options['default_btn_secondary_border_type']:'none';
?> <?=($options['default_btn_secondary_border_bottom'])?$options['default_btn_secondary_border_color']:'';
?>;
border-left:<?=($options['default_btn_secondary_border_left'])?$options['default_btn_secondary_border_left']:'0';
?> <?=($options['default_btn_secondary_border_left'])?$options['default_btn_secondary_border_type']:'none';
?> <?=($options['default_btn_secondary_border_left'])?$options['default_btn_secondary_border_color']:'';
?>;
padding-top:<?=$options['default_btn_secondary_padding_top']?>;
padding-right:<?=$options['default_btn_secondary_padding_right']?>;
padding-bottom:<?=$options['default_btn_secondary_padding_bottom']?>;
padding-left:<?=$options['default_btn_secondary_padding_left']?>;
border-radius:<?=$options['default_btn_secondary_borderradius_top']?>px <?=$options['default_btn_secondary_borderradius_right']?>px <?=$options['default_btn_secondary_borderradius_bottom']?>px <?=$options['default_btn_secondary_borderradius_left']?>px !important;
text-transform:<?=$options['default_btn_secondary_texttransform']?>;
}
.secondary-btn:hover {
background:<?=$options['default_btn_secondary_hover_bgcolor'];?>;
border-color:<?=$options['default_btn_secondary_border_hover_color'];?>;
color:<?=$options['default_btn_secondary_hover_color'];?> !important;
}
/*TERTIARY BTN*/
.tertiary-btn {
font-size:<?=$options['default_btn_tertiary_fontsize'];
?>;
color:<?=$options['default_btn_tertiary_color'];?> !important;
background:<?=$options['def_btn_tertiary_bgcolor'];
?>;
border-top:<?=($options['default_btn_tertiary_border_top'])?$options['default_btn_tertiary_border_top']:'0';
?> <?=($options['default_btn_tertiary_border_top'])?$options['default_btn_tertiary_border_type']:'none';
?> <?=($options['default_btn_tertiary_border_top'])?$options['default_btn_tertiary_border_color']:'';
?>;
border-right:<?=($options['default_btn_tertiary_border_right'])?$options['default_btn_tertiary_border_right']:'0';
?> <?=($options['default_btn_tertiary_border_right'])?$options['default_btn_tertiary_border_type']:'none';
?> <?=($options['default_btn_tertiary_border_right'])?$options['default_btn_tertiary_border_color']:'';
?>;
border-bottom:<?=($options['default_btn_tertiary_border_bottom'])?$options['default_btn_tertiary_border_bottom']:'0';
?> <?=($options['default_btn_tertiary_border_bottom'])?$options['default_btn_tertiary_border_type']:'none';
?> <?=($options['default_btn_tertiary_border_bottom'])?$options['default_btn_tertiary_border_color']:'';
?>;
border-left:<?=($options['default_btn_tertiary_border_left'])?$options['default_btn_tertiary_border_left']:'0';
?> <?=($options['default_btn_tertiary_border_left'])?$options['default_btn_tertiary_border_type']:'none';
?> <?=($options['default_btn_tertiary_border_left'])?$options['default_btn_tertiary_border_color']:'';
?>;
padding-top:<?=$options['default_btn_tertiary_padding_top']?>;
padding-right:<?=$options['default_btn_tertiary_padding_right']?>;
padding-bottom:<?=$options['default_btn_tertiary_padding_bottom']?>;
padding-left:<?=$options['default_btn_tertiary_padding_left']?>;
border-radius:<?=$options['default_btn_tertiary_borderradius_top']?>px <?=$options['default_btn_tertiary_borderradius_right']?>px <?=$options['default_btn_tertiary_borderradius_bottom']?>px <?=$options['default_btn_tertiary_borderradius_left']?>px !important;
text-transform:<?=$options['default_btn_tertiary_texttransform']?>;
}
.tertiary-btn:hover {
background:<?=$options['default_btn_tertiary_hover_bgcolor'];?>;
border-color:<?=$options['default_btn_tertiary_border_hover_color'];?>;
color:<?=$options['default_btn_tertiary_hover_color'];?> !important;
}
</style>