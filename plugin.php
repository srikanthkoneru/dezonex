<?php
/**
 * The plugin bootstrap file
 *
 * @link              domainy.com
 * @since             1.0.0
 * @package           dezonex
 *
 * @wordpress-plugin
 * Plugin Name:       dezonex Plus
 * Plugin URI:        http://domainy.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            AuthorName
 * Author URI:        domainy.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dezonex
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Autoloader
 */
require_once 'vendor/autoload.php';

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'dezonex_PLUS_NAME', 'dezonex-plus' );
define( 'dezonex_PLUS_VERSION', '1.0.0' );
define( 'dezonex_PLUS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'dezonex_PLUS_PLUGIN_URL', plugins_url( '', __FILE__ ) );

register_activation_hook(
	__FILE__,
	function() {
		\dezonex\Plugin::activate();
	}
);
register_deactivation_hook(
	__FILE__,
	function() {
		\dezonex\Plugin::deactivate();
	}
);

/**
 * Begins execution of the plugin.
 */
new \dezonex\Plus();

