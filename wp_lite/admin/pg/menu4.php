<fieldset>
    <legend>Additional Info on Product(s)</legend>
    <p>This information will be visible on single product.</p>
    <br>
    <?php $field = new FormFields(); ?>
    <h3 class="lead pt-2 pb-2">Item One</h3>
    <?php $field->text('theme_settings[shop_subtitle]', 'Shop Sub-title',$options['shop_subtitle'])?>
    <?php $field->textarea('theme_settings[shop_desc]', 'Shop Description',$options['shop_desc']);?>
    <br/><br/>
</fieldset>