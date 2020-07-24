<?php
/**
* Plugin Name: Cyclone Demo Importer
* Description: Import all the demos on your site
* Author: ravisakya, cyclonetheme
* Author URI: https://cyclonethemes.com/
* Version: 1.0
* License: GPL2+
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
* 
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CDI_PLUGIN_DIR_PATH' , plugin_dir_path( __FILE__ ) );
define( 'CDI_PLUGIN_DIR_URL' , plugin_dir_url( __FILE__ ) );

add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );

$my_theme = wp_get_theme();

switch ( $my_theme->Name ) {

	case 'Education Business':
		require CDI_PLUGIN_DIR_PATH . 'themes/education-business-lite/demo.php';
		break;

	case 'Education Business PRO':
		require CDI_PLUGIN_DIR_PATH . 'themes/education-business-pro/demo.php';
		break;

	case 'Green Eco Planet':
		require CDI_PLUGIN_DIR_PATH . 'themes/green-eco-planet/demo.php';
		break;

	case 'Green Eco Planet PRO':
		require CDI_PLUGIN_DIR_PATH . 'themes/green-eco-planet-pro/demo.php';
		break;

	case 'Building Construction Architecture':
		require CDI_PLUGIN_DIR_PATH . 'themes/building-construction-architecture/demo.php';
		break;

	case 'Building Construction Architecture PRO':
		require CDI_PLUGIN_DIR_PATH . 'themes/building-construction-architecture-pro/demo.php';
		break;

	case 'NGO Charity Fundraising':
		require CDI_PLUGIN_DIR_PATH . 'themes/ngo-charity-fundraising-lite/demo.php';
		break;

	case 'NGO Charity Fundraising PRO':
		require CDI_PLUGIN_DIR_PATH . 'themes/ngo-charity-fundraising-pro/demo.php';
		break;

	case 'Happy Wedding Day':
		require CDI_PLUGIN_DIR_PATH . 'themes/happy-wedding-day-lite/demo.php';
		break;

	case 'Happy Wedding Day PRO':
		require CDI_PLUGIN_DIR_PATH . 'themes/happy-wedding-day-pro/demo.php';
		break;

	case 'Professional Education Consultancy':
		require CDI_PLUGIN_DIR_PATH . 'themes/professional-education-consultancy-lite/demo.php';
		break;

	case 'Professional Education Consultancy PRO':
		require CDI_PLUGIN_DIR_PATH . 'themes/professional-education-consultancy-pro/demo.php';
		break;

	case 'Dr. Life Saver':
		require CDI_PLUGIN_DIR_PATH . 'themes/dr-life-saver-lite/demo.php';
		break;

	case 'Dr. Life Saver PRO':
		require CDI_PLUGIN_DIR_PATH . 'themes/dr-life-saver-pro/demo.php';
		break;
	
	default:
		# code...
		break;
}

add_action('admin_enqueue_scripts', 'cdi_custom_wp_admin_style');
function cdi_custom_wp_admin_style(){

	if( empty( $_GET['page'] ) || $_GET['page'] != 'pt-one-click-demo-import' ){
		return;
	}

    wp_enqueue_style( 'cdi_wp_admin_css', CDI_PLUGIN_DIR_URL . 'assets/css/admin.css' );
}

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

add_filter( 'pt-ocdi/plugin_intro_text', 'ocdi_plugin_intro_text' );
function ocdi_plugin_intro_text( $default_text ) {
    return '<br>';
}

/**
* Set Logo
*/

add_action( 'pt-ocdi/after_import', 'cdi_setup_logo' );
function cdi_setup_logo(){
	set_theme_mod( 'custom_logo' , cdi_get_attachment_by_post_name( 'logo' ) );	
}

function cdi_get_attachment_by_post_name( $post_name ){

	 $args = array(
        'posts_per_page' => 1,
        'post_type'      => 'attachment',
        'name'           => trim( $post_name ),
    );

    $get_attachment = new WP_Query( $args );

    if ( empty( $get_attachment->posts[0]->ID ) ) {
        return false;
    }

    return absint( $get_attachment->posts[0]->ID );

}