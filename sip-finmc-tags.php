<?php
/*
Plugin Name: JUANJIMENEZTJ/FinMC/SIP Extension TAGS
Plugin URI: https://elementor.juanjimeneztj.com/wp-content/plugins/sip-finmc-tags
Description: Custom Elementor extension/plugin to display Tags on websites related to the company Sir Isaac Publishing/Financial Media Corp. By Juan Jimenez.
Version: 1.0.0
Author: Juan Jimenez
Author URI: https://juanjimeneztj.com/
License: GPL2+
Text Domain: Juan Jimenez
Domain Path: /languages
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

final class sip_finmc_tags {

	const VERSION = '1.0.0';

	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {

		// Load translation
		add_action( 'init', array( $this, 'i18n' ) );

		// Init Plugin
		add_action( 'plugins_loaded', array( $this, 'init' ) );
	}

	public function i18n() {
		load_plugin_textdomain( 'sip-finmc-tags' );
	}

	public function init() {

		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', array( $this, 'admin_notice_missing_main_plugin' ) );
			return;
		}

		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'admin_notice_minimum_elementor_version' ) );
			return;
		}

		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'admin_notice_minimum_php_version' ) );
			return;
		}

		require_once( 'plugin.php' );
	}

	public function admin_notice_missing_main_plugin() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'sip-finmc-tags' ),
			'<strong>' . esc_html__( 'Juan Jimenez FinMC Tags', 'sip-finmc-tags' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'sip-finmc-tags' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	public function admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'sip-finmc-tags' ),
			'<strong>' . esc_html__( 'Juan Jimenez FinMC Tags', 'sip-finmc-tags' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'sip-finmc-tags' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	public function admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'sip-finmc-tags' ),
			'<strong>' . esc_html__( 'Juan Jimenez FinMC Tags', 'sip-finmc-tags' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'sip-finmc-tags' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}
}

// Instantiate Juan Jimenez Articles.
new sip_finmc_tags();
