<?php
/* 
 * Template Name: Shop
 */?><?php get_header(); ?><?php global $options;global $social_arr; ?>
    <div class="container-fluid border-bottom">
  <div class="row mr-0 pl-5 pt-5 p-5">
    <div class="col-md-12">
      <h1>Shop All Products</h1>
    </div>
  </div>
  <div class="row mr-0 pt-5 pb-5 pl-5 pr-5">
    <div class="col-md-3">
   <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

	<h3 class="page-title pb-5"><?php woocommerce_page_title(); ?></h3>

<?php endif; ?>
<?php
//show category description
$term_object = get_queried_object();
?>
<div class="woocommerce-category-description">
    <!--<div class="title"><?php echo $term_object->name; ?></div>-->
    <div class="description"><?php echo $term_object->description; ?></div>
</div>
    </div>
     <div class="col-md-9">
      
      
      <ul class="products columns-4">

          <?php getProductsByCat('soaps-bars');?>
      </ul>
        
    </div>
  </div>
        
         <div class="row mr-0 pt-5 pb-5 pl-5 pr-5">
    <div class="col-md-3">
   <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

	<h3 class="page-title pb-5"><?php woocommerce_page_title(); ?></h3>

<?php endif; ?>
<?php
//show category description
$term_object = get_queried_object();
?>
<div class="woocommerce-category-description">
    <!--<div class="title"><?php echo $term_object->name; ?></div>-->
    <div class="description"><?php echo $term_object->description; ?></div>
</div>
    </div>
    <div class="col-md-9">
      
      

          <ul class="products columns-4">
             <?php getProductsByCat('uncategorized');?>
          </ul>
                  
        
    </div>
  </div>
</div>
    
<?php get_footer(); ?>