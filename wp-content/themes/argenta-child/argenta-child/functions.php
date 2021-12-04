<?php

	add_action( 'wp_enqueue_scripts', 'argenta_child_local_enqueue_parent_styles' );

	function argenta_child_local_enqueue_parent_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	}