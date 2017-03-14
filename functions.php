<?php

require_once( get_stylesheet_directory() . '/vendor/autoload.php' );

add_action( 'after_setup_theme', function() {

	add_action( 'fm_post_post', function() {
		$fm = new Fieldmanager_TextField( [
			'name' => 'test',
		] );
		$fm->add_meta_box( 'Test text field', 'post' );
	} );
} );
