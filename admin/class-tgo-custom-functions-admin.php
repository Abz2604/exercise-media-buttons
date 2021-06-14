<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       trainergoesonline.com
 * @since      1.0.0
 *
 * @package    Tgo_Custom_Functions
 * @subpackage Tgo_Custom_Functions/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Tgo_Custom_Functions
 * @subpackage Tgo_Custom_Functions/admin
 * @author     TGO <support@trainergoesonline.com>
 */
class Tgo_Custom_Functions_Admin {

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
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in Tgo_Custom_Functions_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Tgo_Custom_Functions_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/tgo-custom-functions-admin.css', array(), $this->version, 'all' );

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
		 * defined in Tgo_Custom_Functions_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Tgo_Custom_Functions_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/tgo-custom-functions-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function add_my_media_button() {

		require_once TGO_CF_DIR . 'admin/partials/add_exercise_link.php';
	}

	public function add_modal_to_footer()
	{
		require_once TGO_CF_DIR . 'admin/partials/add_modal_footer.php';
	}

	public function tgo_register_exercises() {

		$labels = [
			"name" => __("Exercises Library","post type general name"),
			"menu_name" => "Exercises",
			"all_items" => "Exercises",
			"add_new" => __("Add Exercise","post type general name"),
			"add_new_item" => __("Add New","post type general name"),
			"edit_item" => "",
			"new_item" => "",
			"view_item" => "",
			"view_items" => "",
			"search_items" => "",
			"not_found" => "",
			"not_found_in_trash" => "",
			"parent_item_colon" => "",
			"featured_image" => "",
			"set_featured_image" => "",
			"remove_featured_image" => "",
			"use_featured_image" => "",
			"archives" => "",
			"insert_into_item" => "",
			"uploaded_to_this_item" => "",
			"filter_items_list" => "",
			"items_list_navigation" => "",
			"items_list" => "",
			"attributes" => "",
			"name_admin_bar" => "",
			"item_published" => "",
			"item_published_privately" => "",
			"item_reverted_to_draft" => "",
			"item_scheduled" => "",
			"item_updated" => ""
		];

		$args = [
			"label" => __("Exercises", "post type general name"),
			"labels" => $labels,
			"singular_label" => __("Exercise","post type general name"),
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_nav_menus" => true,
			"delete_with_user" => false,
			"show_in_rest" => true,
			"rest_base" => "",
			"rest_controller_class" => "WP_REST_Posts_Controller",
			"has_archive" => false,
			"has_archive_string" => "",
			"exclude_from_search" => false,
			"capability_type" => "post",
			"hierarchical" => false,
			"rewrite" => true,
			"rewrite_slug" => "",
			"rewrite_withfront" => true,
			"query_var" => true,
			"menu_position" => "",
			"show_in_menu" => true,
			"show_in_menu_string" => "",
			"menu_icon" => "",
			"supports" => 
				["title",
				"editor",
				"thumbnail",
				"custom-fields"]
		];

		register_post_type( "exercises", $args );

	}

}
