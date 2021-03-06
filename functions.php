<?php

add_action('wp_enqueue_scripts', 'evento_de_bike_tema_css');

function evento_de_bike_tema_css() {
	wp_enqueue_style('normalize-css', get_stylesheet_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('reset-css', get_stylesheet_directory_uri() . '/css/reset.css');
	wp_enqueue_style('css-event-bike', get_stylesheet_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'evento_de_bike_tema_scripts');

function evento_de_bike_tema_scripts(){
	wp_enqueue_script('owl-plugin', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery-evento-bike'), null, true);
	wp_enqueue_script('carroulsel-testimonial', get_template_directory_uri() . '/js/slide-testimonial.js', array(), null, true);
	wp_enqueue_script('jquery-evento-bike', get_template_directory_uri() . '/js/jquery.js', array(), '3.4.0', true);
}

// REMOVE A VERSAO DO CSS E JS
function vc_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
	$src = remove_query_arg( 'ver', $src );
	return $src;
	}
	add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
	add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
	 //fim da remoção da versão css e js

	// MOVE O JAVASCRIPT PARA O RODAPE
function remove_head_scripts() {
	remove_action('wp_head', 'wp_print_scripts');
	remove_action('wp_head', 'wp_print_head_scripts', 9);
	remove_action('wp_head', 'wp_enqueue_scripts', 1);
	add_action('wp_footer', 'wp_print_scripts', 5);
	add_action('wp_footer', 'wp_enqueue_scripts', 5);
	add_action('wp_footer', 'wp_print_head_scripts', 5);
	}
	add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );
	// END Custom Scripting to Move JavaScript

add_theme_support( 'post-formats', [ 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );

//Adiciona suporte a miniaturas (imagem destacada)
add_theme_support('post-thumbnails');

//adicionar titulo dinamico
add_theme_support('title-tag');

//adicionando suporte aos widgets
add_theme_support('customize-selective-refresh-widgets');

//add_theme_support('custom-header');

//registrar menu
add_action('init', 'evento_bike_tema_init');

function evento_bike_tema_init(){
	register_nav_menu('primary', 'Menu Principal');
	register_nav_menu('footer', 'Menu do rodapé');
}

register_sidebar([
	'name'			=> 'Barra Lateral (Sidebar)',
	'id'			=> 'evento-bike-sidebar',
	'description'	=> 'Área lateral sidebar evento-bike',
	'before_title'	=> '<h4>',
	'after_title'	=> '</h4>'
]);

function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');
