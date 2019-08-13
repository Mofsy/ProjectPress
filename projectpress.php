<?php
/**
 * Plugin Name: ProjectPress - projects manager
 * Plugin URI: https://mofsy.ru/projects/projectpress
 * Description: Плагин добавляющий систему управления проектами на сайт под управлением WordPress.
 * Version: 0.1.0.1
 * Author: Mofsy
 * Author URI: https://mofsy.ru
 * Text Domain: projectpress
 * Domain Path: /languages
 * Copyright: 2018-2019 © Oleg Budrin (Mofsy)
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package Projectpress
**/

if ( ! defined( 'ABSPATH' ) )
{
	exit;
}

/**
 * Plugin Dir
 */
if ( ! defined( 'PROJECTPRESS_PLUGIN_DIR' ) )
{
	define( 'PROJECTPRESS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

/**
 * Plugin Name
 */
if ( ! defined( 'PROJECTPRESS_PLUGIN_NAME' ) )
{
	define( 'PROJECTPRESS_PLUGIN_NAME', plugin_basename( __FILE__ ) );
}

/**
 * Include the main Projectpress class.
 */
if ( !class_exists( 'Projectpress' ) )
{
	include_once PROJECTPRESS_PLUGIN_DIR . '/includes/class-projectpress.php';
}

/**
 * Main instance of Projectpress.
 * Returns the main instance of ProjectPress to prevent the need to use globals.
 *
 * @return Projectpress
 */
function projectpress()
{
	return Projectpress::instance();
}

/**
 * Run
 */
$projectpress = projectpress();