<?php
/**
 * Embed Jetpack Custom CSS
 *
 * @package   Cedaro_Jetpack_CustomCSS_Embed
 * @author    Brady Vercher
 * @link      http://www.cedaro.com/
 * @copyright Copyright (c) 2015 Cedaro, Inc.
 * @license   GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:       Embed Jetpack Custom CSS
 * Description:       Embed Jetpack Custom CSS in the document head to improve front end performance.
 * Version:           1.0.0
 * Author:            Cedaro
 * Author URI:        http://www.cedaro.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: cedaro/embed-jetpack-custom-css
 */

/**
 * Main plugin class.
 *
 * @package Cedaro_Jetpack_CustomCSS_Embed
 * @since 1.0.0
 */
class Cedaro_Jetpack_CustomCSS_Embed {
	public function load() {
		if ( ! class_exists( 'Jetpack_Custom_CSS' ) || Jetpack_Custom_CSS::is_preview() ) {
			return;
		}

		add_action( 'init',    array( 'Jetpack_Custom_CSS', 'disable' ), 11 );
		add_action( 'wp_head', array( $this, 'embed_css' ), 101 );
	}

	public function embed_css() {
		printf( '<style type="text/css" id="jetpack-custom-css">%s</style>', Jetpack_Custom_CSS::get_css( true ) );
	}
}

$cedaro_jetpack_customcss_embed = new Cedaro_Jetpack_CustomCSS_Embed();
add_action( 'init', array( $cedaro_jetpack_customcss_embed, 'load' ) );
