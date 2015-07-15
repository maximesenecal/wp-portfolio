<?php
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

	function register_theme_menus() {
		register_nav_menus(
			array(
				'primary-menu' => __('Menu Principal')
			)
		);
	}
	add_action('init', 'register_theme_menus');


	function wpms_create_widget( $name, $id, $description ) {
		register_sidebar(array(
			'name' => __( $name ),	 
			'id' => $id, 
			'description' => __( $description ),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="module-heading">',
			'after_title' => '</h2>'
		));
	}
	wpms_create_widget( 'Page Sidebar', 'page', 'Affiche une sidebar (gauche) classique sur les pages désirées' );
	wpms_create_widget( 'Actualités Sidebar', 'blog', 'Affiche une sidebar sur la page d\'actulités (Type blog)');
	wpms_create_widget( 'Sidebar Page About Me', 'aboutme', 'Affiche une sidebar d\'informations utiles.' );

	function wpms_theme_styles() {
		wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
		//wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
		wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
		wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Lato:300,400' );
		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'open_sans_font_google', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300');
		wp_enqueue_style( 'fontawesome_css', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	}
	add_action('wp_enqueue_scripts','wpms_theme_styles');

	function wpms_theme_js(){
		wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );	
		wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true );
	}
	add_action('wp_enqueue_scripts', 'wpms_theme_js');
?>