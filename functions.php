<?php

function carrega_scritps() {

	wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), 'all');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper.min.css', array(), 'all');
}

add_action('wp_enqueue_scripts', 'carrega_scritps');

add_action('wp_enqueue_scripts', 'wpdocs_scripts_method');
 
/*
 * Enqueue a script with the correct path.
 */
function wpdocs_scripts_method() {
    wp_enqueue_script(
        'custom_script',
        get_template_directory_uri() . '/js/burger.js',
        array('jquery')
    );
}

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );