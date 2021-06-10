<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       mailto:aabozaid0094@gmail.com
 * @since      1.0.0
 *
 * @package    Cptss
 * @subpackage Cptss/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Cptss
 * @subpackage Cptss/admin
 * @author     Ahmed Abo Zaid <aabozaid0094@gmail.com>
 */
class Cptss_Admin
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cptss_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cptss_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/cptss-admin.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cptss_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cptss_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/cptss-admin.js', array('jquery'), $this->version, false);
	}

	/**
	 * Register the CPT Sliders post type.
	 *
	 * @since    1.0.0
	 */
	public function cptss_custom_post_type()
	{

		/**
		 * This function is used to create custom post type for sliders
		 */

		register_post_type(
			'cptss_slider',
			array(
				'labels' => array(
					'name' => __('CPT Sliders', 'cptss'),
					'singular_name' => __('CPT Slider', 'cptss'),
				),
				'public' => false,
				'show_ui' => true,
				'menu_position' => 5,
				'menu_icon' => 'dashicons-slides',
				'supports' => array('title', 'custom-fields'),
			)
		);
	}
}