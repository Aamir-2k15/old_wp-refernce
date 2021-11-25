<fieldset>
  <legend>Branding</legend>
  
  

</fieldset>
<fieldset>
    <legend>Others</legend>
  <?php form_field("la text", "text", "")?>
  <?php form_field("la textarea", "textarea", "")?>
  <?php form_field("la color", "colorpicker", "")?>
  <?php form_field("la banner image", "upload", "")?>
  <?php form_field("la checkbox", "checkbox", "")?>
  <?php form_field("Logo", "logo", $class)?>
  <?php form_field("selection", "dropdown", $class, array('suzuki alto','audi','mercedez benz','toyota'))?>
  <?php form_field("Font Size", "number", $class, $dd_arr, 8, 50)?>
  <?php form_field("new", "dropdown", $class, array(1,2,3,4,5))?>

</fieldset>