<?php
/**
 * Kai 13 functions and definitions
 *
 * @package WordPress
 * @subpackage Kai_13
 * @since Kai 13 0.0.1
 */

/**
 * Customize footer text
 *
 * @since Kai 13 0.0.1
 */
function add_kai_13_credits() {
  echo '<a href="http://sparanoid.com/work/kai/">Kai 13</a><span class="sep"> - </span> ';
}

add_action('twentythirteen_credits', 'add_kai_13_credits');

/**
 * Override Twenty Twelve stylesheet loading behavier and load Kai 13 stylesheet
 *
 * @since Kai 13 0.0.1
 */
function twentythirteen_scripts_styles_override() {
  wp_enqueue_style( 'twentythirteen-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'kai-13-style', get_stylesheet_directory_uri() . '/core.css' );
}

add_action( 'wp_enqueue_scripts', 'twentythirteen_scripts_styles_override' );

/**
 * Override default excerpt length
 *
 * @since Kai 13 0.0.1
 */
function kai_13_custom_excerpt_length( $length ) {
  return 360;
}

add_filter( 'excerpt_length', 'kai_13_custom_excerpt_length', 999 );

/**
 * Override default Jetpack Infinite Scroll footer
 *
 * @since Kai 13 0.0.1
 */
function kai_13_infinite_scroll_credit() {
  return '<a href="http://sparanoid.com/work/kai/">Kai 13</a>';
}

add_filter( 'infinite_scroll_credit', 'kai_13_infinite_scroll_credit' );

/**
 * Initialize the update checker
 *
 * @since Kai 13 0.0.1
 */
require 'includes/theme-update-checker.php';
$kai_12_update_checker = new ThemeUpdateChecker(
  'kai-12',
  'http://sparanoid.com/lab/wordpress/kai-13.json'
);
?>