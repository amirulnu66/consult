<?php
	function consult_cs_js()
	{

	wp_enqueue_style('flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), '1.0.0', 'all');
	wp_enqueue_style('google-fonts', consult_fonts_url(), array(), '1.0.0');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', array(), '1.0.0', 'all');
	wp_enqueue_style('text-animation', get_template_directory_uri().'/assets/css/text-animation.css', array(), '1.0.0', 'all');
	wp_enqueue_style('fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('magnific-css', get_template_directory_uri().'/assets/css/magnific-popup.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('layers', get_template_directory_uri().'/rs-plugin/css/layers.css', array(), '1.0.0', 'all');
	wp_enqueue_style('settings', get_template_directory_uri().'/rs-plugin/css/settings.css', array(), '1.0.0', 'all');
	wp_enqueue_style('bootstrap-cs', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('plugins', get_template_directory_uri().'/assets/css/plugins.css', array(), '1.0.0', 'all');
	wp_enqueue_style('icons', get_template_directory_uri().'/assets/css/icons.css', array(), '1.0.0', 'all');
	wp_enqueue_style('menu', get_template_directory_uri().'/assets/css/menu-css.css', array(), '1.0.0', 'all');
	wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css', array(), '1.0.0', 'all');
	wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.0', 'all');


	
	//wp_enqueue_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.js', array('jquery'), '1.0.0', true);


}
add_action('wp_enqueue_scripts','consult_cs_js');

// google fonts url 
function consult_fonts_url() {
	$fonts_url = '';
		$OpenSans = _x( 'on', 'OpenSans font: on or off', 'theme-slug' );
		$Montserrat = _x( 'on', 'Montserrat font: on or off', 'theme-slug' );

		if('off' !== $OpenSans || 'off' !== $Montserrat)
		{
			$font_families = array();
			if ( 'off' !== $OpenSans ) {
				$font_families[] = 'Open+Sans:300i,400,400i,600,700,800';
			}
			if ( 'off' !== $Montserrat ) {
				$font_families[] ='Montserrat:200,300,400,500,600,700,800,900';
			}

			$query_args = array(
			'family'=> urlencode( implode( '|', $font_families ) ),
			'subset'=> urlencode( 'cyrillic-ext,cyrillic,vietnamese,latin-ext,latin,greek-ext,greek' )
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );	
		}

	return $fonts_url;

}

