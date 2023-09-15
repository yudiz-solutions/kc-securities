<?php
/*
Plugin Name: WP Replicate Post
Plugin URI: https://wordpress.org/plugins/wp-replicate-post
description: Create a clone of all post type...
Version: 4.1
Author: Yudiz Solutions Ltd.
Author URI: https://www.yudiz.com/
License: 
*/


// Exit if accessed directly
if (!defined('ABSPATH')) exit;

define( 'REP_POST_PLUGIN', __FILE__ );
define( 'REP_POST_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'REP_POST_URL', plugin_dir_url( REP_POST_PLUGIN_DIR ) . basename( dirname( __FILE__ ) ) . '/' );
define( 'REP_POST_PLUGIN_BASENAME', plugin_basename( REP_POST_PLUGIN ) );

require_once(REP_POST_PLUGIN_DIR.'init/functions.php');

load_plugin_textdomain( 'wp_replicate_post', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 


/*
 * Activation hook
*/
register_activation_hook(REP_POST_PLUGIN, 'checkbox_enable');

function checkbox_enable(){
	$check = array (0 => 'post',1 => 'page');
	update_option('replicate_item_enable',$check);
}