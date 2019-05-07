<?php
/**
 * Plugin Name: MAS Videos
 * Plugin URI: https://github.com/madrasthemes/masvideos
 * Description: This is a free plugin that allows you to to create and list movies, videos and TV shows.
 * Version: 1.0.2
 * Author: MadrasThemes
 * Author URI: https://madrasthemes.com/
 * Requires at least: 5.0
 * Tested up to: 5.1.1
 *
 * Text Domain: masvideos
 * Domain Path: /languages/
 *
 * @package MasVideos
 * @category Core
 * @author Madras Themes
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Define MASVIDEOS_PLUGIN_FILE.
if ( ! defined( 'MASVIDEOS_PLUGIN_FILE' ) ) {
    define( 'MASVIDEOS_PLUGIN_FILE', __FILE__ );
}

// Include the main MasVideos class.
if ( ! class_exists( 'MasVideos' ) ) {
    include_once dirname( MASVIDEOS_PLUGIN_FILE ) . '/includes/class-masvideos.php';
}

/**
 * Unique access instance for MasVideos class
 */
function MasVideos() {
    return MasVideos::instance();
}

// Global for backwards compatibility.
$GLOBALS['masvideos'] = MasVideos();