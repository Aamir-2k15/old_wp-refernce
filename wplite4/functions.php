<?php
/* * 
 * THEME OPTIONS
 * * */
/* * * *
 * IN THIS SECTION:
 * 1. Theme Options: 
 * 2. Theme Scripts
 * 3. Metaboxes
 * 4. Theme support removal of editor
 * * * * */
include('theme-options/themeOptions.php');
/* get theme options */ $options = get_option('theme_settings');
global $options;
/* * *********
 * STYLESHEETS & SCRIPTS ++
 */
include_once 'inc/basic_support.php';
/* * **
 *  *  THEME SHORTCODEs
 * ** */
include_once 'inc/shortcodes.php';
/* * 
 * DISABLE GUTENBERG
 * * */
include_once 'inc/custom_support.php';

/*
 * METABOXES
 *  */
 include_once('inc/MetaBoxClass.php');
/*$somename = new customMetaBoxes();
$somename->arr = array(
    'metabox_label' => 'The First Metabox',
    'postTypes' => array('page'),
    'pageTemplates' => array('templates/ContactUs.php','templates/AboutUs.php'),
    'priority' => 'side',
    'the_fields' => array(
        array('name' => 'field_one',
            'label' => 'Field One',
            'type' => 'text',
            'placeholder' => 'Enter Field One',
            'classes' => 'input-text',
            'desc' => 'some description text here'),
        array('name' => 'field_two',
            'label' => 'Field Two',
            'type' => 'textarea',
            'placeholder' => 'Enter Field Two',
            'classes' => 'input-text',
            'desc' => 'some 2nd description text here'),
        array('name' => 'field_three',
            'label' => 'Field Three',
            'type' => 'radio',
            'options' => array('Yes', 'No'),
            'classes' => 'input-radio',
            'desc' => 'some 3rd description text here'),
        array('name' => 'field_four',
            'label' => 'Field Four',
            'type' => 'multiple',
            'options' => array('WordPress', 'jQuery', 'Laravel', 'Codeigniter'),
            'classes' => 'input-checkbox',
            'desc' => 'some 4th description text here',
            'per_line' => '2')
    ),
);
$newmetabox = new customMetaBoxes();

$newmetabox->arr = array(
    'metabox_label' => 'The 2nd Metabox',
    'postTypes' => array('page', 'post', 'testimonials'),
    'pageTemplates' => array('default','templates/AboutUs.php'),
    'priority' => 'advanced',
    'the_fields' => array(
        array('name' => 'field_one2',
            'label' => 'Field One 2',
            'type' => 'text',
            'placeholder' => 'Enter Field One',
            'classes' => 'input-text',
            'desc' => 'some description text here'),
        array('name' => 'field_two2',
            'label' => 'Field Two 2',
            'type' => 'textarea',
            'placeholder' => 'Enter Field Two',
            'classes' => 'input-text',
            'desc' => 'some 2nd description text here'),
        array('name' => 'field_three2',
            'label' => 'Field Three 2',
            'type' => 'radio',
            'options' => array('Yes', 'No'),
            'classes' => 'input-radio',
            'desc' => 'some 3rd description text here'),
        array('name' => 'field_four2',
            'label' => 'Field Four 2',
            'type' => 'multiple',
            'options' => array('WordPress', 'jQuery', 'Laravel', 'Codeigniter'),
            'classes' => 'input-checkbox',
            'desc' => 'some 4th description text here',
            'per_line' => '2'),
        array('name' => 'field_five',
            'label' => 'Field Five',
            'type' => 'select',
            'options' => array('WordPress', 'jQuery', 'Laravel', 'Codeigniter'),
            'classes' => 'select',
            'desc' => 'some 5th description text here'),
        array('name' => 'field_six',
            'label' => 'Field Six',
            'type' => 'wp_color',
            'classes' => 'color',
            'desc' => 'some 6th description text here'),
        array('name' => 'field_seven',
            'label' => 'Field Seven',
            'type' => 'wp_upload',
            'id' => 'test_img_upl_support',
            'classes' => 'upl',
            'desc' => 'some 7th description text here'),
        array('name' => 'field_eight',
            'label' => 'Field Eight',
            'type' => 'date',
            'classes' => 'date',
            'desc' => 'some 8th description text here'),
        array('name' => 'field_nine',
            'label' => 'Field Nine',
            'type' => 'wp_link',
            'post_type' => 'project',
            'classes' => 'select_query',
            'desc' => 'some 9th description text here',
            'key' => 'post_title',
            'val' => 'post_name',),
        array('name' => 'field_ten',
            'label' => 'Field Ten',
            'type' => 'key_val',
            'classes' => 'select_query',
            'desc' => 'some 9th description text here',
            'kv_arr' => array('1' => 'One', '2' => 'Two', '3' => 'Three',))
    ),
);*/
/* * ***************
 * HIDE PAGE EDITOR
 * * */
add_action('admin_init', 'remove_editor_support');

function remove_editor_support() {
    //remove_post_type_support('page', 'editor'); //REMOVING EDITOR SUPPORT FROM PAGE
//    remove_post_type_support('post', 'editor');
    remove_post_type_support('project', 'editor');
//    remove_post_type_support('testimonials', 'editor');
    $id = $_GET['post'];
    $template = get_post_meta($id, '_wp_page_template', true);
    //IF PAGE TEMPLATE IS BELOW ADD EDITOR SUPPORT AGAIN
//    if ($template == 'contact-page-template.php') {
    if ($template == 'templates/ContactUs.php' || $template == 'templates/AboutUs.php') {
        add_post_type_support('page', 'editor');
    }
}
/*
*
*/
$about_metabox = new customMetaBoxes();

$about_metabox->arr = array(
    'metabox_label' => 'About Us Content',
    'postTypes' => array('page'),
    'pageTemplates' => array('default','templates/AboutUs.php'),
    'priority' => 'advanced',
    'the_fields' => array(
        array('name' => 'about_image',
            'label' => 'About Image',
            'type' => 'wp_upload',
            'placeholder' => '',
            'id' => 'about_image',
            'classes' => 'upl',
            'desc' => ''),
        array('name' => 'about_company_heading',
            'label' => 'About company heading',
            'type' => 'text',
            'placeholder' => '',
            'classes' => 'input-text',
            'desc' => ''),
        array('name' => 'about_company_content',
            'label' => 'About Company Content',
            'type' => 'textarea',
            'classes' => 'input-text',
            'desc' => '')
    ),
);