<?php
/**
 * Plugin Name: Smart Plugin Options
 * Plugin URI: http://joydevpal.com/plugins/smart-plugin-options
 * Description: Sample plugin option for a plugin.
 * Author: Joydev Pal
 * Author URI: http://joydevpal.com
 * Version: 1.0.0
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 * Text Domain: spo
 */

require_once dirname( __FILE__ ) . '/classes/class.settings-api.php';
require_once dirname( __FILE__ ) . '/classes/class.plugin-options.php';
require_once dirname( __FILE__ ) . '/options/plugin-options-fields.php';

new Jp_Plugin_Options();