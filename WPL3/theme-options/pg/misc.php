<fieldset>
    <legend>Misc Settings</legend>

    <?php $field = new FormFields(); ?>

    <?php $field->select('theme_settings[header_widgets]', 'Header widgets', $options['header_widgets'], $req, $header_widgets, 'Number of Widgets in header', $css_class) ?>

    <?php $field->select('theme_settings[footer_widgets]', 'Footer widgets', $options['footer_widgets'], $req, $footer_widgets, 'Number of Widgets in footer', $css_class) ?>

    <legend>Stylesheets</legend> 
    <?php for ($c = 1; $c < 13; $c++) { ?>
        <div class="row pb-3">
            <div class="col-md-6"><?php $field->text('theme_settings[css_' . $c . ']', 'Stylesheet ' . $c, $options['css_' . $c], $req,'', 'Without "/css/" if adding local', 'input-control'); ?> </div>
            <div class="col-md-3"><?php $field->text('theme_settings[css_' . $c . '_id]', '', $options['css_' . $c . '_id'], $req, $placeholder, 'ID', 'input-sm'); ?> </div>
            <div class="col-md-3"><?php $field->checkbox('theme_settings[css_' . $c . '_live]', '', $options['css_' . $c . '_live'], $req, 'yes', 'Is Live?'); ?> </div>
        </div>
    <?php } ?>
    <legend>Javascript</legend>

        <?php for ($j = 1; $j < 13; $j++) { ?>
        <div class="row pb-3">
            <div class="col-md-6"><?php $field->text('theme_settings[js_' . $j . ']', 'JS ' . $j, $options['js_' . $j], $req,'', 'Without "/js/" if adding local', 'input-control'); ?> </div>
            <div class="col-md-3"><?php $field->text('theme_settings[js_' . $j . '_id]', '', $options['js_' . $j . '_id'], $req, $placeholder, 'ID', 'input-sm'); ?> </div>
            <div class="col-md-3"><?php $field->checkbox('theme_settings[js_' . $j . '_live]', '', $options['js_' . $j . '_live'], $req, 'yes', 'Is Live?'); ?> </div>
        </div>
    <?php } ?>


</fieldset>