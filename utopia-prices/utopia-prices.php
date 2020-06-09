<?php
/**
 * @package utopia-prices
 */
/*
Plugin Name: Utopia prices
Plugin URI: https://agence-lilot.com/
Description: Plugin to display utopia specifics blocks (prices table : "UTOPIA_Prices")
Version: 0.0.1
Author: Simon Conan
Author URI: https://www.linkedin.com/in/simonconan/
Text Domain: utopia-prices
*/

define( 'UTOPIA_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'UTOPIA_PLUGIN_URL', esc_url( plugins_url('', __FILE__ ) ));
define( 'UTOPIA_PLUGIN_ICON', esc_url( plugins_url( 'lilot.jpg', __FILE__ ) ));

// Utopia prices table
require_once( UTOPIA_PLUGIN_PATH . 'utopia/utopia-prices-table.php' ); 
     