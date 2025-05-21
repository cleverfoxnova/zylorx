<?php
/**
 * Plugin Name: Disable WooCommerce Notices
 * Description: Disable all PHP notices for WooCommerce in CLI commands
 * Version: 1.0
 */

// Only apply for WP CLI commands
if (defined('WP_CLI') && WP_CLI) {
    // Set error reporting level to suppress notices
    error_reporting(E_ALL & ~E_NOTICE);
    
    // Add filters to disable all WordPress error triggering for notices
    add_filter('deprecated_function_trigger_error', '__return_false');
    add_filter('deprecated_argument_trigger_error', '__return_false');
    add_filter('deprecated_file_trigger_error', '__return_false');
    add_filter('deprecated_hook_trigger_error', '__return_false');
    add_filter('doing_it_wrong_trigger_error', '__return_false');
    
    // Disable notice display completely
    if (!defined('WP_DEBUG_DISPLAY')) {
        define('WP_DEBUG_DISPLAY', false);
    }
}