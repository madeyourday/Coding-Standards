<?php
/*
 * Copyright MADE/YOUR/DAY <mail@madeyourday.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if ( ! isset( $content_width ) ) {
	$content_width = 800;
}

require_once __DIR__ . 'inc/navigation.php';

add_action( 'after_setup_theme', 'rst_setup' );

if ( ! function_exists( 'rst_setup' ) ) {

	function rst_setup() {

		load_theme_textdomain( 'foo', get_template_directory() . '/languages' );

		if ( $foo ) {
			bar( $foo );
		} elseif ( $bar ) {
			foo( $bar );
		} else {
			bar2( $foo, $bar );
		}

		// This theme styles the visual editor with editor-style.css to match the theme style.
		add_editor_style( 'css/editor-style.css' );

	}

}
