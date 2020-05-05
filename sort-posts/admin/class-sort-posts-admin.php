<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://bradfelix.com
 * @since      1.0.0
 *
 * @package    Sort_Post
 * @subpackage Sort_Post/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Sort_Post
 * @subpackage Sort_Post/admin
 * @author     Brad Felix <bradfelix1@gmail.com>
 */
class Sort_Post_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $sort_posts    The ID of this plugin.
	 */
	private $sort_posts;

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
	 * @param      string    $sort_posts       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $sort_posts, $version ) {

		$this->plugin_name = $sort_posts;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Sort_Post_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sort_Post_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/sort-posts-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Sort_Post_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sort_Post_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/sort-posts-admin.js', array( 'jquery' ), $this->version, false );

	}

}
