<?php

    function consult_section_first($atts)
    {
        extract( shortcode_atts(array(
            'title_sec_1' => 'ata akta title',
            'desc_sec_1' => 'Eat akta description area'

        ), $atts));
        //print_r($atts);
        $textfield     = $atts['title_sec_1'];
        $textarea      = $atts['desc_sec_1'];
        //create buffer string
        ob_start();

        ?>
        <div class="looking_for_specific_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="looking_for_left para_default">
                            <h3><?php echo esc_html($textfield); ?></h3>
                            <p> <?php echo esc_html($textarea); ?></p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="looking_for_right image_fulwidth wow fadeInRight" data-wow-delay="300ms">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/we_are_alwayes.jpg" alt="images">
                        </div>
                    </div>
                </div><!--row -->
            </div><!--container -->
        </div><!--looking_for_specific_area -->
        <?php
        $output = ob_get_contents();
        ob_get_clean();
        return $output;
    }

    add_shortcode('section_1_base','consult_section_first');
?>

<!--section 3-->
<?php
function consult_section_third($atts)
{
    extract(shortcode_atts(array(
        'icon_sec_3' => '',
        'title_sec_3' => '',
        'desc_sec_3' => '',

    ), $atts));

    ob_start();
    ?>

    <div class="about_section_area">
        <div class="container-fluid">
            <div class="row">

                <div class="item single_blog_item_div para_default text-center">
                    <h2><a>Our Works</a></h2>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="about_Single_item para_default text-center wow fadeInLeft" data-wow-delay="300ms">
                        <i class="<?php echo esc_html($icon_sec_3); ?>"></i>
                        <h3>About Business</h3>
                        <p>No coding skills required to create unique sites. your site in real-time.</p>
                    </div>
                </div><!--col-md-4 -->

            </div><!--row -->
        </div><!--container-fluid -->
    </div><!--about_section_area -->

    <?php
    $output = ob_get_contents();
    ob_get_clean();
    return $output;

}

    add_shortcode('section_3_base','consult_section_third');
?>

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







