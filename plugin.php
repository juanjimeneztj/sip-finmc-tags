<?php
namespace JuanJimenezTJFinMCTags;

class Plugin {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
    
    public function enqueue_styles() {
		wp_enqueue_style('sip-finmc-tags',plugins_url('/assets/css/sip-finmc-tags-widget.css', __FILE__ ));
	}

	public function widget_scripts() {
		wp_register_script( 'sip-finmc-tags', plugins_url( '/assets/js/sip-finmc-tags-widget.js', __FILE__ ), [ 'jquery' ], false, true );
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/sip-finmc-tags-widget.php' );
		require_once( __DIR__ . '/widgets/inline-editing.php' );
	}

	public function register_widgets() {
		$this->include_widgets_files();

		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\sip_finmc_tags() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Inline_Editing() );
	}

	public function __construct() {
        add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'enqueue_styles' ] );
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}
}

// Instantiate Plugin Class
Plugin::instance();
