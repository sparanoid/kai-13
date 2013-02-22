<?php
/**
 * Kai 13 functions and definitions
 *
 * @package WordPress
 * @subpackage Kai_12
 * @since Kai 13 1.0
 */

/**
 * Customize footer text
 *
 * @since Kai 13 1.0
 */
function add_twentythirteen_credits() {
  echo '<a href="http://sparanoid.com/work/kai/">Kai 13</a><span class="sep"> - </span> ';
}

add_action('twentythirteen_credits', 'add_twentythirteen_credits');

/**
 * Override Twenty Twelve stylesheet loading behavier and load Kai 13 stylesheet
 *
 * @since Kai 13 1.1
 */
function twentythirteen_scripts_styles_override() {
  wp_enqueue_style( 'twentythirteen-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'twentythirteen-kai-style', get_stylesheet_directory_uri() . '/core.css' );
}

add_action( 'wp_enqueue_scripts', 'twentythirteen_scripts_styles_override' );

/**
 * Override default excerpt length
 *
 * @since Kai 13 1.1.2
 */
function twentythirteen_kai_custom_excerpt_length( $length ) {
  return 360;
}

add_filter( 'excerpt_length', 'twentythirteen_kai_custom_excerpt_length', 999 );

/**
 * Override default Jetpack Infinite Scroll footer
 *
 * @since Kai 13 1.1.6
 */
function twentythirteen_kai_infinite_scroll_credit() {
  return '<a href="http://sparanoid.com/work/kai/">Kai 13</a>';
}

add_filter( 'infinite_scroll_credit', 'twentythirteen_kai_infinite_scroll_credit' );
?>