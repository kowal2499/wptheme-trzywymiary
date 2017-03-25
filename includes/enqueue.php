<?php

function rk_enqueue() {
	wp_register_style( 'rk_bootstrap', get_template_directory_uri() . '/assets/styles/bootstrap.min.css' );
	wp_register_style( 'rk_font-awesome', get_template_directory_uri() . '/assets/styles/font-awesome.min.css' );
	wp_register_style( 'rk_general', get_template_directory_uri() . '/assets/styles/general.css' );
	
	wp_register_style( 'rk_roboto', "https://fonts.googleapis.com/css?family=Roboto:300,400,600&amp;subset=latin-ext");

	wp_enqueue_style( 'rk_bootstrap' );
	wp_enqueue_style( 'rk_font-awesome' );
	wp_enqueue_style( 'rk_roboto' );
	wp_enqueue_style( 'rk_general' );
	
	// footer scripts
	wp_register_script( 'rk_bootstrap_js', get_template_directory_uri() . '/assets/scripts/bootstrap.min.js', array(), false, true );
	wp_register_script( 'rk_main_js', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true );
	wp_register_script( 'rk_parallax', get_template_directory_uri() . '/assets/scripts/rk-parallax.js', array(), false, true );
	wp_register_script( 'rk_fader', get_template_directory_uri() . '/assets/scripts/rk-fader.js', array(), false, true );


	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'rk_bootstrap_js' );
	wp_enqueue_script( 'rk_main_js' );

	if ( is_front_page() ) {
		wp_enqueue_script( 'rk_parallax' );
		wp_enqueue_script( 'rk_fader' );
	}
}

?>