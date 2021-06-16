<?php

/**
 * This add needed metaboxes for CPTSS post type.
 *
 * @link       mailto:aabozaid0094@gmail.com
 * @since      1.0.0
 *
 * @package    Cptss
 * @subpackage Cptss/admin
 */

/**
 * This add needed metaboxes for CPTSS post type.
 * 
 * @package    Cptss
 * @subpackage Cptss/admin
 * @author     Ahmed Abo Zaid <aabozaid0094@gmail.com>
 */
class Cptss_Admin_Metaboxes
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
	 * The meta value of CPTSS post type.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $meta    The meta value of CPTSS post type.
	 */
	private $meta;

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
		$this->set_meta();
	}

	/**
	 * Adds the Metaboxes in CPTSS post type edit/add admin page.
	 *
	 * @since    1.0.0
	 * @access    public
	 */
	public function add_metaboxes()
	{

		/**
		 * This function is used to add metaboxes in CPTSS post type edit/add admin page.
		 */

		add_meta_box(
			'cptss_slider_options',
			apply_filters($this->plugin_name . '-metabox-title-slider-options', esc_html__('Slider Options', 'cptss')),
			array($this, 'metabox'),
			'cptss_slider',
			'normal',
			'default',
			array(
				'file' => 'slider-options'
			)
		);

		add_meta_box(
			'cptss_slider_shortcode',
			apply_filters($this->plugin_name . '-metabox-title-slider-shortcode', esc_html__('Slider Shortcode', 'cptss')),
			array($this, 'metabox'),
			'cptss_slider',
			'side',
			'default',
			array(
				'file' => 'slider-shortcode',
				'classes' => 'equal'
			)
		);
	}

	/**
	 * Calls a metabox file specified in the add_meta_box args.
	 *
	 * @since    1.0.0
	 * @access    public
	 */
	public function metabox($post, $params)
	{

		/**
		 * This function is used to call a metabox file specified in the add_meta_box args
		 */

		if (!is_admin()) {
			return;
		}
		if ('cptss_slider' !== $post->post_type) {
			return;
		}

		if (!empty($params['args']['classes'])) {

			$classes = 'repeater ' . $params['args']['classes'];
		}

		include(plugin_dir_path(__FILE__) . 'partials/cptss-admin-metabox-' . $params['args']['file'] . '.php');
	}

	/**
	 * Check each nonce. If any don't verify, $nonce_check is increased.
	 * If all nonces verify, returns 0.
	 *
	 * @since 		1.0.0
	 * @access 		public
	 * @return 		int 		The value of $nonce_check
	 */
	private function check_nonces($posted)
	{

		$nonces 		= array();
		$nonce_check 	= 0;

		$nonces[] 		= 'slider_options';

		foreach ($nonces as $nonce) {

			if (!isset($posted[$nonce])) {
				$nonce_check++;
			}
			if (isset($posted[$nonce]) && !wp_verify_nonce($posted[$nonce], $this->plugin_name)) {
				$nonce_check++;
			}
		}

		return $nonce_check;
	}

	/**
	 * Returns an array of the all the metabox fields and their respective types
	 *
	 * @since 		1.0.0
	 * @access 		public
	 * @return 		array 		Metabox fields and types
	 */
	private function get_metabox_fields()
	{

		$fields = array();

		// $fields[] = array( 'cptss-', 'select' );
		// $fields[] = array( 'cptss-', 'text' );
		// $fields[] = array( 'cptss-', 'select' );
		// $fields[] = array( 'cptss-', 'color' );
		// $fields[] = array( 'cptss-', 'toogle' );
		// $fields[] = array( 'cptss-', 'textarea' );

		return $fields;
	}

	/**
	 * Sets the class variable $meta.
	 *
	 * @since    1.0.0
	 * @access    public
	 */
	public function set_meta()
	{

		/**
		 * This function is used to set the meta value of CPTSS post type.
		 */

		global $post;
		if (empty($post)) {
			return;
		}
		if ('cptss_slider' != $post->post_type) {
			return;
		}

		$this->meta = get_post_custom($post->ID);
	}

	private function sanitizer( $type, $data ) {

		if ( empty( $type ) ) { return; }
		if ( empty( $data ) ) { return; }

		$return 	= '';
		$sanitizer 	= new CPTSS_Sanitize();

		$sanitizer->set_data( $data );
		$sanitizer->set_type( $type );

		$return = $sanitizer->clean();

		unset( $sanitizer );

		return $return;

	}

	/**
	 * Saves metabox data
	 *
	 * Repeater section works like this:
	 *  	Loops through meta fields
	 *  		Loops through submitted data
	 *  		Sanitizes each field into $clean array
	 *   	Gets max of $clean to use in FOR loop
	 *   	FOR loops through $clean, adding each value to $new_value as an array
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @param 	int 		$post_id 		The post ID
	 * @param 	object 		$object 		The post object
	 * @return 	void
	 */
	public function validate_meta($post_id, $object)
	{

		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return $post_id;
		}
		if (!current_user_can('edit_post', $post_id)) {
			return $post_id;
		}
		if ('cptss' !== $object->post_type) {
			return $post_id;
		}

		$nonce_check = $this->check_nonces($_POST);

		if (0 < $nonce_check) {
			return $post_id;
		}

		$metas = $this->get_metabox_fields();

		foreach ($metas as $meta) {

			$name = $meta[0];
			$type = $meta[1];
			$new_value = $this->sanitizer($type, $_POST[$name]);
			update_post_meta($post_id, $name, $new_value);
		}
	}
}