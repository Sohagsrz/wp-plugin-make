<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    WC_CUSTOM_GATEWAY
 * @subpackage WC_CUSTOM_GATEWAY/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    WC_CUSTOM_GATEWAY
 * @subpackage WC_CUSTOM_GATEWAY/public
 * @author     Your Name <email@example.com>
 */
class WC_CUSTOM_GATEWAY_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $wc_custom_gateway    The ID of this plugin.
	 */
	private $wc_custom_gateway;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $wc_custom_gateway       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wc_custom_gateway, $version ) {

		$this->wc_custom_gateway = $wc_custom_gateway;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in WC_CUSTOM_GATEWAY_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WC_CUSTOM_GATEWAY_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->wc_custom_gateway, plugin_dir_url( __FILE__ ) . 'css/wc-custom-gateway-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in WC_CUSTOM_GATEWAY_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WC_CUSTOM_GATEWAY_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->wc_custom_gateway, plugin_dir_url( __FILE__ ) . 'js/wc-custom-gateway-public.js', array( 'jquery' ), $this->version, false );

	}

}
