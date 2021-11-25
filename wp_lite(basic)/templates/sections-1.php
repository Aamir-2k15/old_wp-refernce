<?php
/* Template Name:Sections V-1
 *//* Template Post Type: page */?>
<?php get_header(); ?>
<?php global $options;global $social_arr; ?>
<?php if (have_posts()):while (have_posts()):the_post(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
<!--COMMON SECTIONS SETTINGS-->
<?php $cs_1 = get_field('common_section_1');?>
<?php $cs_2 = get_field('common_section_2');?>
<?php $cs_3 = get_field('common_section_3');?>

<div id="<?=$slug = basename(get_permalink());?>" class="full-width sections_v1">
  <?php $feat_banner_section = get_field('feat_banner_section');?>
  <?php if($feat_banner_section['enable'] =='true'){?>
  <!--SECTION: feat-banner-->
  <section id="feat-banner" style="background:url('<?php echo $image[0]; ?>') center center / cover no-repeat;">
    <div class="container">
      <div class="row mr-0">
        <div class="col-md-12 ml-auto mr-auto">
          <?=($feat_banner_section['description'] !="")?$feat_banner_section['description']:'';?>
        </div>
      </div>
    </div>
  </section>
  <?php }?>

  <?php $section_1 = get_field('section_1'); if($section_1['enable'] =='true'){?>
  <section class="full-width" id="section_1" style="<?=($section_1['bg_color']!="")?'background-color:'.$section_1['bg_color'].';':'';?><?php if($section_1['background_image'] !=""){ ?>background:url('<?=($section_1['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container">
      <div class="row">
        <div class="col-md-<?=($section_1['column_1']['col_width']);?>" style="<?=($section_1['column_1']['background']!="")?'background:url('.$section_1['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_1']['background_color']!="")?'background-color:'.$section_1['column_1']['background_color']:'';?>;">
          <?=($section_1['column_1']['content']!="")?apply_filters('the_content', $section_1['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_1['columns'] > 1){?>
        <div class="col-md-<?=($section_1['column_2']['col_width']);?>" style="<?=($section_1['column_2']['background']!="")?'background:url('.$section_1['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_2']['background_color']!="")?'background-color:'.$section_1['column_2']['background_color']:'';?>;">
          <?=($section_1['column_2']['content']!="")?apply_filters('the_content', $section_1['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_1['columns'] > 2){?>
        <div class="col-md-<?=($section_1['column_3']['col_width']);?>" style="<?=($section_1['column_3']['background']!="")?'background:url('.$section_1['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_3']['background_color']!="")?'background-color:'.$section_1['column_3']['background_color']:'';?>;">
          <?=($section_1['column_3']['content']!="")?apply_filters('the_content', $section_1['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_1['columns'] > 3){?>
        <div class="col-md-<?=($section_1['column_4']['col_width']);?>" style="<?=($section_1['column_4']['background']!="")?'background:url('.$section_1['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_4']['background_color']!="")?'background-color:'.$section_1['column_4']['background_color']:'';?>;">
          <?=($section_1['column_4']['content']!="")?apply_filters('the_content', $section_1['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_1['columns'] > 4){?>
        <div class="col-md-<?=($section_1['column_5']['col_width']);?>" style="<?=($section_1['column_5']['background']!="")?'background:url('.$section_1['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_5']['background_color']!="")?'background-color:'.$section_1['column_5']['background_color']:'';?>;">
          <?=($section_1['column_5']['content']!="")?apply_filters('the_content', $section_1['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_1['columns'] > 5){?>
        <div class="col-md-<?=($section_1['column_6']['col_width']);?>" style="<?=($section_1['column_6']['background']!="")?'background:url('.$section_1['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_6']['background_color']!="")?'background-color:'.$section_1['column_6']['background_color']:'';?>;">
          <?=($section_1['column_6']['content']!="")?apply_filters('the_content', $section_1['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
      </div>
    </div>
  </section>
  <?php }//ends section1?>

    <?php if($cs_1['enable']){if($cs_1['position'] == 2){    include_once('common_section_1.php');}}?>
  <?php if($cs_2['enable']){if($cs_2['position'] == 2){    include_once('common_section_2.php');}}?>
  <?php if($cs_3['enable']){if($cs_3['position'] == 2){    include_once('common_section_3.php');}}?>  
  
   <?php $section_2 = get_field('section_2'); if($section_2['enable'] =='true'){?>
  <section class="full-width" id="section_2" style="<?=($section_2['bg_color']!="")?'background-color:'.$section_2['bg_color'].';':'';?><?php if($section_2['background_image'] !=""){ ?>background:url('<?=($section_2['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container">
      <div class="row">
        <div class="col-md-<?=($section_2['column_1']['col_width']);?>" style="<?=($section_2['column_1']['background']!="")?'background:url('.$section_2['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_1']['background_color']!="")?'background-color:'.$section_2['column_1']['background_color']:'';?>;">
          <?=($section_2['column_1']['content']!="")?apply_filters('the_content', $section_2['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_2['columns'] > 1){?>
        <div class="col-md-<?=($section_2['column_2']['col_width']);?>" style="<?=($section_2['column_2']['background']!="")?'background:url('.$section_2['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_2']['background_color']!="")?'background-color:'.$section_2['column_2']['background_color']:'';?>;">
          <?=($section_2['column_2']['content']!="")?apply_filters('the_content', $section_2['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_2['columns'] > 2){?>
        <div class="col-md-<?=($section_2['column_3']['col_width']);?>" style="<?=($section_2['column_3']['background']!="")?'background:url('.$section_2['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_3']['background_color']!="")?'background-color:'.$section_2['column_3']['background_color']:'';?>;">
          <?=($section_2['column_3']['content']!="")?apply_filters('the_content', $section_2['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_2['columns'] > 3){?>
        <div class="col-md-<?=($section_2['column_4']['col_width']);?>" style="<?=($section_2['column_4']['background']!="")?'background:url('.$section_2['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_4']['background_color']!="")?'background-color:'.$section_2['column_4']['background_color']:'';?>;">
          <?=($section_2['column_4']['content']!="")?apply_filters('the_content', $section_2['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_2['columns'] > 4){?>
        <div class="col-md-<?=($section_2['column_5']['col_width']);?>" style="<?=($section_2['column_5']['background']!="")?'background:url('.$section_2['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_5']['background_color']!="")?'background-color:'.$section_2['column_5']['background_color']:'';?>;">
          <?=($section_2['column_5']['content']!="")?apply_filters('the_content', $section_2['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_2['columns'] > 5){?>
        <div class="col-md-<?=($section_2['column_6']['col_width']);?>" style="<?=($section_2['column_6']['background']!="")?'background:url('.$section_2['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_6']['background_color']!="")?'background-color:'.$section_2['column_6']['background_color']:'';?>;">
          <?=($section_2['column_6']['content']!="")?apply_filters('the_content', $section_2['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
      </div>
    </div>
  </section>
  <?php }//ends section_2?>
 
    <?php if($cs_1['enable']){if($cs_1['position'] == 3){    include_once('common_section_1.php');}}?>
  <?php if($cs_2['enable']){if($cs_2['position'] == 3){    include_once('common_section_2.php');}}?>
  <?php if($cs_3['enable']){if($cs_3['position'] == 3){    include_once('common_section_3.php');}}?>
  
  
 <?php $section_3 = get_field('section_3'); if($section_3['enable'] =='true'){?>
  <section class="full-width" id="section_3" style="<?=($section_3['bg_color']!="")?'background-color:'.$section_3['bg_color'].';':'';?><?php if($section_3['background_image'] !=""){ ?>background:url('<?=($section_3['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container">
      <div class="row">
        <div class="col-md-<?=($section_3['column_1']['col_width']);?>" style="<?=($section_3['column_1']['background']!="")?'background:url('.$section_3['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_1']['background_color']!="")?'background-color:'.$section_3['column_1']['background_color']:'';?>;">
          <?=($section_3['column_1']['content']!="")?apply_filters('the_content', $section_3['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_3['columns'] > 1){?>
        <div class="col-md-<?=($section_3['column_2']['col_width']);?>" style="<?=($section_3['column_2']['background']!="")?'background:url('.$section_3['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_2']['background_color']!="")?'background-color:'.$section_3['column_2']['background_color']:'';?>;">
          <?=($section_3['column_2']['content']!="")?apply_filters('the_content', $section_3['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_3['columns'] > 2){?>
        <div class="col-md-<?=($section_3['column_3']['col_width']);?>" style="<?=($section_3['column_3']['background']!="")?'background:url('.$section_3['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_3']['background_color']!="")?'background-color:'.$section_3['column_3']['background_color']:'';?>;">
          <?=($section_3['column_3']['content']!="")?apply_filters('the_content', $section_3['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_3['columns'] > 3){?>
        <div class="col-md-<?=($section_3['column_4']['col_width']);?>" style="<?=($section_3['column_4']['background']!="")?'background:url('.$section_3['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_4']['background_color']!="")?'background-color:'.$section_3['column_4']['background_color']:'';?>;">
          <?=($section_3['column_4']['content']!="")?apply_filters('the_content', $section_3['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_3['columns'] > 4){?>
        <div class="col-md-<?=($section_3['column_5']['col_width']);?>" style="<?=($section_3['column_5']['background']!="")?'background:url('.$section_3['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_5']['background_color']!="")?'background-color:'.$section_3['column_5']['background_color']:'';?>;">
          <?=($section_3['column_5']['content']!="")?apply_filters('the_content', $section_3['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_3['columns'] > 5){?>
        <div class="col-md-<?=($section_3['column_6']['col_width']);?>" style="<?=($section_3['column_6']['background']!="")?'background:url('.$section_3['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_6']['background_color']!="")?'background-color:'.$section_3['column_6']['background_color']:'';?>;">
          <?=($section_3['column_6']['content']!="")?apply_filters('the_content', $section_3['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
      </div>
    </div>
  </section>
  <?php }//ends section_3?>
  
<?php if($cs_1['enable']){if($cs_1['position'] == 4){    include_once('common_section_1.php');}}?>
<?php if($cs_2['enable']){if($cs_2['position'] == 4){    include_once('common_section_2.php');}}?>
<?php if($cs_3['enable']){if($cs_3['position'] == 4){    include_once('common_section_3.php');}}?>
  
  
   <?php $section_4 = get_field('section_4'); if($section_4['enable'] =='true'){?>
  <section class="full-width" id="section_4" style="<?=($section_4['bg_color']!="")?'background-color:'.$section_4['bg_color'].';':'';?><?php if($section_4['background_image'] !=""){ ?>background:url('<?=($section_4['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container">
      <div class="row">
        <div class="col-md-<?=($section_4['column_1']['col_width']);?>" style="<?=($section_4['column_1']['background']!="")?'background:url('.$section_4['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_1']['background_color']!="")?'background-color:'.$section_4['column_1']['background_color']:'';?>;">
          <?=($section_4['column_1']['content']!="")?apply_filters('the_content', $section_4['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_4['columns'] > 1){?>
        <div class="col-md-<?=($section_4['column_2']['col_width']);?>" style="<?=($section_4['column_2']['background']!="")?'background:url('.$section_4['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_2']['background_color']!="")?'background-color:'.$section_4['column_2']['background_color']:'';?>;">
          <?=($section_4['column_2']['content']!="")?apply_filters('the_content', $section_4['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_4['columns'] > 2){?>
        <div class="col-md-<?=($section_4['column_3']['col_width']);?>" style="<?=($section_4['column_3']['background']!="")?'background:url('.$section_4['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_3']['background_color']!="")?'background-color:'.$section_4['column_3']['background_color']:'';?>;">
          <?=($section_4['column_3']['content']!="")?apply_filters('the_content', $section_4['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_4['columns'] > 3){?>
        <div class="col-md-<?=($section_4['column_4']['col_width']);?>" style="<?=($section_4['column_4']['background']!="")?'background:url('.$section_4['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_4']['background_color']!="")?'background-color:'.$section_4['column_4']['background_color']:'';?>;">
          <?=($section_4['column_4']['content']!="")?apply_filters('the_content', $section_4['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_4['columns'] > 4){?>
        <div class="col-md-<?=($section_4['column_5']['col_width']);?>" style="<?=($section_4['column_5']['background']!="")?'background:url('.$section_4['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_5']['background_color']!="")?'background-color:'.$section_4['column_5']['background_color']:'';?>;">
          <?=($section_4['column_5']['content']!="")?apply_filters('the_content', $section_4['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_4['columns'] > 5){?>
        <div class="col-md-<?=($section_4['column_6']['col_width']);?>" style="<?=($section_4['column_6']['background']!="")?'background:url('.$section_4['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_6']['background_color']!="")?'background-color:'.$section_4['column_6']['background_color']:'';?>;">
          <?=($section_4['column_6']['content']!="")?apply_filters('the_content', $section_4['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
      </div>
    </div>
  </section>
  <?php }//ends section_4?>
  
  <?php if($cs_1['enable']){if($cs_1['position'] == 5){    include_once('common_section_1.php');}}?>
<?php if($cs_2['enable']){if($cs_2['position'] == 5){    include_once('common_section_2.php');}}?>
<?php if($cs_3['enable']){if($cs_3['position'] == 5){    include_once('common_section_3.php');}}?>
  
   <?php $section_5 = get_field('section_5'); if($section_5['enable'] =='true'){?>
  <section class="full-width" id="section_5" style="<?=($section_5['bg_color']!="")?'background-color:'.$section_5['bg_color'].';':'';?><?php if($section_5['background_image'] !=""){ ?>background:url('<?=($section_5['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container">
      <div class="row">
        <div class="col-md-<?=($section_5['column_1']['col_width']);?>" style="<?=($section_5['column_1']['background']!="")?'background:url('.$section_5['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_1']['background_color']!="")?'background-color:'.$section_5['column_1']['background_color']:'';?>;">
          <?=($section_5['column_1']['content']!="")?apply_filters('the_content', $section_5['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_5['columns'] > 1){?>
        <div class="col-md-<?=($section_5['column_2']['col_width']);?>" style="<?=($section_5['column_2']['background']!="")?'background:url('.$section_5['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_2']['background_color']!="")?'background-color:'.$section_5['column_2']['background_color']:'';?>;">
          <?=($section_5['column_2']['content']!="")?apply_filters('the_content', $section_5['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_5['columns'] > 2){?>
        <div class="col-md-<?=($section_5['column_3']['col_width']);?>" style="<?=($section_5['column_3']['background']!="")?'background:url('.$section_5['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_3']['background_color']!="")?'background-color:'.$section_5['column_3']['background_color']:'';?>;">
          <?=($section_5['column_3']['content']!="")?apply_filters('the_content', $section_5['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_5['columns'] > 3){?>
        <div class="col-md-<?=($section_5['column_4']['col_width']);?>" style="<?=($section_5['column_4']['background']!="")?'background:url('.$section_5['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_4']['background_color']!="")?'background-color:'.$section_5['column_4']['background_color']:'';?>;">
          <?=($section_5['column_4']['content']!="")?apply_filters('the_content', $section_5['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_5['columns'] > 4){?>
        <div class="col-md-<?=($section_5['column_5']['col_width']);?>" style="<?=($section_5['column_5']['background']!="")?'background:url('.$section_5['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_5']['background_color']!="")?'background-color:'.$section_5['column_5']['background_color']:'';?>;">
          <?=($section_5['column_5']['content']!="")?apply_filters('the_content', $section_5['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_5['columns'] > 5){?>
        <div class="col-md-<?=($section_5['column_6']['col_width']);?>" style="<?=($section_5['column_6']['background']!="")?'background:url('.$section_5['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_6']['background_color']!="")?'background-color:'.$section_5['column_6']['background_color']:'';?>;">
          <?=($section_5['column_6']['content']!="")?apply_filters('the_content', $section_5['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
      </div>
    </div>
  </section>
  <?php }//ends section_5?>
  
<?php if($cs_1['enable']){if($cs_1['position'] == 6){    include_once('common_section_1.php');}}?>
<?php if($cs_2['enable']){if($cs_2['position'] == 6){    include_once('common_section_2.php');}}?>
<?php if($cs_3['enable']){if($cs_3['position'] == 6){    include_once('common_section_3.php');}}?>
  
   <?php $section_6 = get_field('section_6'); if($section_6['enable'] =='true'){?>
  <section class="full-width" id="section_6" style="<?=($section_6['bg_color']!="")?'background-color:'.$section_6['bg_color'].';':'';?><?php if($section_6['background_image'] !=""){ ?>background:url('<?=($section_6['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container">
      <div class="row">
        <div class="col-md-<?=($section_6['column_1']['col_width']);?>" style="<?=($section_6['column_1']['background']!="")?'background:url('.$section_6['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_1']['background_color']!="")?'background-color:'.$section_6['column_1']['background_color']:'';?>;">
          <?=($section_6['column_1']['content']!="")?apply_filters('the_content', $section_6['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_6['columns'] > 1){?>
        <div class="col-md-<?=($section_6['column_2']['col_width']);?>" style="<?=($section_6['column_2']['background']!="")?'background:url('.$section_6['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_2']['background_color']!="")?'background-color:'.$section_6['column_2']['background_color']:'';?>;">
          <?=($section_6['column_2']['content']!="")?apply_filters('the_content', $section_6['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_6['columns'] > 2){?>
        <div class="col-md-<?=($section_6['column_3']['col_width']);?>" style="<?=($section_6['column_3']['background']!="")?'background:url('.$section_6['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_3']['background_color']!="")?'background-color:'.$section_6['column_3']['background_color']:'';?>;">
          <?=($section_6['column_3']['content']!="")?apply_filters('the_content', $section_6['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_6['columns'] > 3){?>
        <div class="col-md-<?=($section_6['column_4']['col_width']);?>" style="<?=($section_6['column_4']['background']!="")?'background:url('.$section_6['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_4']['background_color']!="")?'background-color:'.$section_6['column_4']['background_color']:'';?>;">
          <?=($section_6['column_4']['content']!="")?apply_filters('the_content', $section_6['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_6['columns'] > 4){?>
        <div class="col-md-<?=($section_6['column_5']['col_width']);?>" style="<?=($section_6['column_5']['background']!="")?'background:url('.$section_6['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_5']['background_color']!="")?'background-color:'.$section_6['column_5']['background_color']:'';?>;">
          <?=($section_6['column_5']['content']!="")?apply_filters('the_content', $section_6['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_6['columns'] > 5){?>
        <div class="col-md-<?=($section_6['column_6']['col_width']);?>" style="<?=($section_6['column_6']['background']!="")?'background:url('.$section_6['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_6']['background_color']!="")?'background-color:'.$section_6['column_6']['background_color']:'';?>;">
          <?=($section_6['column_6']['content']!="")?apply_filters('the_content', $section_6['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
      </div>
    </div>
  </section>
  <?php }//ends section_6?>
  
<?php if($cs_1['enable']){if($cs_1['position'] == 7){    include_once('common_section_1.php');}}?>
<?php if($cs_2['enable']){if($cs_2['position'] == 7){    include_once('common_section_2.php');}}?>
<?php if($cs_3['enable']){if($cs_3['position'] == 7){    include_once('common_section_3.php');}}?>
  
   <?php $section_7 = get_field('section_7'); if($section_7['enable'] =='true'){?>
  <section class="full-width" id="section_7" style="<?=($section_7['bg_color']!="")?'background-color:'.$section_7['bg_color'].';':'';?><?php if($section_7['background_image'] !=""){ ?>background:url('<?=($section_7['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container">
      <div class="row">
        <div class="col-md-<?=($section_7['column_1']['col_width']);?>" style="<?=($section_7['column_1']['background']!="")?'background:url('.$section_7['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_1']['background_color']!="")?'background-color:'.$section_7['column_1']['background_color']:'';?>;">
          <?=($section_7['column_1']['content']!="")?apply_filters('the_content', $section_7['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_7['columns'] > 1){?>
        <div class="col-md-<?=($section_7['column_2']['col_width']);?>" style="<?=($section_7['column_2']['background']!="")?'background:url('.$section_7['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_2']['background_color']!="")?'background-color:'.$section_7['column_2']['background_color']:'';?>;">
          <?=($section_7['column_2']['content']!="")?apply_filters('the_content', $section_7['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_7['columns'] > 2){?>
        <div class="col-md-<?=($section_7['column_3']['col_width']);?>" style="<?=($section_7['column_3']['background']!="")?'background:url('.$section_7['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_3']['background_color']!="")?'background-color:'.$section_7['column_3']['background_color']:'';?>;">
          <?=($section_7['column_3']['content']!="")?apply_filters('the_content', $section_7['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_7['columns'] > 3){?>
        <div class="col-md-<?=($section_7['column_4']['col_width']);?>" style="<?=($section_7['column_4']['background']!="")?'background:url('.$section_7['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_4']['background_color']!="")?'background-color:'.$section_7['column_4']['background_color']:'';?>;">
          <?=($section_7['column_4']['content']!="")?apply_filters('the_content', $section_7['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_7['columns'] > 4){?>
        <div class="col-md-<?=($section_7['column_5']['col_width']);?>" style="<?=($section_7['column_5']['background']!="")?'background:url('.$section_7['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_5']['background_color']!="")?'background-color:'.$section_7['column_5']['background_color']:'';?>;">
          <?=($section_7['column_5']['content']!="")?apply_filters('the_content', $section_7['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_7['columns'] > 5){?>
        <div class="col-md-<?=($section_7['column_6']['col_width']);?>" style="<?=($section_7['column_6']['background']!="")?'background:url('.$section_7['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_6']['background_color']!="")?'background-color:'.$section_7['column_6']['background_color']:'';?>;">
          <?=($section_7['column_6']['content']!="")?apply_filters('the_content', $section_7['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
      </div>
    </div>
  </section>
  <?php }//ends section_7?>
  
<?php if($cs_1['enable']){if($cs_1['position'] == 8){    include_once('common_section_1.php');}}?>
<?php if($cs_2['enable']){if($cs_2['position'] == 8){    include_once('common_section_2.php');}}?>
<?php if($cs_3['enable']){if($cs_3['position'] == 8){    include_once('common_section_3.php');}}?>
  
   <?php $section_8 = get_field('section_8'); if($section_8['enable'] =='true'){?>
  <section class="full-width" id="section_8" style="<?=($section_8['bg_color']!="")?'background-color:'.$section_8['bg_color'].';':'';?><?php if($section_8['background_image'] !=""){ ?>background:url('<?=($section_8['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container">
      <div class="row">
        <div class="col-md-<?=($section_8['column_1']['col_width']);?>" style="<?=($section_8['column_1']['background']!="")?'background:url('.$section_8['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_1']['background_color']!="")?'background-color:'.$section_8['column_1']['background_color']:'';?>;">
          <?=($section_8['column_1']['content']!="")?apply_filters('the_content', $section_8['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_8['columns'] > 1){?>
        <div class="col-md-<?=($section_8['column_2']['col_width']);?>" style="<?=($section_8['column_2']['background']!="")?'background:url('.$section_8['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_2']['background_color']!="")?'background-color:'.$section_8['column_2']['background_color']:'';?>;">
          <?=($section_8['column_2']['content']!="")?apply_filters('the_content', $section_8['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_8['columns'] > 2){?>
        <div class="col-md-<?=($section_8['column_3']['col_width']);?>" style="<?=($section_8['column_3']['background']!="")?'background:url('.$section_8['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_3']['background_color']!="")?'background-color:'.$section_8['column_3']['background_color']:'';?>;">
          <?=($section_8['column_3']['content']!="")?apply_filters('the_content', $section_8['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_8['columns'] > 3){?>
        <div class="col-md-<?=($section_8['column_4']['col_width']);?>" style="<?=($section_8['column_4']['background']!="")?'background:url('.$section_8['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_4']['background_color']!="")?'background-color:'.$section_8['column_4']['background_color']:'';?>;">
          <?=($section_8['column_4']['content']!="")?apply_filters('the_content', $section_8['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_8['columns'] > 4){?>
        <div class="col-md-<?=($section_8['column_5']['col_width']);?>" style="<?=($section_8['column_5']['background']!="")?'background:url('.$section_8['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_5']['background_color']!="")?'background-color:'.$section_8['column_5']['background_color']:'';?>;">
          <?=($section_8['column_5']['content']!="")?apply_filters('the_content', $section_8['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_8['columns'] > 5){?>
        <div class="col-md-<?=($section_8['column_6']['col_width']);?>" style="<?=($section_8['column_6']['background']!="")?'background:url('.$section_8['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_6']['background_color']!="")?'background-color:'.$section_8['column_6']['background_color']:'';?>;">
          <?=($section_8['column_6']['content']!="")?apply_filters('the_content', $section_8['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
      </div>
    </div>
  </section>
  <?php }//ends section_8?>
 
<?php if($cs_1['enable']){if($cs_1['position'] == 9){    include_once('common_section_1.php');}}?>
<?php if($cs_2['enable']){if($cs_2['position'] == 9){    include_once('common_section_2.php');}}?>
<?php if($cs_3['enable']){if($cs_3['position'] == 9){    include_once('common_section_3.php');}}?>
  
   <?php $section_9 = get_field('section_9'); if($section_9['enable'] =='true'){?>
  <section class="full-width" id="section_9" style="<?=($section_9['bg_color']!="")?'background-color:'.$section_9['bg_color'].';':'';?><?php if($section_9['background_image'] !=""){ ?>background:url('<?=($section_9['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container">
      <div class="row">
        <div class="col-md-<?=($section_9['column_1']['col_width']);?>" style="<?=($section_9['column_1']['background']!="")?'background:url('.$section_9['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_1']['background_color']!="")?'background-color:'.$section_9['column_1']['background_color']:'';?>;">
          <?=($section_9['column_1']['content']!="")?apply_filters('the_content', $section_9['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_9['columns'] > 1){?>
        <div class="col-md-<?=($section_9['column_2']['col_width']);?>" style="<?=($section_9['column_2']['background']!="")?'background:url('.$section_9['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_2']['background_color']!="")?'background-color:'.$section_9['column_2']['background_color']:'';?>;">
          <?=($section_9['column_2']['content']!="")?apply_filters('the_content', $section_9['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_9['columns'] > 2){?>
        <div class="col-md-<?=($section_9['column_3']['col_width']);?>" style="<?=($section_9['column_3']['background']!="")?'background:url('.$section_9['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_3']['background_color']!="")?'background-color:'.$section_9['column_3']['background_color']:'';?>;">
          <?=($section_9['column_3']['content']!="")?apply_filters('the_content', $section_9['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_9['columns'] > 3){?>
        <div class="col-md-<?=($section_9['column_4']['col_width']);?>" style="<?=($section_9['column_4']['background']!="")?'background:url('.$section_9['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_4']['background_color']!="")?'background-color:'.$section_9['column_4']['background_color']:'';?>;">
          <?=($section_9['column_4']['content']!="")?apply_filters('the_content', $section_9['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_9['columns'] > 4){?>
        <div class="col-md-<?=($section_9['column_5']['col_width']);?>" style="<?=($section_9['column_5']['background']!="")?'background:url('.$section_9['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_5']['background_color']!="")?'background-color:'.$section_9['column_5']['background_color']:'';?>;">
          <?=($section_9['column_5']['content']!="")?apply_filters('the_content', $section_9['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_9['columns'] > 5){?>
        <div class="col-md-<?=($section_9['column_6']['col_width']);?>" style="<?=($section_9['column_6']['background']!="")?'background:url('.$section_9['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_6']['background_color']!="")?'background-color:'.$section_9['column_6']['background_color']:'';?>;">
          <?=($section_9['column_6']['content']!="")?apply_filters('the_content', $section_9['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
      </div>
    </div>
  </section>
  <?php }//ends section_9?>
  
<?php if($cs_1['enable']){if($cs_1['position'] == 10){    include_once('common_section_1.php');}}?>
<?php if($cs_2['enable']){if($cs_2['position'] == 10){    include_once('common_section_2.php');}}?>
<?php if($cs_3['enable']){if($cs_3['position'] == 10){    include_once('common_section_3.php');}}?>
  
</div>
<!--ends fullwidth page content div-->
<?php endwhile; endif;?>
<?php get_footer(); ?>