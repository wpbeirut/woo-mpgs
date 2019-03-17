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
 * Version:           1.0.0
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

// Make sure WooCommerce is active
if ( ! in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) return;

/**
 * Mpgs Payment Gateway
 *
 * Provides a Payment Gateway; for mpgs
 *
 * @class       WC_Gateway_Mpgs
 * @extends     WC_Payment_Gateway
 * @version     1.0.0
 * @package     WooCommerce/Classes/Payment
 * @author      SkyVerge
 */
add_action( 'plugins_loaded', 'wc_mpgs_gateway_init', 11 );

function wc_mpgs_gateway_init() {

    class WC_Gateway_Mpgs extends WC_Payment_Gateway {

        // The meat and potatoes of our gateway will go here

    } // end \WC_Gateway_Mpgs class
}