<?php add_action('wp_enqueue_scripts', 'add_scripts_and_styles');

// подключение css
function add_scripts_and_styles()
{
	wp_enqueue_style('style', get_stylesheet_uri());
}

// .................................................................
add_action('wp_enqueue_scripts', 'true_include_myscript');

// подключение скрипта бургер меню
function true_include_myscript()
{
	wp_enqueue_script('themename', get_stylesheet_directory_uri() . './assets/js/index.js', array(), null, true);
}


// .................................................................

add_action('after_setup_theme', 'add_logo');

// подключение логотипа
function add_logo()
{
	add_theme_support('post-thumbnails', array('post'));
	add_theme_support('custom-logo', [
		'height'      => 57,
		'width'       => 80,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
	]);
	add_image_size('img_thumbnail', 48, 48, true);
}



// Добавление меню в админку сайта

add_action('after_setup_theme', 'add_menu');

function add_menu()
{
	register_nav_menu('top', 'Главное меню сайта');
	register_nav_menu('bottom', 'Нижнее меню сайта');
}
