<fieldset>
    <legend>Shop page information</legend>
    <p>This information will only be visible on shop page.</p>
    <br>
    <style>.textarea-big{height:410px !important;}</style>
    <?php $field = new FormFields(); ?>
    <!--<h3 class="lead pt-2 pb-2">Item One</h3>-->
    <?php $field->text('theme_settings[shop_subtitle]', 'Shop Sub-title',$options['shop_subtitle'])?>
    <?php $field->textarea('theme_settings[shop_desc]', 'Shop Description',$options['shop_desc'],'','textarea-big');?>
    
    <br/><br/>
</fieldset>