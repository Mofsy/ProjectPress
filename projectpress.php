<?php
/**
	Plugin Name: ProjectPress - управление проектами
	Plugin URI: https://mofsy.ru/projects/projectpress
	Description: Плагин добавляющий систему управления проектами на сайт под управлением WordPress.
	Version: 0.1.0.1
	Author: Mofsy
	Author URI: https://mofsy.ru
	Text Domain: projectpress
	Domain Path: /languages
	Copyright: © 2018 Mofsy
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
**/

if ( !defined( 'ABSPATH' ) )
{
	exit;
}

/**
 * Plugin Dir
 */
define( 'PROJECTPRESS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Plugin Name
 */
define( 'PROJECTPRESS_PLUGIN_NAME', plugin_basename( __FILE__ ) );

/**
 * Include the main Projectpress class.
 */
if ( !class_exists( 'Projectpress' ) )
{
	include_once PROJECTPRESS_PLUGIN_DIR . '/includes/class-projectpress.php';
}

$projectpress = Projectpress::instance();