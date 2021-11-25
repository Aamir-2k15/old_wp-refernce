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
<?php $slug = basename(get_permalink()); ?>
<div id="<?=(is_front_page())?'home-page':$slug;?>" class="full-width sections_v1">
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
  <?php $stretch = $section_1['stretch'];?>
  <section class="full-width <?=($stretch == 'true')?'pl-0 pr-0':'';?>" id="<?=$section_1['id'];?>" style="<?=($section_1['bg_color']!="")?'background-color:'.$section_1['bg_color'].';':'';?><?php if($section_1['background_image'] !=""){ ?>background:url('<?=($section_1['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container<?=($stretch == 'true')?'-fluid':'';?> <?=($stretch == 'true')?'overflow-hidden pl-0 pr-0':'';?>">
      <div class="row">
        <div id="s1_column_1" class="column_1 col-md-<?=($section_1['column_1']['col_width']);?>" style="<?=($section_1['column_1']['background']!="")?'background:url('.$section_1['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_1']['background_color']!="")?'background-color:'.$section_1['column_1']['background_color']:'';?>">
          <?=($section_1['column_1']['content']!="")?apply_filters('the_content', $section_1['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_1['columns'] > 1){?>
        <div id="s1_column_2" class="column_2 col-md-<?=($section_1['column_2']['col_width']);?>" style="<?=($section_1['column_2']['background']!="")?'background:url('.$section_1['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_2']['background_color']!="")?'background-color:'.$section_1['column_2']['background_color']:'';?>">
          <?=($section_1['column_2']['content']!="")?apply_filters('the_content', $section_1['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_1['columns'] > 2){?>
        <div id="s1_column_3" class="column_3 col-md-<?=($section_1['column_3']['col_width']);?>" style="<?=($section_1['column_3']['background']!="")?'background:url('.$section_1['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_3']['background_color']!="")?'background-color:'.$section_1['column_3']['background_color']:'';?>">
          <?=($section_1['column_3']['content']!="")?apply_filters('the_content', $section_1['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_1['columns'] > 3){?>
        <div id="s1_column_4" class="column_4 col-md-<?=($section_1['column_4']['col_width']);?>" style="<?=($section_1['column_4']['background']!="")?'background:url('.$section_1['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_4']['background_color']!="")?'background-color:'.$section_1['column_4']['background_color']:'';?>">
          <?=($section_1['column_4']['content']!="")?apply_filters('the_content', $section_1['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_1['columns'] > 4){?>
        <div id="s1_column_5" class="column_5 col-md-<?=($section_1['column_5']['col_width']);?>" style="<?=($section_1['column_5']['background']!="")?'background:url('.$section_1['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_5']['background_color']!="")?'background-color:'.$section_1['column_5']['background_color']:'';?>">
          <?=($section_1['column_5']['content']!="")?apply_filters('the_content', $section_1['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_1['columns'] > 5){?>
        <div id="s1_column_6" class="column_6 col-md-<?=($section_1['column_6']['col_width']);?>" style="<?=($section_1['column_6']['background']!="")?'background:url('.$section_1['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_6']['background_color']!="")?'background-color:'.$section_1['column_6']['background_color']:'';?>">
          <?=($section_1['column_6']['content']!="")?apply_filters('the_content', $section_1['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
        <?php if($section_1['columns'] > 6){?>
        <div id="s1_column_7" class="column_7 col-md-<?=($section_1['column_7']['col_width']);?>" style="<?=($section_1['column_7']['background']!="")?'background:url('.$section_1['column_7']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_7']['background_color']!="")?'background-color:'.$section_1['column_7']['background_color']:'';?>">
          <?=($section_1['column_7']['content']!="")?apply_filters('the_content', $section_1['column_7']['content'],false,false):'';?>
        </div>
        <?php }//ends col_7?>
        <?php if($section_1['columns'] > 7){?>
        <div id="s1_column_8" class="column_8 col-md-<?=($section_1['column_8']['col_width']);?>" style="<?=($section_1['column_8']['background']!="")?'background:url('.$section_1['column_8']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_8']['background_color']!="")?'background-color:'.$section_1['column_8']['background_color']:'';?>">
          <?=($section_1['column_8']['content']!="")?apply_filters('the_content', $section_1['column_8']['content'],false,false):'';?>
        </div>
        <?php }//ends col_8?>
        <?php if($section_1['columns'] > 8){?>
        <div id="s1_column_9" class="column_9 col-md-<?=($section_1['column_9']['col_width']);?>" style="<?=($section_1['column_9']['background']!="")?'background:url('.$section_1['column_9']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_9']['background_color']!="")?'background-color:'.$section_1['column_9']['background_color']:'';?>">
          <?=($section_1['column_9']['content']!="")?apply_filters('the_content', $section_1['column_9']['content'],false,false):'';?>
        </div>
        <?php }//ends col_9?>
        <?php if($section_1['columns'] > 9){?>
        <div id="s1_column_10" class="column_10 col-md-<?=($section_1['column_10']['col_width']);?>" style="<?=($section_1['column_10']['background']!="")?'background:url('.$section_1['column_10']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_10']['background_color']!="")?'background-color:'.$section_1['column_10']['background_color']:'';?>">
          <?=($section_1['column_10']['content']!="")?apply_filters('the_content', $section_1['column_10']['content'],false,false):'';?>
        </div>
        <?php }//ends col_10?>
        <?php if($section_1['columns'] > 10){?>
        <div id="s1_column_11" class="column_11 col-md-<?=($section_1['column_11']['col_width']);?>" style="<?=($section_1['column_11']['background']!="")?'background:url('.$section_1['column_11']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_11']['background_color']!="")?'background-color:'.$section_1['column_11']['background_color']:'';?>">
          <?=($section_1['column_11']['content']!="")?apply_filters('the_content', $section_1['column_11']['content'],false,false):'';?>
        </div>
        <?php }//ends col_11?>
        <?php if($section_1['columns'] > 11){?>
        <div id="s1_column_12" class="column_12 col-md-<?=($section_1['column_12']['col_width']);?>" style="<?=($section_1['column_12']['background']!="")?'background:url('.$section_1['column_12']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_12']['background_color']!="")?'background-color:'.$section_1['column_12']['background_color']:'';?>">
          <?=($section_1['column_12']['content']!="")?apply_filters('the_content', $section_1['column_12']['content'],false,false):'';?>
        </div>
        <?php }//ends col_12?>
        <?php if($section_1['columns'] > 12){?>
        <div id="s1_column_13" class="column_13 col-md-<?=($section_1['column_13']['col_width']);?>" style="<?=($section_1['column_13']['background']!="")?'background:url('.$section_1['column_13']['background'].') center center / cover no-repeat;':'';?><?=($section_1['column_13']['background_color']!="")?'background-color:'.$section_1['column_13']['background_color']:'';?>">
          <?=($section_1['column_13']['content']!="")?apply_filters('the_content', $section_1['column_13']['content'],false,false):'';?>
        </div>
        <?php }//ends col_13?>
      </div>
    </div>
  </section>
  <?php }//ends section1?>
  <?php if($cs_1['enable']){if($cs_1['position'] == 2){    include_once('common_section_1.php');}}?>
  <?php if($cs_2['enable']){if($cs_2['position'] == 2){    include_once('common_section_2.php');}}?>
  <?php if($cs_3['enable']){if($cs_3['position'] == 2){    include_once('common_section_3.php');}}?>
  <?php $section_2 = get_field('section_2'); if($section_2['enable'] =='true'){?>
  <?php $stretch_2 = $section_2['stretch'];?>
  <section class="full-width <?=($stretch_2 == 'true')?'pl-0 pr-0':'';?>" id="<?=$section_2['id'];?>" style="<?=($section_2['bg_color']!="")?'background-color:'.$section_2['bg_color'].';':'';?><?php if($section_2['background_image'] !=""){ ?>background:url('<?=($section_2['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container<?=($stretch_2 == 'true')?'-fluid':'';?> <?=($stretch_2 == 'true')?'overflow-hidden pl-0 pr-0':'';?>">
      <div class="row">
        <div id="s2_column_1" class="column_1 col-md-<?=($section_2['column_1']['col_width']);?>" style="<?=($section_2['column_1']['background']!="")?'background:url('.$section_2['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_1']['background_color']!="")?'background-color:'.$section_2['column_1']['background_color']:'';?>">
          <?=($section_2['column_1']['content']!="")?apply_filters('the_content', $section_2['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_2['columns'] > 1){?>
        <div id="s2_column_2" class="column_2 col-md-<?=($section_2['column_2']['col_width']);?>" style="<?=($section_2['column_2']['background']!="")?'background:url('.$section_2['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_2']['background_color']!="")?'background-color:'.$section_2['column_2']['background_color']:'';?>">
          <?=($section_2['column_2']['content']!="")?apply_filters('the_content', $section_2['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_2['columns'] > 2){?>
        <div id="s2_column_3" class="column_3 col-md-<?=($section_2['column_3']['col_width']);?>" style="<?=($section_2['column_3']['background']!="")?'background:url('.$section_2['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_3']['background_color']!="")?'background-color:'.$section_2['column_3']['background_color']:'';?>">
          <?=($section_2['column_3']['content']!="")?apply_filters('the_content', $section_2['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_2['columns'] > 3){?>
        <div id="s2_column_4" class="column_4 col-md-<?=($section_2['column_4']['col_width']);?>" style="<?=($section_2['column_4']['background']!="")?'background:url('.$section_2['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_4']['background_color']!="")?'background-color:'.$section_2['column_4']['background_color']:'';?>">
          <?=($section_2['column_4']['content']!="")?apply_filters('the_content', $section_2['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_2['columns'] > 4){?>
        <div id="s2_column_5" class="column_5 col-md-<?=($section_2['column_5']['col_width']);?>" style="<?=($section_2['column_5']['background']!="")?'background:url('.$section_2['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_5']['background_color']!="")?'background-color:'.$section_2['column_5']['background_color']:'';?>">
          <?=($section_2['column_5']['content']!="")?apply_filters('the_content', $section_2['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_2['columns'] > 5){?>
        <div id="s2_column_6" class="column_6 col-md-<?=($section_2['column_6']['col_width']);?>" style="<?=($section_2['column_6']['background']!="")?'background:url('.$section_2['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_6']['background_color']!="")?'background-color:'.$section_2['column_6']['background_color']:'';?>">
          <?=($section_2['column_6']['content']!="")?apply_filters('the_content', $section_2['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
        <?php if($section_2['columns'] > 6){?>
        <div id="s2_column_7" class="column_7 col-md-<?=($section_2['column_7']['col_width']);?>" style="<?=($section_2['column_7']['background']!="")?'background:url('.$section_2['column_7']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_7']['background_color']!="")?'background-color:'.$section_2['column_7']['background_color']:'';?>">
          <?=($section_2['column_7']['content']!="")?apply_filters('the_content', $section_2['column_7']['content'],false,false):'';?>
        </div>
        <?php }//ends col_7?>
        <?php if($section_2['columns'] > 7){?>
        <div id="s2_column_8" class="column_8 col-md-<?=($section_2['column_8']['col_width']);?>" style="<?=($section_2['column_8']['background']!="")?'background:url('.$section_2['column_8']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_8']['background_color']!="")?'background-color:'.$section_2['column_8']['background_color']:'';?>">
          <?=($section_2['column_8']['content']!="")?apply_filters('the_content', $section_2['column_8']['content'],false,false):'';?>
        </div>
        <?php }//ends col_8?>
        <?php if($section_2['columns'] > 8){?>
        <div id="s2_column_9" class="column_9 col-md-<?=($section_2['column_9']['col_width']);?>" style="<?=($section_2['column_9']['background']!="")?'background:url('.$section_2['column_9']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_9']['background_color']!="")?'background-color:'.$section_2['column_9']['background_color']:'';?>">
          <?=($section_2['column_9']['content']!="")?apply_filters('the_content', $section_2['column_9']['content'],false,false):'';?>
        </div>
        <?php }//ends col_9?>
        <?php if($section_2['columns'] > 9){?>
        <div id="s2_column_10" class="column_10 col-md-<?=($section_2['column_10']['col_width']);?>" style="<?=($section_2['column_10']['background']!="")?'background:url('.$section_2['column_10']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_10']['background_color']!="")?'background-color:'.$section_2['column_10']['background_color']:'';?>">
          <?=($section_2['column_10']['content']!="")?apply_filters('the_content', $section_2['column_10']['content'],false,false):'';?>
        </div>
        <?php }//ends col_10?>
        <?php if($section_2['columns'] > 10){?>
        <div id="s2_column_11" class="column_11 col-md-<?=($section_2['column_11']['col_width']);?>" style="<?=($section_2['column_11']['background']!="")?'background:url('.$section_2['column_11']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_11']['background_color']!="")?'background-color:'.$section_2['column_11']['background_color']:'';?>">
          <?=($section_2['column_11']['content']!="")?apply_filters('the_content', $section_2['column_11']['content'],false,false):'';?>
        </div>
        <?php }//ends col_11?>
        <?php if($section_2['columns'] > 11){?>
        <div id="s2_column_12" class="column_12 col-md-<?=($section_2['column_12']['col_width']);?>" style="<?=($section_2['column_12']['background']!="")?'background:url('.$section_2['column_12']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_12']['background_color']!="")?'background-color:'.$section_2['column_12']['background_color']:'';?>">
          <?=($section_2['column_12']['content']!="")?apply_filters('the_content', $section_2['column_12']['content'],false,false):'';?>
        </div>
        <?php }//ends col_12?>
        <?php if($section_2['columns'] > 12){?>
        <div id="s2_column_13" class=" column_13 col-md-<?=($section_2['column_13']['col_width']);?>" style="<?=($section_2['column_13']['background']!="")?'background:url('.$section_2['column_13']['background'].') center center / cover no-repeat;':'';?><?=($section_2['column_13']['background_color']!="")?'background-color:'.$section_2['column_13']['background_color']:'';?>">
          <?=($section_2['column_13']['content']!="")?apply_filters('the_content', $section_2['column_13']['content'],false,false):'';?>
        </div>
        <?php }//ends col_13?>
      </div>
    </div>
  </section>
  <?php }//ends section_2?>
  <?php if($cs_1['enable']){if($cs_1['position'] == 3){    include_once('common_section_1.php');}}?>
  <?php if($cs_2['enable']){if($cs_2['position'] == 3){    include_once('common_section_2.php');}}?>
  <?php if($cs_3['enable']){if($cs_3['position'] == 3){    include_once('common_section_3.php');}}?>
  <?php $section_3 = get_field('section_3'); if($section_3['enable'] =='true'){?>
  <?php $stretch_3 = $section_3['stretch'];?>
  <section class="full-width <?=($stretch_3 == 'true')?'pl-0 pr-0':'';?>" id="<?=$section_3['id'];?>" style="<?=($section_3['bg_color']!="")?'background-color:'.$section_3['bg_color'].';':'';?><?php if($section_3['background_image'] !=""){ ?>background:url('<?=($section_3['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container<?=($stretch_3 == 'true')?'-fluid':'';?> <?=($stretch_3 == 'true')?'overflow-hidden pl-0 pr-0':'';?>">
      <div class="row">
        <div id="s3_column_1" class="column_1 col-md-<?=($section_3['column_1']['col_width']);?>" style="<?=($section_3['column_1']['background']!="")?'background:url('.$section_3['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_1']['background_color']!="")?'background-color:'.$section_3['column_1']['background_color']:'';?>">
          <?=($section_3['column_1']['content']!="")?apply_filters('the_content', $section_3['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_3['columns'] > 1){?>
        <div id="s3_column_2" class="column_2 col-md-<?=($section_3['column_2']['col_width']);?>" style="<?=($section_3['column_2']['background']!="")?'background:url('.$section_3['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_2']['background_color']!="")?'background-color:'.$section_3['column_2']['background_color']:'';?>">
          <?=($section_3['column_2']['content']!="")?apply_filters('the_content', $section_3['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_3['columns'] > 2){?>
        <div id="s3_column_3" class="column_3 col-md-<?=($section_3['column_3']['col_width']);?>" style="<?=($section_3['column_3']['background']!="")?'background:url('.$section_3['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_3']['background_color']!="")?'background-color:'.$section_3['column_3']['background_color']:'';?>">
          <?=($section_3['column_3']['content']!="")?apply_filters('the_content', $section_3['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_3['columns'] > 3){?>
        <div id="s3_column_4" class="column_4 col-md-<?=($section_3['column_4']['col_width']);?>" style="<?=($section_3['column_4']['background']!="")?'background:url('.$section_3['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_4']['background_color']!="")?'background-color:'.$section_3['column_4']['background_color']:'';?>">
          <?=($section_3['column_4']['content']!="")?apply_filters('the_content', $section_3['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_3['columns'] > 4){?>
        <div id="s3_column_5" class="column_5 col-md-<?=($section_3['column_5']['col_width']);?>" style="<?=($section_3['column_5']['background']!="")?'background:url('.$section_3['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_5']['background_color']!="")?'background-color:'.$section_3['column_5']['background_color']:'';?>">
          <?=($section_3['column_5']['content']!="")?apply_filters('the_content', $section_3['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_3['columns'] > 5){?>
        <div id="s3_column_6" class="column_6 col-md-<?=($section_3['column_6']['col_width']);?>" style="<?=($section_3['column_6']['background']!="")?'background:url('.$section_3['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_6']['background_color']!="")?'background-color:'.$section_3['column_6']['background_color']:'';?>">
          <?=($section_3['column_6']['content']!="")?apply_filters('the_content', $section_3['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
        <?php if($section_3['columns'] > 6){?>
        <div id="s3_column_7" class="column_7 col-md-<?=($section_3['column_7']['col_width']);?>" style="<?=($section_3['column_7']['background']!="")?'background:url('.$section_3['column_7']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_7']['background_color']!="")?'background-color:'.$section_3['column_7']['background_color']:'';?>">
          <?=($section_3['column_7']['content']!="")?apply_filters('the_content', $section_3['column_7']['content'],false,false):'';?>
        </div>
        <?php }//ends col_7?>
        <?php if($section_3['columns'] > 7){?>
        <div id="s3_column_8" class="column_8 col-md-<?=($section_3['column_8']['col_width']);?>" style="<?=($section_3['column_8']['background']!="")?'background:url('.$section_3['column_8']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_8']['background_color']!="")?'background-color:'.$section_3['column_8']['background_color']:'';?>">
          <?=($section_3['column_8']['content']!="")?apply_filters('the_content', $section_3['column_8']['content'],false,false):'';?>
        </div>
        <?php }//ends col_8?>
        <?php if($section_3['columns'] > 8){?>
        <div id="s3_column_9" class="column_9 col-md-<?=($section_3['column_9']['col_width']);?>" style="<?=($section_3['column_9']['background']!="")?'background:url('.$section_3['column_9']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_9']['background_color']!="")?'background-color:'.$section_3['column_9']['background_color']:'';?>">
          <?=($section_3['column_9']['content']!="")?apply_filters('the_content', $section_3['column_9']['content'],false,false):'';?>
        </div>
        <?php }//ends col_9?>
        <?php if($section_3['columns'] > 9){?>
        <div id="s3_column_10" class="column_10 col-md-<?=($section_3['column_10']['col_width']);?>" style="<?=($section_3['column_10']['background']!="")?'background:url('.$section_3['column_10']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_10']['background_color']!="")?'background-color:'.$section_3['column_10']['background_color']:'';?>">
          <?=($section_3['column_10']['content']!="")?apply_filters('the_content', $section_3['column_10']['content'],false,false):'';?>
        </div>
        <?php }//ends col_10?>
        <?php if($section_3['columns'] > 10){?>
        <div id="s3_column_11" class="column_11 col-md-<?=($section_3['column_11']['col_width']);?>" style="<?=($section_3['column_11']['background']!="")?'background:url('.$section_3['column_11']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_11']['background_color']!="")?'background-color:'.$section_3['column_11']['background_color']:'';?>">
          <?=($section_3['column_11']['content']!="")?apply_filters('the_content', $section_3['column_11']['content'],false,false):'';?>
        </div>
        <?php }//ends col_11?>
        <?php if($section_3['columns'] > 11){?>
        <div id="s3_column_12" class="column_12 col-md-<?=($section_3['column_12']['col_width']);?>" style="<?=($section_3['column_12']['background']!="")?'background:url('.$section_3['column_12']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_12']['background_color']!="")?'background-color:'.$section_3['column_12']['background_color']:'';?>">
          <?=($section_3['column_12']['content']!="")?apply_filters('the_content', $section_3['column_12']['content'],false,false):'';?>
        </div>
        <?php }//ends col_12?>
        <?php if($section_3['columns'] > 12){?>
        <div id="s3_column_13" class=" column_13 col-md-<?=($section_3['column_13']['col_width']);?>" style="<?=($section_3['column_13']['background']!="")?'background:url('.$section_3['column_13']['background'].') center center / cover no-repeat;':'';?><?=($section_3['column_13']['background_color']!="")?'background-color:'.$section_3['column_13']['background_color']:'';?>">
          <?=($section_3['column_13']['content']!="")?apply_filters('the_content', $section_3['column_13']['content'],false,false):'';?>
        </div>
        <?php }//ends col_13?>
      </div>
    </div>
  </section>
  <?php }//ends section_3?>
  <?php if($cs_1['enable']){if($cs_1['position'] == 4){    include_once('common_section_1.php');}}?>
  <?php if($cs_2['enable']){if($cs_2['position'] == 4){    include_once('common_section_2.php');}}?>
  <?php if($cs_3['enable']){if($cs_3['position'] == 4){    include_once('common_section_3.php');}}?>
  <?php $section_4 = get_field('section_4'); if($section_4['enable'] =='true'){?>
  <?php $stretch_4 = $section_4['stretch'];?>
  <section class="full-width <?=($stretch_4 == 'true')?'pl-0 pr-0':'';?>" id="<?=$section_4['id'];?>" style="<?=($section_4['bg_color']!="")?'background-color:'.$section_4['bg_color'].';':'';?><?php if($section_4['background_image'] !=""){ ?>background:url('<?=($section_4['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container<?=($stretch_4 == 'true')?'-fluid':'';?> <?=($stretch_4 == 'true')?'overflow-hidden pl-0 pr-0':'';?>">
      <div class="row">
        <div id="s4_column_1" class="column_1 col-md-<?=($section_4['column_1']['col_width']);?>" style="<?=($section_4['column_1']['background']!="")?'background:url('.$section_4['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_1']['background_color']!="")?'background-color:'.$section_4['column_1']['background_color']:'';?>">
          <?=($section_4['column_1']['content']!="")?apply_filters('the_content', $section_4['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_4['columns'] > 1){?>
        <div id="s4_column_2" class="column_2 col-md-<?=($section_4['column_2']['col_width']);?>" style="<?=($section_4['column_2']['background']!="")?'background:url('.$section_4['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_2']['background_color']!="")?'background-color:'.$section_4['column_2']['background_color']:'';?>">
          <?=($section_4['column_2']['content']!="")?apply_filters('the_content', $section_4['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_4['columns'] > 2){?>
        <div id="s4_column_3" class="column_3 col-md-<?=($section_4['column_3']['col_width']);?>" style="<?=($section_4['column_3']['background']!="")?'background:url('.$section_4['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_3']['background_color']!="")?'background-color:'.$section_4['column_3']['background_color']:'';?>">
          <?=($section_4['column_3']['content']!="")?apply_filters('the_content', $section_4['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_4['columns'] > 3){?>
        <div id="s4_column_4" class="column_4 col-md-<?=($section_4['column_4']['col_width']);?>" style="<?=($section_4['column_4']['background']!="")?'background:url('.$section_4['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_4']['background_color']!="")?'background-color:'.$section_4['column_4']['background_color']:'';?>">
          <?=($section_4['column_4']['content']!="")?apply_filters('the_content', $section_4['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_4['columns'] > 4){?>
        <div id="s4_column_5" class="column_5 col-md-<?=($section_4['column_5']['col_width']);?>" style="<?=($section_4['column_5']['background']!="")?'background:url('.$section_4['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_5']['background_color']!="")?'background-color:'.$section_4['column_5']['background_color']:'';?>">
          <?=($section_4['column_5']['content']!="")?apply_filters('the_content', $section_4['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_4['columns'] > 5){?>
        <div id="s4_column_6" class="column_6 col-md-<?=($section_4['column_6']['col_width']);?>" style="<?=($section_4['column_6']['background']!="")?'background:url('.$section_4['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_6']['background_color']!="")?'background-color:'.$section_4['column_6']['background_color']:'';?>">
          <?=($section_4['column_6']['content']!="")?apply_filters('the_content', $section_4['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
        <?php if($section_4['columns'] > 6){?>
        <div id="s4_column_7" class="column_7 col-md-<?=($section_4['column_7']['col_width']);?>" style="<?=($section_4['column_7']['background']!="")?'background:url('.$section_4['column_7']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_7']['background_color']!="")?'background-color:'.$section_4['column_7']['background_color']:'';?>">
          <?=($section_4['column_7']['content']!="")?apply_filters('the_content', $section_4['column_7']['content'],false,false):'';?>
        </div>
        <?php }//ends col_7?>
        <?php if($section_4['columns'] > 7){?>
        <div id="s4_column_8" class="column_8 col-md-<?=($section_4['column_8']['col_width']);?>" style="<?=($section_4['column_8']['background']!="")?'background:url('.$section_4['column_8']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_8']['background_color']!="")?'background-color:'.$section_4['column_8']['background_color']:'';?>">
          <?=($section_4['column_8']['content']!="")?apply_filters('the_content', $section_4['column_8']['content'],false,false):'';?>
        </div>
        <?php }//ends col_8?>
        <?php if($section_4['columns'] > 8){?>
        <div id="s4_column_9" class="column_9 col-md-<?=($section_4['column_9']['col_width']);?>" style="<?=($section_4['column_9']['background']!="")?'background:url('.$section_4['column_9']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_9']['background_color']!="")?'background-color:'.$section_4['column_9']['background_color']:'';?>">
          <?=($section_4['column_9']['content']!="")?apply_filters('the_content', $section_4['column_9']['content'],false,false):'';?>
        </div>
        <?php }//ends col_9?>
        <?php if($section_4['columns'] > 9){?>
        <div id="s4_column_10" class="column_10 col-md-<?=($section_4['column_10']['col_width']);?>" style="<?=($section_4['column_10']['background']!="")?'background:url('.$section_4['column_10']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_10']['background_color']!="")?'background-color:'.$section_4['column_10']['background_color']:'';?>">
          <?=($section_4['column_10']['content']!="")?apply_filters('the_content', $section_4['column_10']['content'],false,false):'';?>
        </div>
        <?php }//ends col_10?>
        <?php if($section_4['columns'] > 10){?>
        <div id="s4_column_11" class="column_11 col-md-<?=($section_4['column_11']['col_width']);?>" style="<?=($section_4['column_11']['background']!="")?'background:url('.$section_4['column_11']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_11']['background_color']!="")?'background-color:'.$section_4['column_11']['background_color']:'';?>">
          <?=($section_4['column_11']['content']!="")?apply_filters('the_content', $section_4['column_11']['content'],false,false):'';?>
        </div>
        <?php }//ends col_11?>
        <?php if($section_4['columns'] > 11){?>
        <div id="s4_column_12" class="column_12 col-md-<?=($section_4['column_12']['col_width']);?>" style="<?=($section_4['column_12']['background']!="")?'background:url('.$section_4['column_12']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_12']['background_color']!="")?'background-color:'.$section_4['column_12']['background_color']:'';?>">
          <?=($section_4['column_12']['content']!="")?apply_filters('the_content', $section_4['column_12']['content'],false,false):'';?>
        </div>
        <?php }//ends col_12?>
        <?php if($section_4['columns'] > 12){?>
        <div id="s4_column_13" class=" column_13 col-md-<?=($section_4['column_13']['col_width']);?>" style="<?=($section_4['column_13']['background']!="")?'background:url('.$section_4['column_13']['background'].') center center / cover no-repeat;':'';?><?=($section_4['column_13']['background_color']!="")?'background-color:'.$section_4['column_13']['background_color']:'';?>">
          <?=($section_4['column_13']['content']!="")?apply_filters('the_content', $section_4['column_13']['content'],false,false):'';?>
        </div>
        <?php }//ends col_13?>
      </div>
    </div>
  </section>
  <?php }//ends section_4?>
  <?php if($cs_1['enable']){if($cs_1['position'] == 5){    include_once('common_section_1.php');}}?>
  <?php if($cs_2['enable']){if($cs_2['position'] == 5){    include_once('common_section_2.php');}}?>
  <?php if($cs_3['enable']){if($cs_3['position'] == 5){    include_once('common_section_3.php');}}?>
  <?php $section_5 = get_field('section_5'); if($section_5['enable'] =='true'){?>
  <?php $stretch_5 = $section_5['stretch'];?>
  <section class="full-width <?=($stretch_5 == 'true')?'pl-0 pr-0':'';?>" id="<?=$section_5['id'];?>" style="<?=($section_5['bg_color']!="")?'background-color:'.$section_5['bg_color'].';':'';?><?php if($section_5['background_image'] !=""){ ?>background:url('<?=($section_5['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container<?=($stretch_5 == 'true')?'-fluid':'';?> <?=($stretch_5 == 'true')?'overflow-hidden pl-0 pr-0':'';?>">
      <div class="row">
        <div id="s5_column_1" class="column_1 col-md-<?=($section_5['column_1']['col_width']);?>" style="<?=($section_5['column_1']['background']!="")?'background:url('.$section_5['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_1']['background_color']!="")?'background-color:'.$section_5['column_1']['background_color']:'';?>">
          <?=($section_5['column_1']['content']!="")?apply_filters('the_content', $section_5['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_5['columns'] > 1){?>
        <div id="s5_column_2" class="column_2 col-md-<?=($section_5['column_2']['col_width']);?>" style="<?=($section_5['column_2']['background']!="")?'background:url('.$section_5['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_2']['background_color']!="")?'background-color:'.$section_5['column_2']['background_color']:'';?>">
          <?=($section_5['column_2']['content']!="")?apply_filters('the_content', $section_5['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_5['columns'] > 2){?>
        <div id="s5_column_3" class="column_3 col-md-<?=($section_5['column_3']['col_width']);?>" style="<?=($section_5['column_3']['background']!="")?'background:url('.$section_5['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_3']['background_color']!="")?'background-color:'.$section_5['column_3']['background_color']:'';?>">
          <?=($section_5['column_3']['content']!="")?apply_filters('the_content', $section_5['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_5['columns'] > 3){?>
        <div id="s5_column_4" class="column_4 col-md-<?=($section_5['column_4']['col_width']);?>" style="<?=($section_5['column_4']['background']!="")?'background:url('.$section_5['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_4']['background_color']!="")?'background-color:'.$section_5['column_4']['background_color']:'';?>">
          <?=($section_5['column_4']['content']!="")?apply_filters('the_content', $section_5['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_5['columns'] > 4){?>
        <div id="s5_column_5" class="column_5 col-md-<?=($section_5['column_5']['col_width']);?>" style="<?=($section_5['column_5']['background']!="")?'background:url('.$section_5['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_5']['background_color']!="")?'background-color:'.$section_5['column_5']['background_color']:'';?>">
          <?=($section_5['column_5']['content']!="")?apply_filters('the_content', $section_5['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_5['columns'] > 5){?>
        <div id="s5_column_6" class="column_6 col-md-<?=($section_5['column_6']['col_width']);?>" style="<?=($section_5['column_6']['background']!="")?'background:url('.$section_5['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_6']['background_color']!="")?'background-color:'.$section_5['column_6']['background_color']:'';?>">
          <?=($section_5['column_6']['content']!="")?apply_filters('the_content', $section_5['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
        <?php if($section_5['columns'] > 6){?>
        <div id="s5_column_7" class="column_7 col-md-<?=($section_5['column_7']['col_width']);?>" style="<?=($section_5['column_7']['background']!="")?'background:url('.$section_5['column_7']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_7']['background_color']!="")?'background-color:'.$section_5['column_7']['background_color']:'';?>">
          <?=($section_5['column_7']['content']!="")?apply_filters('the_content', $section_5['column_7']['content'],false,false):'';?>
        </div>
        <?php }//ends col_7?>
        <?php if($section_5['columns'] > 7){?>
        <div id="s5_column_8" class="column_8 col-md-<?=($section_5['column_8']['col_width']);?>" style="<?=($section_5['column_8']['background']!="")?'background:url('.$section_5['column_8']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_8']['background_color']!="")?'background-color:'.$section_5['column_8']['background_color']:'';?>">
          <?=($section_5['column_8']['content']!="")?apply_filters('the_content', $section_5['column_8']['content'],false,false):'';?>
        </div>
        <?php }//ends col_8?>
        <?php if($section_5['columns'] > 8){?>
        <div id="s5_column_9" class="column_9 col-md-<?=($section_5['column_9']['col_width']);?>" style="<?=($section_5['column_9']['background']!="")?'background:url('.$section_5['column_9']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_9']['background_color']!="")?'background-color:'.$section_5['column_9']['background_color']:'';?>">
          <?=($section_5['column_9']['content']!="")?apply_filters('the_content', $section_5['column_9']['content'],false,false):'';?>
        </div>
        <?php }//ends col_9?>
        <?php if($section_5['columns'] > 9){?>
        <div id="s5_column_10" class="column_10 col-md-<?=($section_5['column_10']['col_width']);?>" style="<?=($section_5['column_10']['background']!="")?'background:url('.$section_5['column_10']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_10']['background_color']!="")?'background-color:'.$section_5['column_10']['background_color']:'';?>">
          <?=($section_5['column_10']['content']!="")?apply_filters('the_content', $section_5['column_10']['content'],false,false):'';?>
        </div>
        <?php }//ends col_10?>
        <?php if($section_5['columns'] > 10){?>
        <div id="s5_column_11" class="column_11 col-md-<?=($section_5['column_11']['col_width']);?>" style="<?=($section_5['column_11']['background']!="")?'background:url('.$section_5['column_11']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_11']['background_color']!="")?'background-color:'.$section_5['column_11']['background_color']:'';?>">
          <?=($section_5['column_11']['content']!="")?apply_filters('the_content', $section_5['column_11']['content'],false,false):'';?>
        </div>
        <?php }//ends col_11?>
        <?php if($section_5['columns'] > 11){?>
        <div id="s5_column_12" class="column_12 col-md-<?=($section_5['column_12']['col_width']);?>" style="<?=($section_5['column_12']['background']!="")?'background:url('.$section_5['column_12']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_12']['background_color']!="")?'background-color:'.$section_5['column_12']['background_color']:'';?>">
          <?=($section_5['column_12']['content']!="")?apply_filters('the_content', $section_5['column_12']['content'],false,false):'';?>
        </div>
        <?php }//ends col_12?>
        <?php if($section_5['columns'] > 12){?>
        <div id="s5_column_13" class=" column_13 col-md-<?=($section_5['column_13']['col_width']);?>" style="<?=($section_5['column_13']['background']!="")?'background:url('.$section_5['column_13']['background'].') center center / cover no-repeat;':'';?><?=($section_5['column_13']['background_color']!="")?'background-color:'.$section_5['column_13']['background_color']:'';?>">
          <?=($section_5['column_13']['content']!="")?apply_filters('the_content', $section_5['column_13']['content'],false,false):'';?>
        </div>
        <?php }//ends col_13?>
      </div>
    </div>
  </section>
  <?php }//ends section_5?>
  <?php if($cs_1['enable']){if($cs_1['position'] == 6){    include_once('common_section_1.php');}}?>
  <?php if($cs_2['enable']){if($cs_2['position'] == 6){    include_once('common_section_2.php');}}?>
  <?php if($cs_3['enable']){if($cs_3['position'] == 6){    include_once('common_section_3.php');}}?>
  <?php $section_6 = get_field('section_6'); if($section_6['enable'] =='true'){?>
  <?php $stretch_6 = $section_6['stretch'];?>
  <section class="full-width <?=($stretch_6 == 'true')?'pl-0 pr-0':'';?>" id="<?=$section_6['id'];?>" style="<?=($section_6['bg_color']!="")?'background-color:'.$section_6['bg_color'].';':'';?><?php if($section_6['background_image'] !=""){ ?>background:url('<?=($section_6['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container<?=($stretch_6 == 'true')?'-fluid':'';?> <?=($stretch_6 == 'true')?'overflow-hidden pl-0 pr-0':'';?>">
      <div class="row">
        <div id="s6_column_1" class="column_1 col-md-<?=($section_6['column_1']['col_width']);?>" style="<?=($section_6['column_1']['background']!="")?'background:url('.$section_6['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_1']['background_color']!="")?'background-color:'.$section_6['column_1']['background_color']:'';?>">
          <?=($section_6['column_1']['content']!="")?apply_filters('the_content', $section_6['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_6['columns'] > 1){?>
        <div id="s6_column_2" class="column_2 col-md-<?=($section_6['column_2']['col_width']);?>" style="<?=($section_6['column_2']['background']!="")?'background:url('.$section_6['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_2']['background_color']!="")?'background-color:'.$section_6['column_2']['background_color']:'';?>">
          <?=($section_6['column_2']['content']!="")?apply_filters('the_content', $section_6['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_6['columns'] > 2){?>
        <div id="s6_column_3" class="column_3 col-md-<?=($section_6['column_3']['col_width']);?>" style="<?=($section_6['column_3']['background']!="")?'background:url('.$section_6['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_3']['background_color']!="")?'background-color:'.$section_6['column_3']['background_color']:'';?>">
          <?=($section_6['column_3']['content']!="")?apply_filters('the_content', $section_6['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_6['columns'] > 3){?>
        <div id="s6_column_4" class="column_4 col-md-<?=($section_6['column_4']['col_width']);?>" style="<?=($section_6['column_4']['background']!="")?'background:url('.$section_6['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_4']['background_color']!="")?'background-color:'.$section_6['column_4']['background_color']:'';?>">
          <?=($section_6['column_4']['content']!="")?apply_filters('the_content', $section_6['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_6['columns'] > 4){?>
        <div id="s6_column_5" class="column_5 col-md-<?=($section_6['column_5']['col_width']);?>" style="<?=($section_6['column_5']['background']!="")?'background:url('.$section_6['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_5']['background_color']!="")?'background-color:'.$section_6['column_5']['background_color']:'';?>">
          <?=($section_6['column_5']['content']!="")?apply_filters('the_content', $section_6['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_6['columns'] > 5){?>
        <div id="s6_column_6" class="column_6 col-md-<?=($section_6['column_6']['col_width']);?>" style="<?=($section_6['column_6']['background']!="")?'background:url('.$section_6['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_6']['background_color']!="")?'background-color:'.$section_6['column_6']['background_color']:'';?>">
          <?=($section_6['column_6']['content']!="")?apply_filters('the_content', $section_6['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
        <?php if($section_6['columns'] > 6){?>
        <div id="s6_column_7" class="column_7 col-md-<?=($section_6['column_7']['col_width']);?>" style="<?=($section_6['column_7']['background']!="")?'background:url('.$section_6['column_7']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_7']['background_color']!="")?'background-color:'.$section_6['column_7']['background_color']:'';?>">
          <?=($section_6['column_7']['content']!="")?apply_filters('the_content', $section_6['column_7']['content'],false,false):'';?>
        </div>
        <?php }//ends col_7?>
        <?php if($section_6['columns'] > 7){?>
        <div id="s6_column_8" class="column_8 col-md-<?=($section_6['column_8']['col_width']);?>" style="<?=($section_6['column_8']['background']!="")?'background:url('.$section_6['column_8']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_8']['background_color']!="")?'background-color:'.$section_6['column_8']['background_color']:'';?>">
          <?=($section_6['column_8']['content']!="")?apply_filters('the_content', $section_6['column_8']['content'],false,false):'';?>
        </div>
        <?php }//ends col_8?>
        <?php if($section_6['columns'] > 8){?>
        <div id="s6_column_9" class="column_9 col-md-<?=($section_6['column_9']['col_width']);?>" style="<?=($section_6['column_9']['background']!="")?'background:url('.$section_6['column_9']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_9']['background_color']!="")?'background-color:'.$section_6['column_9']['background_color']:'';?>">
          <?=($section_6['column_9']['content']!="")?apply_filters('the_content', $section_6['column_9']['content'],false,false):'';?>
        </div>
        <?php }//ends col_9?>
        <?php if($section_6['columns'] > 9){?>
        <div id="s6_column_10" class="column_10 col-md-<?=($section_6['column_10']['col_width']);?>" style="<?=($section_6['column_10']['background']!="")?'background:url('.$section_6['column_10']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_10']['background_color']!="")?'background-color:'.$section_6['column_10']['background_color']:'';?>">
          <?=($section_6['column_10']['content']!="")?apply_filters('the_content', $section_6['column_10']['content'],false,false):'';?>
        </div>
        <?php }//ends col_10?>
        <?php if($section_6['columns'] > 10){?>
        <div id="s6_column_11" class="column_11 col-md-<?=($section_6['column_11']['col_width']);?>" style="<?=($section_6['column_11']['background']!="")?'background:url('.$section_6['column_11']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_11']['background_color']!="")?'background-color:'.$section_6['column_11']['background_color']:'';?>">
          <?=($section_6['column_11']['content']!="")?apply_filters('the_content', $section_6['column_11']['content'],false,false):'';?>
        </div>
        <?php }//ends col_11?>
        <?php if($section_6['columns'] > 11){?>
        <div id="s6_column_12" class="column_12 col-md-<?=($section_6['column_12']['col_width']);?>" style="<?=($section_6['column_12']['background']!="")?'background:url('.$section_6['column_12']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_12']['background_color']!="")?'background-color:'.$section_6['column_12']['background_color']:'';?>">
          <?=($section_6['column_12']['content']!="")?apply_filters('the_content', $section_6['column_12']['content'],false,false):'';?>
        </div>
        <?php }//ends col_12?>
        <?php if($section_6['columns'] > 12){?>
        <div id="s6_column_13" class=" column_13 col-md-<?=($section_6['column_13']['col_width']);?>" style="<?=($section_6['column_13']['background']!="")?'background:url('.$section_6['column_13']['background'].') center center / cover no-repeat;':'';?><?=($section_6['column_13']['background_color']!="")?'background-color:'.$section_6['column_13']['background_color']:'';?>">
          <?=($section_6['column_13']['content']!="")?apply_filters('the_content', $section_6['column_13']['content'],false,false):'';?>
        </div>
        <?php }//ends col_13?>
      </div>
    </div>
  </section>
  <?php }//ends section_6?>
  <?php if($cs_1['enable']){if($cs_1['position'] == 7){    include_once('common_section_1.php');}}?>
  <?php if($cs_2['enable']){if($cs_2['position'] == 7){    include_once('common_section_2.php');}}?>
  <?php if($cs_3['enable']){if($cs_3['position'] == 7){    include_once('common_section_3.php');}}?>
  <?php $section_7 = get_field('section_7'); if($section_7['enable'] =='true'){?>
  <?php $stretch_7 = $section_7['stretch'];?>
  <section class="full-width <?=($stretch_7 == 'true')?'pl-0 pr-0':'';?>" id="<?=$section_7['id'];?>" style="<?=($section_7['bg_color']!="")?'background-color:'.$section_7['bg_color'].';':'';?><?php if($section_7['background_image'] !=""){ ?>background:url('<?=($section_7['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container<?=($stretch_7 == 'true')?'-fluid':'';?> <?=($stretch_7 == 'true')?'overflow-hidden pl-0 pr-0':'';?>">
      <div class="row">
        <div id="s7_column_1" class="column_1 col-md-<?=($section_7['column_1']['col_width']);?>" style="<?=($section_7['column_1']['background']!="")?'background:url('.$section_7['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_1']['background_color']!="")?'background-color:'.$section_7['column_1']['background_color']:'';?>">
          <?=($section_7['column_1']['content']!="")?apply_filters('the_content', $section_7['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_7['columns'] > 1){?>
        <div id="s7_column_2" class="column_2 col-md-<?=($section_7['column_2']['col_width']);?>" style="<?=($section_7['column_2']['background']!="")?'background:url('.$section_7['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_2']['background_color']!="")?'background-color:'.$section_7['column_2']['background_color']:'';?>">
          <?=($section_7['column_2']['content']!="")?apply_filters('the_content', $section_7['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_7['columns'] > 2){?>
        <div id="s7_column_3" class="column_3 col-md-<?=($section_7['column_3']['col_width']);?>" style="<?=($section_7['column_3']['background']!="")?'background:url('.$section_7['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_3']['background_color']!="")?'background-color:'.$section_7['column_3']['background_color']:'';?>">
          <?=($section_7['column_3']['content']!="")?apply_filters('the_content', $section_7['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_7['columns'] > 3){?>
        <div id="s7_column_4" class="column_4 col-md-<?=($section_7['column_4']['col_width']);?>" style="<?=($section_7['column_4']['background']!="")?'background:url('.$section_7['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_4']['background_color']!="")?'background-color:'.$section_7['column_4']['background_color']:'';?>">
          <?=($section_7['column_4']['content']!="")?apply_filters('the_content', $section_7['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_7['columns'] > 4){?>
        <div id="s7_column_5" class="column_5 col-md-<?=($section_7['column_5']['col_width']);?>" style="<?=($section_7['column_5']['background']!="")?'background:url('.$section_7['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_5']['background_color']!="")?'background-color:'.$section_7['column_5']['background_color']:'';?>">
          <?=($section_7['column_5']['content']!="")?apply_filters('the_content', $section_7['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_7['columns'] > 5){?>
        <div id="s7_column_6" class="column_6 col-md-<?=($section_7['column_6']['col_width']);?>" style="<?=($section_7['column_6']['background']!="")?'background:url('.$section_7['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_6']['background_color']!="")?'background-color:'.$section_7['column_6']['background_color']:'';?>">
          <?=($section_7['column_6']['content']!="")?apply_filters('the_content', $section_7['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
        <?php if($section_7['columns'] > 6){?>
        <div id="s7_column_7" class="column_7 col-md-<?=($section_7['column_7']['col_width']);?>" style="<?=($section_7['column_7']['background']!="")?'background:url('.$section_7['column_7']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_7']['background_color']!="")?'background-color:'.$section_7['column_7']['background_color']:'';?>">
          <?=($section_7['column_7']['content']!="")?apply_filters('the_content', $section_7['column_7']['content'],false,false):'';?>
        </div>
        <?php }//ends col_7?>
        <?php if($section_7['columns'] > 7){?>
        <div id="s7_column_8" class="column_8 col-md-<?=($section_7['column_8']['col_width']);?>" style="<?=($section_7['column_8']['background']!="")?'background:url('.$section_7['column_8']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_8']['background_color']!="")?'background-color:'.$section_7['column_8']['background_color']:'';?>">
          <?=($section_7['column_8']['content']!="")?apply_filters('the_content', $section_7['column_8']['content'],false,false):'';?>
        </div>
        <?php }//ends col_8?>
        <?php if($section_7['columns'] > 8){?>
        <div id="s7_column_9" class="column_9 col-md-<?=($section_7['column_9']['col_width']);?>" style="<?=($section_7['column_9']['background']!="")?'background:url('.$section_7['column_9']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_9']['background_color']!="")?'background-color:'.$section_7['column_9']['background_color']:'';?>">
          <?=($section_7['column_9']['content']!="")?apply_filters('the_content', $section_7['column_9']['content'],false,false):'';?>
        </div>
        <?php }//ends col_9?>
        <?php if($section_7['columns'] > 9){?>
        <div id="s7_column_10" class="column_10 col-md-<?=($section_7['column_10']['col_width']);?>" style="<?=($section_7['column_10']['background']!="")?'background:url('.$section_7['column_10']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_10']['background_color']!="")?'background-color:'.$section_7['column_10']['background_color']:'';?>">
          <?=($section_7['column_10']['content']!="")?apply_filters('the_content', $section_7['column_10']['content'],false,false):'';?>
        </div>
        <?php }//ends col_10?>
        <?php if($section_7['columns'] > 10){?>
        <div id="s7_column_11" class="column_11 col-md-<?=($section_7['column_11']['col_width']);?>" style="<?=($section_7['column_11']['background']!="")?'background:url('.$section_7['column_11']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_11']['background_color']!="")?'background-color:'.$section_7['column_11']['background_color']:'';?>">
          <?=($section_7['column_11']['content']!="")?apply_filters('the_content', $section_7['column_11']['content'],false,false):'';?>
        </div>
        <?php }//ends col_11?>
        <?php if($section_7['columns'] > 11){?>
        <div id="s7_column_12" class="column_12 col-md-<?=($section_7['column_12']['col_width']);?>" style="<?=($section_7['column_12']['background']!="")?'background:url('.$section_7['column_12']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_12']['background_color']!="")?'background-color:'.$section_7['column_12']['background_color']:'';?>">
          <?=($section_7['column_12']['content']!="")?apply_filters('the_content', $section_7['column_12']['content'],false,false):'';?>
        </div>
        <?php }//ends col_12?>
        <?php if($section_7['columns'] > 12){?>
        <div id="s7_column_13" class=" column_13 col-md-<?=($section_7['column_13']['col_width']);?>" style="<?=($section_7['column_13']['background']!="")?'background:url('.$section_7['column_13']['background'].') center center / cover no-repeat;':'';?><?=($section_7['column_13']['background_color']!="")?'background-color:'.$section_7['column_13']['background_color']:'';?>">
          <?=($section_7['column_13']['content']!="")?apply_filters('the_content', $section_7['column_13']['content'],false,false):'';?>
        </div>
        <?php }//ends col_13?>
      </div>
    </div>
  </section>
  <?php }//ends section_7?>
  <?php if($cs_1['enable']){if($cs_1['position'] == 8){    include_once('common_section_1.php');}}?>
  <?php if($cs_2['enable']){if($cs_2['position'] == 8){    include_once('common_section_2.php');}}?>
  <?php if($cs_3['enable']){if($cs_3['position'] == 8){    include_once('common_section_3.php');}}?>
  <?php $section_8 = get_field('section_8'); if($section_8['enable'] =='true'){?>
  <?php $stretch_8 = $section_8['stretch'];?>
  <section class="full-width <?=($stretch_8 == 'true')?'pl-0 pr-0':'';?>" id="<?=$section_8['id'];?>" style="<?=($section_8['bg_color']!="")?'background-color:'.$section_8['bg_color'].';':'';?><?php if($section_8['background_image'] !=""){ ?>background:url('<?=($section_8['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container<?=($stretch_8 == 'true')?'-fluid':'';?> <?=($stretch_8 == 'true')?'overflow-hidden pl-0 pr-0':'';?>">
      <div class="row">
        <div id="s8_column_1" class="column_1 col-md-<?=($section_8['column_1']['col_width']);?>" style="<?=($section_8['column_1']['background']!="")?'background:url('.$section_8['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_1']['background_color']!="")?'background-color:'.$section_8['column_1']['background_color']:'';?>">
          <?=($section_8['column_1']['content']!="")?apply_filters('the_content', $section_8['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_8['columns'] > 1){?>
        <div id="s8_column_2" class="column_2 col-md-<?=($section_8['column_2']['col_width']);?>" style="<?=($section_8['column_2']['background']!="")?'background:url('.$section_8['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_2']['background_color']!="")?'background-color:'.$section_8['column_2']['background_color']:'';?>">
          <?=($section_8['column_2']['content']!="")?apply_filters('the_content', $section_8['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_8['columns'] > 2){?>
        <div id="s8_column_3" class="column_3 col-md-<?=($section_8['column_3']['col_width']);?>" style="<?=($section_8['column_3']['background']!="")?'background:url('.$section_8['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_3']['background_color']!="")?'background-color:'.$section_8['column_3']['background_color']:'';?>">
          <?=($section_8['column_3']['content']!="")?apply_filters('the_content', $section_8['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_8['columns'] > 3){?>
        <div id="s8_column_4" class="column_4 col-md-<?=($section_8['column_4']['col_width']);?>" style="<?=($section_8['column_4']['background']!="")?'background:url('.$section_8['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_4']['background_color']!="")?'background-color:'.$section_8['column_4']['background_color']:'';?>">
          <?=($section_8['column_4']['content']!="")?apply_filters('the_content', $section_8['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_8['columns'] > 4){?>
        <div id="s8_column_5" class="column_5 col-md-<?=($section_8['column_5']['col_width']);?>" style="<?=($section_8['column_5']['background']!="")?'background:url('.$section_8['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_5']['background_color']!="")?'background-color:'.$section_8['column_5']['background_color']:'';?>">
          <?=($section_8['column_5']['content']!="")?apply_filters('the_content', $section_8['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_8['columns'] > 5){?>
        <div id="s8_column_6" class="column_6 col-md-<?=($section_8['column_6']['col_width']);?>" style="<?=($section_8['column_6']['background']!="")?'background:url('.$section_8['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_6']['background_color']!="")?'background-color:'.$section_8['column_6']['background_color']:'';?>">
          <?=($section_8['column_6']['content']!="")?apply_filters('the_content', $section_8['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
        <?php if($section_8['columns'] > 6){?>
        <div id="s8_column_7" class="column_7 col-md-<?=($section_8['column_7']['col_width']);?>" style="<?=($section_8['column_7']['background']!="")?'background:url('.$section_8['column_7']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_7']['background_color']!="")?'background-color:'.$section_8['column_7']['background_color']:'';?>">
          <?=($section_8['column_7']['content']!="")?apply_filters('the_content', $section_8['column_7']['content'],false,false):'';?>
        </div>
        <?php }//ends col_7?>
        <?php if($section_8['columns'] > 7){?>
        <div id="s8_column_8" class="column_8 col-md-<?=($section_8['column_8']['col_width']);?>" style="<?=($section_8['column_8']['background']!="")?'background:url('.$section_8['column_8']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_8']['background_color']!="")?'background-color:'.$section_8['column_8']['background_color']:'';?>">
          <?=($section_8['column_8']['content']!="")?apply_filters('the_content', $section_8['column_8']['content'],false,false):'';?>
        </div>
        <?php }//ends col_8?>
        <?php if($section_8['columns'] > 8){?>
        <div id="s8_column_9" class="column_9 col-md-<?=($section_8['column_9']['col_width']);?>" style="<?=($section_8['column_9']['background']!="")?'background:url('.$section_8['column_9']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_9']['background_color']!="")?'background-color:'.$section_8['column_9']['background_color']:'';?>">
          <?=($section_8['column_9']['content']!="")?apply_filters('the_content', $section_8['column_9']['content'],false,false):'';?>
        </div>
        <?php }//ends col_9?>
        <?php if($section_8['columns'] > 9){?>
        <div id="s8_column_10" class="column_10 col-md-<?=($section_8['column_10']['col_width']);?>" style="<?=($section_8['column_10']['background']!="")?'background:url('.$section_8['column_10']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_10']['background_color']!="")?'background-color:'.$section_8['column_10']['background_color']:'';?>">
          <?=($section_8['column_10']['content']!="")?apply_filters('the_content', $section_8['column_10']['content'],false,false):'';?>
        </div>
        <?php }//ends col_10?>
        <?php if($section_8['columns'] > 10){?>
        <div id="s8_column_11" class="column_11 col-md-<?=($section_8['column_11']['col_width']);?>" style="<?=($section_8['column_11']['background']!="")?'background:url('.$section_8['column_11']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_11']['background_color']!="")?'background-color:'.$section_8['column_11']['background_color']:'';?>">
          <?=($section_8['column_11']['content']!="")?apply_filters('the_content', $section_8['column_11']['content'],false,false):'';?>
        </div>
        <?php }//ends col_11?>
        <?php if($section_8['columns'] > 11){?>
        <div id="s8_column_12" class="column_12 col-md-<?=($section_8['column_12']['col_width']);?>" style="<?=($section_8['column_12']['background']!="")?'background:url('.$section_8['column_12']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_12']['background_color']!="")?'background-color:'.$section_8['column_12']['background_color']:'';?>">
          <?=($section_8['column_12']['content']!="")?apply_filters('the_content', $section_8['column_12']['content'],false,false):'';?>
        </div>
        <?php }//ends col_12?>
        <?php if($section_8['columns'] > 12){?>
        <div id="s8_column_13" class=" column_13 col-md-<?=($section_8['column_13']['col_width']);?>" style="<?=($section_8['column_13']['background']!="")?'background:url('.$section_8['column_13']['background'].') center center / cover no-repeat;':'';?><?=($section_8['column_13']['background_color']!="")?'background-color:'.$section_8['column_13']['background_color']:'';?>">
          <?=($section_8['column_13']['content']!="")?apply_filters('the_content', $section_8['column_13']['content'],false,false):'';?>
        </div>
        <?php }//ends col_13?>
      </div>
    </div>
  </section>
  <?php }//ends section_8?>
  <?php if($cs_1['enable']){if($cs_1['position'] == 9){    include_once('common_section_1.php');}}?>
  <?php if($cs_2['enable']){if($cs_2['position'] == 9){    include_once('common_section_2.php');}}?>
  <?php if($cs_3['enable']){if($cs_3['position'] == 9){    include_once('common_section_3.php');}}?>
  <?php $section_9 = get_field('section_9'); if($section_9['enable'] =='true'){?>
  <?php $stretch_9 = $section_9['stretch'];?>
  <section class="full-width <?=($stretch_9 == 'true')?'pl-0 pr-0':'';?>" id="<?=$section_9['id'];?>" style="<?=($section_9['bg_color']!="")?'background-color:'.$section_9['bg_color'].';':'';?><?php if($section_9['background_image'] !=""){ ?>background:url('<?=($section_9['background_image']);?>') center center / cover no-repeat;<?php }?>">
    <div class="container<?=($stretch_9 == 'true')?'-fluid':'';?> <?=($stretch_9 == 'true')?'overflow-hidden pl-0 pr-0':'';?>">
      <div class="row">
        <div id="s9_column_1" class="column_1 col-md-<?=($section_9['column_1']['col_width']);?>" style="<?=($section_9['column_1']['background']!="")?'background:url('.$section_9['column_1']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_1']['background_color']!="")?'background-color:'.$section_9['column_1']['background_color']:'';?>">
          <?=($section_9['column_1']['content']!="")?apply_filters('the_content', $section_9['column_1']['content'],false,false):'';?>
        </div>
        <?php if($section_9['columns'] > 1){?>
        <div id="s9_column_2" class="column_2 col-md-<?=($section_9['column_2']['col_width']);?>" style="<?=($section_9['column_2']['background']!="")?'background:url('.$section_9['column_2']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_2']['background_color']!="")?'background-color:'.$section_9['column_2']['background_color']:'';?>">
          <?=($section_9['column_2']['content']!="")?apply_filters('the_content', $section_9['column_2']['content'],false,false):'';?>
        </div>
        <?php }//ends col2?>
        <?php if($section_9['columns'] > 2){?>
        <div id="s9_column_3" class="column_3 col-md-<?=($section_9['column_3']['col_width']);?>" style="<?=($section_9['column_3']['background']!="")?'background:url('.$section_9['column_3']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_3']['background_color']!="")?'background-color:'.$section_9['column_3']['background_color']:'';?>">
          <?=($section_9['column_3']['content']!="")?apply_filters('the_content', $section_9['column_3']['content'],false,false):'';?>
        </div>
        <?php }//ends col3?>
        <?php if($section_9['columns'] > 3){?>
        <div id="s9_column_4" class="column_4 col-md-<?=($section_9['column_4']['col_width']);?>" style="<?=($section_9['column_4']['background']!="")?'background:url('.$section_9['column_4']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_4']['background_color']!="")?'background-color:'.$section_9['column_4']['background_color']:'';?>">
          <?=($section_9['column_4']['content']!="")?apply_filters('the_content', $section_9['column_4']['content'],false,false):'';?>
        </div>
        <?php }//ends col4?>
        <?php if($section_9['columns'] > 4){?>
        <div id="s9_column_5" class="column_5 col-md-<?=($section_9['column_5']['col_width']);?>" style="<?=($section_9['column_5']['background']!="")?'background:url('.$section_9['column_5']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_5']['background_color']!="")?'background-color:'.$section_9['column_5']['background_color']:'';?>">
          <?=($section_9['column_5']['content']!="")?apply_filters('the_content', $section_9['column_5']['content'],false,false):'';?>
        </div>
        <?php }//ends col5?>
        <?php if($section_9['columns'] > 5){?>
        <div id="s9_column_6" class="column_6 col-md-<?=($section_9['column_6']['col_width']);?>" style="<?=($section_9['column_6']['background']!="")?'background:url('.$section_9['column_6']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_6']['background_color']!="")?'background-color:'.$section_9['column_6']['background_color']:'';?>">
          <?=($section_9['column_6']['content']!="")?apply_filters('the_content', $section_9['column_6']['content'],false,false):'';?>
        </div>
        <?php }//ends col6?>
        <?php if($section_9['columns'] > 6){?>
        <div id="s9_column_7" class="column_7 col-md-<?=($section_9['column_7']['col_width']);?>" style="<?=($section_9['column_7']['background']!="")?'background:url('.$section_9['column_7']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_7']['background_color']!="")?'background-color:'.$section_9['column_7']['background_color']:'';?>">
          <?=($section_9['column_7']['content']!="")?apply_filters('the_content', $section_9['column_7']['content'],false,false):'';?>
        </div>
        <?php }//ends col_7?>
        <?php if($section_9['columns'] > 7){?>
        <div id="s9_column_8" class="column_8 col-md-<?=($section_9['column_8']['col_width']);?>" style="<?=($section_9['column_8']['background']!="")?'background:url('.$section_9['column_8']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_8']['background_color']!="")?'background-color:'.$section_9['column_8']['background_color']:'';?>">
          <?=($section_9['column_8']['content']!="")?apply_filters('the_content', $section_9['column_8']['content'],false,false):'';?>
        </div>
        <?php }//ends col_8?>
        <?php if($section_9['columns'] > 8){?>
        <div id="s9_column_9" class="column_9 col-md-<?=($section_9['column_9']['col_width']);?>" style="<?=($section_9['column_9']['background']!="")?'background:url('.$section_9['column_9']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_9']['background_color']!="")?'background-color:'.$section_9['column_9']['background_color']:'';?>">
          <?=($section_9['column_9']['content']!="")?apply_filters('the_content', $section_9['column_9']['content'],false,false):'';?>
        </div>
        <?php }//ends col_9?>
        <?php if($section_9['columns'] > 9){?>
        <div id="s9_column_10" class="column_10 col-md-<?=($section_9['column_10']['col_width']);?>" style="<?=($section_9['column_10']['background']!="")?'background:url('.$section_9['column_10']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_10']['background_color']!="")?'background-color:'.$section_9['column_10']['background_color']:'';?>">
          <?=($section_9['column_10']['content']!="")?apply_filters('the_content', $section_9['column_10']['content'],false,false):'';?>
        </div>
        <?php }//ends col_10?>
        <?php if($section_9['columns'] > 10){?>
        <div id="s9_column_11" class="column_11 col-md-<?=($section_9['column_11']['col_width']);?>" style="<?=($section_9['column_11']['background']!="")?'background:url('.$section_9['column_11']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_11']['background_color']!="")?'background-color:'.$section_9['column_11']['background_color']:'';?>">
          <?=($section_9['column_11']['content']!="")?apply_filters('the_content', $section_9['column_11']['content'],false,false):'';?>
        </div>
        <?php }//ends col_11?>
        <?php if($section_9['columns'] > 11){?>
        <div id="s9_column_12" class="column_12 col-md-<?=($section_9['column_12']['col_width']);?>" style="<?=($section_9['column_12']['background']!="")?'background:url('.$section_9['column_12']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_12']['background_color']!="")?'background-color:'.$section_9['column_12']['background_color']:'';?>">
          <?=($section_9['column_12']['content']!="")?apply_filters('the_content', $section_9['column_12']['content'],false,false):'';?>
        </div>
        <?php }//ends col_12?>
        <?php if($section_9['columns'] > 12){?>
        <div id="s9_column_13" class="column_13 col-md-<?=($section_9['column_13']['col_width']);?>" style="<?=($section_9['column_13']['background']!="")?'background:url('.$section_9['column_13']['background'].') center center / cover no-repeat;':'';?><?=($section_9['column_13']['background_color']!="")?'background-color:'.$section_9['column_13']['background_color']:'';?>">
          <?=($section_9['column_13']['content']!="")?apply_filters('the_content', $section_9['column_13']['content'],false,false):'';?>
        </div>
        <?php }//ends col_13?>
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
