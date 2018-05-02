<?php
/**
 * Plugin Name: JS Error Test
 * Description: Creates a JS error 1 second after window.onload
 */

function js_error_test_enqueue() {
	wp_enqueue_script( 'js-error-test', plugin_dir_url( __FILE__ ) . 'js-error-test.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'js_error_test_enqueue' );
