<?php
/*
 * Plugin Name: WooCommerce Custom Condition
 * Plugin URI:  https://yourwebsite.com
 * Description: Adds a custom condition taxonomy for WooCommerce products.
 * Version:     1.0.0
 * Author:      Your Name
 * Author URI:  https://yourwebsite.com
 * Text Domain: woocommerce-custom-condition
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Define constants
define('WC_CUSTOM_CONDITION_VERSION', '1.0.0');
define('WC_CUSTOM_CONDITION_PATH', plugin_dir_path(__FILE__));
define('WC_CUSTOM_CONDITION_URL', plugin_dir_url(__FILE__));

// Include the core classes
include_once WC_CUSTOM_CONDITION_PATH . 'includes/class-wc-condition-taxonomy.php';
include_once WC_CUSTOM_CONDITION_PATH . 'includes/class-wc-condition-frontend.php';

// Initialize the plugin
function wc_custom_condition_init() {
    WC_Condition_Taxonomy::init();
    WC_Condition_Frontend::init();
}

add_action('plugins_loaded', 'wc_custom_condition_init');
