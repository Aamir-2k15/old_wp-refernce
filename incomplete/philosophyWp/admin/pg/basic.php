<fieldset>
    <legend>Branding</legend>
    <?php $field = new FormFields(); ?>
    <?php $field->text('theme_settings[test]', 'Test', $options['test'], $req, $desc, $css_class); ?>  
    <?php $field->textarea('theme_settings[addr]', 'Address', $options['addr'], $req, $desc, $css_class); ?> 
    <?php $field->radio('theme_settings[layout]', 'layout', $options['layout'], $req, ['1200', '1600'], $css_class) ?>
    <?php $field->checkbox('theme_settings[show-bb]', 'show bottom bar?', $options['show-bb'], $req, 'yes', $css_class) ?>

    <?php $field->multiselect('theme_settings[icons]', 'icons', $options['icons'], $req, ['font awesome', 'other fonts', 'third type fonts'], $css_class, 3) ?>
    <?php $field->countries('theme_settings[countries]', 'countries', $options['countries'], '', '', ''); ?>
    <?php $field->dmy('Dated', 'theme_settings[dated-day]', 'theme_settings[dated-month]', 'theme_settings[dated-year]', $options['dated-day'], $options['dated-month'], $options['dated-year'], $req, $desc, $css_class) ?> 
    <?php $field->select('theme_settings[cols]', 'columns', $options['cols'], $req, $desc, ['one', 'two', 'three'], $css_class) ?>
    <?php $field->wp_color('theme_settings[primary]', 'primary color', $options['primary'], $req, $desc, $css_class); ?>  
    
    <?php // $field?>  <?php // $field?>
    <?php // $field?>  
</fieldset>
<fieldset>
    <legend>Others</legend>

<?php /*?>
    <tr>
        <th class="NAME_photo_upload_td_header"><label for="NAME_photo_upload">Upload Photo:</label></th>
        <td class="NAME_photo_upload_td_class">   
            <div class="image_upload_row">       
                    <input type="text" readonly name="theme_settings[NAME_photo_upload]" id="NAME_photo_upload" value="<?= ($options['NAME_photo_upload'] != "") ? ($options['NAME_photo_upload']) : ''; ?>" class="form-control" size="30" />
                    <input type="button" name="NAME_photo_upload" id="NAME_photo_upload_upload-btn" class="btn btn-primary" value="Upload Image">
                    <div class="NAME_photo_upload_imagearea">
                        <div class="images_parent_class">
                            <div class="NAME_photo_upload_upload-delete delete_btn">X</div>
                            <img src="<?= ($options['NAME_photo_upload'] != "") ? ($options['NAME_photo_upload']) : ''; ?>" id="NAME_photo_upload_img" style="margin-left: auto; margin-right: auto; display: block;"/>
                        </div>
                    </div>
                <br><span class="description"></span>
            </div>      

            </div>

            <script>
                var $ = jQuery;
                jQuery(document).ready(function ($) {
                    $("#NAME_photo_upload_upload-btn").click(function (e) {
                        e.preventDefault();
                        var image = wp.media({
                            title: "Upload Image",
                            // mutiple: true if you want to upload multiple files at once
                            multiple: false
                        }).open()
                                .on("select", function (e) {
                                    // This will return the selected image from the Media Uploader, the result is an object
                                    var uploaded_image = image.state().get("selection").first();
                                    // We convert uploaded_image to a JSON object to make accessing it easier
                                    // Output to the console uploaded_image
                                    console.log(uploaded_image);
                                    var image_url = uploaded_image.toJSON().url;
                                    // Lets assign the url value to the input field
                                    $('#NAME_photo_upload').val(image_url);
                                    $('#NAME_photo_upload_img').attr('src', image_url);
                                    $('.delete_btn').show();
                                });
                    });
                });
                $(document).on('click', '.NAME_photo_upload_upload-delete', function () {
                    $('#NAME_photo_upload').val('');
                    $('#NAME_photo_upload_img').attr('src', '');
                    $('.delete_btn').hide();
                });
            </script>
            <style>.delete_btn {display: none;<?= ($options['NAME_photo_upload'] != "") ? 'display: block;' : '' ?> color: white;font-weight: bold;cursor: pointer;position: absolute;top: -10px;right: -10px;border: 2px solid red;border-radius: 50px;text-align: center; width: 18px;height: 18px;background-color: red;}
                .images_parent_class{display: inline-block;position:relative;width: 150px;height: 150px;}
                .images_parent_class img{max-width:100%;width:100%;height:auto;}.NAME_photo_upload_imagearea {float: right;}</style>	

        </td></tr>
    <?php */?>
    <?php $field->wp_upl('theme_settings[logo]', 'Upload logo', $options['logo'],'logo', $desc, $css_class);?>
    <?php $field->wp_upl('theme_settings[favicon]', 'Upload favicon', $options['favicon'],'favicon', $desc, $css_class);?>
    
    <?php  $field->textarea("theme_settings[footer_text]", 'footer_text', $options['footer_text'], $req, $desc, $css_class);?>
    <?php  $field->textarea("theme_settings[newsletter_text]", 'newsletter_text', $options['newsletter_text'], $req, $desc, $css_class);?>
    
    <?php $field->select_key_val('theme_settings[posts]', 'posts', $options['posts'], $req, $desc, ['1'=>'one','2'=>'two','3'=>'three'], $css_class)?>
    <?php foreach($social_arr as $social){
        $field->text("theme_settings[$social]", $social, $options[$social], $req, $desc, $css_class);
    }?>
</fieldset>