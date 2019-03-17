<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/wpbeirut/woo-mpgs
 * @since             1.0.0
 * @package           MPGS_WPBeirut
 *
 * @wordpress-plugin
 * Plugin Name:       MPGS for WooCommerce
 * Plugin URI:        https://github.com/wpbeirut/woo-mpgs
 * Description:       WordPress Beiurt Community MPGS - WooCommerce plugin
 * Version:           2.0.0
 * Author:            Wordpress Beirut Commpunity
 * Author URI:        https://www.meetup.com/Beirut-WordPress-Meetup/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mpgs-wpbeiurt
 * Domain Path:       /languages
 * Requires at least: 4.4
 * Tested up to: 5.0.3
 */

// If this file is called directly, abort.
if (!defined( 'WPINC')) {
    die;
}