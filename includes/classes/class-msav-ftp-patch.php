<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( !class_exists('MsavFTP_Patch') ) {
	/**
	 * Class MsavFTP_Patch
	 *
	 * @author      Andrey Mishchenko
	 * @package     msav-ftp-patch
	 * @since       1.0.0
	 */
	class MsavFTP_Patch {

		/**
		 * The text domain identifier for this plugin.
		 *
		 * @since       1.0.0
		 * @var         string
		 */
		public $textdomain;

		/**
		 * The current class instance.
		 *
		 * @since       1.0.0
		 * @var         MsavFTP_Patch
		 */
		private static $INSTANCE = null;


		/**
		 * MsavFTP_Patch constructor.
		 *
		 * @since       1.0.0
		 */
		public function __construct() {

			$this->textdomain = MSAV_FTP_PATCH__TEXT_DOMAIN;

			if ( !defined('FS_CHMOD_DIR') ) {
				define( 'FS_CHMOD_DIR', 0751 );
			}

			// __construct
		}


		/**
		 * Return the current class instance.
		 *
		 * @since       1.0.0
		 * @return      MsavFTP_Patch
		 */
		public static function get_instance() {

			if (self::$INSTANCE == null) {
				self::$INSTANCE = new MsavFTP_Patch();
			}

			return self::$INSTANCE;

			// get_instance
		}


		/**
		 * Load the plugin text domain for translation.
		 *
		 * @see         load_plugin_textdomain()
		 * @since       1.0.0
		 * @return      void
		 */
		public function load_plugin_textdomain() {

			load_plugin_textdomain(
				$this->textdomain,
				false,
				MSAV_FTP_PATCH__LANGUAGES_DIR . '/'
			);

			// load_plugin_textdomain
		}


		/**
		 * Provide direct access.
		 *
		 * @since       1.0.0
		 * @param       $arg mixed
		 * @return      string
		 */
		public function provide_direct_access( $arg ) {

			return "direct";

			// provide_direct_access
		}

	}
}