<?php global $cs_1;?><div id="common_section_1">
  <div class="container"> 
      <!--<div class="row">-->
    <div class="cs1_heading"><?=$cs_1['heading'];?></div>   
    <div class="d-flex flex-md-row flex-column">
      <?php is_active_sidebar('common_section_1') ? dynamic_sidebar('common_section_1') : ''; ?>
    </div>
    <!--</div>--> 
  </div>
</div>