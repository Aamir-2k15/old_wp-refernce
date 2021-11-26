<?php /* get theme options */ $options = get_option('theme_settings');global $options; ?><style>
body,html{color:<?=($options['default_font_color'] !="")?$options['default_font_color']:'inherit';?>;}

.container{max-width: <?=($options['default_container_width'] !="")?$options['default_container_width']:'1140';?>px;}
a{color:<?=($options['default_a_color'] !="")?$options['default_a_color']:'inherit';?>;text-decoration:<?=($options['default_a_unerline'] !="")?'underline':'inherit';?>;}
a:hover{color:<?=($options['default_a_hover_color'] =="yes")?'underline':'inherit';?>;text-decoration:<?=($options['default_a_hover_unerline'] =="yes")?'underline':'inherit';?>;}

/*section{padding-top:;padding-bottom:;}*/

/*p{font-size:;font-weight:;line-height:;}*/

#default_header{background:<?=($options['default_header_bg_color'] !="")?$options['default_header_bg_color']:'inherit';?>;padding:;border-bottom:;box-shadow: 1px 1px 1px 4px #EEE;}
#default_header .container{max-width:<?=$options['header_container_maxwidth']?>;}
/*header topbar container width*/
/*header topbar bg width*/

/*header link items, hover, font*/
#default_header a{color:<?=($options['default_header_a_color'] !="")?$options['default_header_a_color']:'inherit';?>;text-decoration:<?=($options['default_header_a_unerline'] !="")?'underline':'inherit';?>;}
#default_header a:hover{color:<?=($options['default_header_a_hover_color'] !="")?$options['default_header_a_hover_color']:'inherit';?>;text-decoration:<?=($options['default_header_a_hover_unerline'] !="")?'underline':'inherit';?>;}
/*footer container width*/
#default_footer #default_footer_sections{background:<?=($options['default_footer_bg_color'] !="")?$options['default_footer_bg_color']:'inherit';?>;
                padding:<?=($options['default_footer_padding'] !="")?$options['default_footer_padding']:'inherit';?>;
                border-top:<?=($options['default_footer_border_top_width'] !="")?$options['default_footer_border_top_width']:'inherit';?> <?=($options['default_footer_border_top_type'] !="")?$options['default_footer_border_top_type']:'inherit';?> <?=($options['default_footer_border_top_color'] !="")?$options['default_footer_border_top_color']:'inherit';?>;
                }
#default_footer .container{max-width:<?=$options['footer_container_maxwidth']?>;}
/*footer cols paddings*/
#default_footer  [class*="col-"]{padding:<?=($options['default_footer_columns_padding'] !="")?$options['default_footer_columns_padding']:'inherit';?>;}
/*footer bottom bar paddings*/
#default_footer #default_bottom_stripe{background:<?=($options['default_bottom_stripe_bgcolor'] !="")?$options['default_bottom_stripe_bgcolor']:'inherit';?>;
                padding:<?=($options['default_bottom_stripe_padding'] !="")?$options['default_bottom_stripe_padding']:'inherit';?>;
                border-top:<?=($options['default_bottom_stripe_border_top_width'] !="")?$options['default_bottom_stripe_border_top_width']:'inherit';?> <?=($options['default_bottom_stripe_border_top_type'] !="")?$options['default_bottom_stripe_border_top_type']:'inherit';?> <?=($options['default_bottom_stripe_border_top_color'] !="")?$options['default_bottom_stripe_border_top_color']:'inherit';?>;
                }
#default_footer #default_bottom_stripe>.d-flex>div{padding:<?=($options['default_bottom_stripe_border_col_paddings'] !="")?$options['default_bottom_stripe_border_col_paddings']:'inherit';?>;}                
                
#default_footer #default_bottom_stripe *{color:<?=($options['default_bottom_stripe_color'] !="")?$options['default_bottom_stripe_color']:'inherit';?>;}

<?php /*POSTPONDING BELOW FOR VERSION 2 ?>
.btn{border-radius:;}
 /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
h1{font-size:;font-weight:;color:;}
h2{font-size:;font-weight:;color:;}
h3{font-size:;font-weight:;color:;}
h4{font-size:;font-weight:;color:;}
h5{font-size:;font-weight:;color:;}
 .btn_primary{background:;font-size:;font-weight:;color:;padding:;}//hover
 .btn_secondry{background:;font-size:;font-weight:;color:;padding:;}
 .btn_tertiary{background:;font-size:;font-weight:;color:;padding:;}
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {...}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {...}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {...}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {...} 

<?php */ ?>
</style>
