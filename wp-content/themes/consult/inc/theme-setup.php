<?php


//title tag
add_theme_support('title-tag');
//theme custom header
add_theme_support('custom-header');

//nav memu support
register_nav_menus(array(
	'header_menu' => 'Header Menu',
	'footer_menu' => 'Footer Menu',

));


add_theme_support('post-thumbnails');

//active html5 features
add_theme_support('html5', array('comment-list', 'comment-form','search-form', 'gallery', 'caption'));


?>