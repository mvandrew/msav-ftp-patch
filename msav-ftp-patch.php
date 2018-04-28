<?php
/**
 * Plugin Name:     Files update without FTP access
 * Plugin URI:      https://github.com/mvandrew/msav-ftp-patch
 * Version:         1.0.0
 * Description:     WordPress plugin providing direct access to CMS folders without recurring FTP credential prompts, and allows auto-updates of your files to happen.
 * Author:          Andrey Mishchenko
 * Tested up to:    4.8
 * Author URI:      http://www.msav.ru/
 * Text Domain:     msav-ftp-patch
 * Domain Path:     /languages/
 * License: GNU     General Public License v2 or later
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package         msav-ftp-patch
 * @author          Andrey Mishchenko
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

// ------------------------------------------
// Define Plugin Text Domain
// ------------------------------------------
define( 'MSAV_FTP_PATCH__TEXT_DOMAIN',              'msav-ftp-patch' );


// ------------------------------------------
// Determining the plugin version.
// ------------------------------------------
require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
$plugin_data = get_plugin_data( __FILE__ );
define( 'MSAV_FTP_PATCH__VERSION',                  $plugin_data['Version']);


// ------------------------------------------
// Plugin Paths
// ------------------------------------------
define( 'MSAV_FTP_PATCH__PLUGIN_DIR',               dirname( __FILE__ ) );
define( 'MSAV_FTP_PATCH__INCLUDES_DIR',             MSAV_FTP_PATCH__PLUGIN_DIR . '/includes' );
define( 'MSAV_FTP_PATCH__LANGUAGES_DIR',            MSAV_FTP_PATCH__PLUGIN_DIR . '/languages' );
define( 'MSAV_FTP_PATCH__CLASSES_DIR',              MSAV_FTP_PATCH__INCLUDES_DIR . '/classes' );


// ------------------------------------------
// Include helper classes
// ------------------------------------------
require_once ( MSAV_FTP_PATCH__CLASSES_DIR . '/class-msav-ftp-patch.php' );


// ------------------------------------------
// Include hooks file
// ------------------------------------------
require_once ( MSAV_FTP_PATCH__INCLUDES_DIR . '/plugin-hooks.php' );
