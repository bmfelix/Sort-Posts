<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://bradfelix.com
 * @since      1.0.0
 *
 * @package    Sort_Posts
 * @subpackage Sort_Posts/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Sort_Posts
 * @subpackage Sort_Posts/public
 * @author     Brad Felix <bradfelix1@gmail.com>
 */
class Sort_Posts_Public {

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
	 * @param      string    $sort_posts       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $sort_posts, $version ) {

		$this->plugin_name = $sort_posts;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/plugin-name-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/plugin-name-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * set default sort order.
	 *
	 * @since    1.0.0
	 * @param      string    $query       Main wordpress query.
	 * @param      string    $order_category    exclude all categories but this one.
	 * @param      string    $orderby    how to sort.
	 * @param      string    $order    ASC or DESC.
	 * 
	 */
	function adjust_default_sort_order_by_category($query, $order_category = 'homepage', $orderby = 'post_date', $order = 'DESC'){
		if ( ! is_admin() && $query->is_main_query() ) {
				$query->set( 'category_name', $order_category );
				$query->set( 'orderby', $orderby );
				$query->set( 'order', $order);
		}
	}

	add_action( 'pre_get_posts', 'adjust_default_sort_order_by_category' );

}
