<?php

function consult_intrage_withvc()
{
    vc_map(array(
        'name'        => __('Fast Section','text-domain'),
        'description' => 'This is first addon',
        'base'        => 'section_1_base',
        'category'    => 'Consult',
        'icon'        => get_template_directory_uri().'/images/favicon.ico',
        'params'      =>array(
            array(
                'param_name'  => 'title_sec_1',
                'type'        => 'textfield',
                'heading'     => 'Section One Title',
                'value'       => 'placeholder'
            ),
            array(
                'param_name'  => 'desc_sec_1',
                'type'        => 'textarea',
                'heading'     => 'Description',
                'value'       => 'placeholder'
            ),

        ),
    ));

//section 3
    vc_map(array(
        'name'        => __('Third Section','text-domain'),
        'description' => 'This is third addon',
        'base'        => 'section_3_base',
        'category'    => 'Consult',
        'icon'        => get_template_directory_uri().'/images/favicon.ico',
        'params'      =>array(

            array(
                'param_name'  => 'icon_sec_3',
                'type'        => 'iconpicker',
                'heading'     => 'title 3 icon',
            ),
            array(
                'param_name'  => 'title_sec_3',
                'type'        => 'textfield',
                'heading'     => 'heading title',
                'group'     => 'text',
            ),
            array(
                'param_name'  => 'desc_sec_3',
                'type'        => 'textarea',
                'heading'     => 'heading description',
                'group'     => 'text',
            ),
        ),
    ));

//contact form 7
    vc_map(array(
        'name'        => __('Contact form 7','text-domain'),
        'description' => 'contact form 7 section',
        'base'        => 'contact_cf_base',
        'category'    => 'Consult',
        'icon'        => get_template_directory_uri().'/images/favicon.ico',
        'params'      =>array(

            array(
                'param_name'  => 'content',
                'type'        => 'textarea_html',
                'heading'     => 'Contact form',
            ),
        ),
    ));


}
add_action('vc_before_init', 'consult_intrage_withvc');

//short code function



