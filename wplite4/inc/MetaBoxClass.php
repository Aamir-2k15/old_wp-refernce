<?php

/**
 * customMetaBoxes
 * Version: 4
 * 24 Mar2021 Version:- Available: 
 * 1).Text 
 * 2).Textarea 
 * 3).Radio, Multiple, Select,ColorPicker, Image Upload, Date, Link, Key Value (Next: Coutries, Query)
 * Special Thanks: http://tools.marketport.site/generators/metabox-generator/
 */
class customMetaBoxes {

    public function __construct() {
        add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
        add_action('admin_footer', array($this, 'admin_footer'));
        add_action('save_post', array($this, 'save_fields'));
    }



    public function add_meta_boxes() {

        global $post;
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        $instance = $this->getFields($arr); // THIS IS THE INSTANCE OF THE ARRAY CONTAINING METABOX AND INPUT FIELDS INFO 
        $metabox_label = $instance['metabox_label'];
        $post_types = $instance['postTypes'];
        $_pageTemplates = $instance['pageTemplates'];
        $priority = $instance['priority'];


        foreach ($post_types as $postType) {

            if ($postType == 'page' && !in_array($pageTemplate, $_pageTemplates)) {
                continue;
            };
            /*             * * *
             * THIS REPEATS
             *  * * */
            $rand = rand(0, 99999);
            add_meta_box(
                    'the_metabox_' . $rand, __($metabox_label, ''), array($this, 'the_metabox__callback'), $postType, $priority, 'default'
            );
        }
    }

    /*     * * *
     * THIS REPEATS
     *  * * */

    public function the_metabox__callback($post) {
        include_once 'formClass.php';
        $field = new FormFields();
        wp_nonce_field('customMetaBoxes_data', 'customMetaBoxes_nonce');
        ?><!--<label for="the_metabox_text2">the_metabox_text 2</label>-->
        <!--<input id="the_metabox_text" name="the_metabox_text2" type="text" class="box-input" value="<?php echo get_post_meta($post->ID, 'the_metabox_text2', true); ?>" placeholder="<?php _e('Some Extra 2', ''); ?>"  />-->                          
        <?php
//        $field->countries('Country', 'Country', get_post_meta($post->ID, 'Country', true));
//        $more_text = get_post_meta($post->ID, 'more_text', true);
//        $field->text('more_text', 'More Text', $more_text, $req, 'mORE', 'THE DESC');
//        $the_img = get_post_meta($post->ID, 'Image', true);
//        $field->wp_upl('Image', 'WP Image', $the_img, 'the_image', 'Please Select or Upload Image', 'UploadImage');
//        $theValues = $this->$arr;
        $theValues = $this->getFields($arr);
        $theFields = $theValues['the_fields'];
//        echo 'The fields are: <pre>';
//        print_r($theFields) . '</pre>';
        foreach ($theFields as $single) {
            if ($single['type'] == "text") {
                $field->text($single['name'], $single['label'], get_post_meta($post->ID, $single['name'], true), $req, $single['placeholder'], $single['desc'], $single['classes']);
            }
            if ($single['type'] == "textarea") {
                $field->textarea($single['name'], $single['label'], get_post_meta($post->ID, $single['name'], true), $req, $single['placeholder'], $single['desc'], $single['classes']);
            }
            if ($single['type'] == "radio") {
                $field->radio($single['name'], $single['label'], get_post_meta($post->ID, $single['name'], true), $req, $single['options'], $single['desc'], $single['classes']);
            }
            if ($single['type'] == "multiple") {
                $field->multiple($single['name'], $single['label'], get_post_meta($post->ID, $single['name'], true), $req, $single['options'], $single['desc'], $single['classes'], $single['per_line']);
            }
            if ($single['type'] == "select") {
                $field->select($single['name'], $single['label'], get_post_meta($post->ID, $single['name'], true), $req, $single['options'], $single['desc'], $single['classes']);
            }
            if ($single['type'] == "wp_color") {
                $field->wp_color($single['name'], $single['label'], get_post_meta($post->ID, $single['name'], true), $req, $single['desc'], $single['classes']);
            }
            if ($single['type'] == "wp_upload") {
                $field->wp_upl($single['name'], $single['label'], get_post_meta($post->ID, $single['name'], true), $single['id'], $single['desc'], $single['classes']);
            }
            if ($single['type'] == "date") {
//                $field->date($name, $label, $dbval, $req, $desc, $css_class)
                $field->date($single['name'], $single['label'], get_post_meta($post->ID, $single['name'], true), $req, $single['desc'], $single['classes']);
            }
            if ($single['type'] == "wp_link") {
//                $field->select_wpquery($name, $label, $dbval, $req, $desc, $wpquery, $key, $value, $css_class);
                $field->wp_link($single['name'], $single['label'], get_post_meta($post->ID, $single['name'], true), $req, $single['desc'], $single['post_type'], $single['classes'], $single['key'], $single['val']);
            }
            if ($single['type'] == "key_val") {
//                $field->select_key_val($name, $label, $dbval, $req, $desc, $kv_arr, $css_class);
                $field->select_key_val($single['name'], $single['label'], get_post_meta($post->ID, $single['name'], true), $req, $single['desc'], $single['kv_arr'], $single['classes']);
            }
        }
    }

    public function save_fields($post_id) {
        if (!isset($_POST['customMetaBoxes_nonce']))
            return $post_id;

        $nonce = $_POST['customMetaBoxes_nonce'];
        if (!wp_verify_nonce($nonce, 'customMetaBoxes_data'))
            return $post_id;

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return $post_id;

// Update metafields
        /*         *  * *
         * THIS REPEATS
         *  * * */
        $theValues = $this->getFields($arr);
        $theFields = $theValues['the_fields'];
        foreach ($theFields as $single) {
            $field_name = $single['name'];
            if (isset($field_name)) {
                update_post_meta($post_id, $field_name, $_POST[$field_name]);
            }
        }
//        update_post_meta($post_id, 'the_metabox_text2', esc_attr($_POST['the_metabox_text2']));
    }

    public function admin_footer() {
        ?>
        <style>
            .box-input { width: 100%; padding: 10px; margin-bottom: 15px;} 
            .input-label { margin-bottom: 5px; display: block } 
            .editor-input { margin-bottom: 25px; }
            .delete-item { display: block; margin-bottom: 5px !important; }
            ::-webkit-input-placeholder { font-style: italic; }
            ::-moz-placeholder { font-style: italic; }
            :-ms-input-placeholder { font-style: italic; }
            :-moz-placeholder { font-style: italic; }

            #postdivrich {    display: none !important;}
            .postbox .inside > * {    overflow: hidden;    max-width: 96%;}
        </style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <?php
    }

    public function getFields($arr) {
        return $this->arr;
    }

}
