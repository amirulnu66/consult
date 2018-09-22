<?php
//contace form 7
function consult_section_cf($atts)
{
    extract(shortcode_atts(array(
        'content' => ''

    ), $atts));
//      $contents = $atts['content'];

    ob_start();
    ?>

    <div class="contact_page_get_start_area">
        <div class="container">
            <div class="row">
                <div class="make_an_appoinment_area get_start_areA">
                    <div class="col-md-12">
                        <h3 class="title_get_start text-center">Ready to Get Started?</h3>
                    </div>

                    <?php
                    include_once(ABSPATH . 'wp-admin/includes/plugin.php');
                    if(is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
                        echo do_shortcode($content);
                    }
                    ?>

                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--contact_page_get_start_area-->


    <?php
    $output = ob_get_clean();
    return $output;

}

    add_shortcode('contact_cf_base','consult_section_cf');
?>


