<?php
/**
 * Registers the processing of the plugin hooks
 *
 * @author      Andrey Mishchenko
 * @since       1.0.0
 * @package     msav-ftp-patch
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * General
 */
add_action( 'filesystem_method', array(MsavFTP_Patch::get_instance(), 'provide_direct_access') );
add_action( 'plugins_loaded', array(MsavFTP_Patch::get_instance(), 'load_plugin_textdomain') );