<?php
/**
 * @wordpress-plugin
 * Plugin Name:      	VT Modules
 * Description:       	To manage modules settings for the Valuetainment site.
 * Version:           	1.0
 * Author:            	Taiye Babatope
 * Text Domain:       	swiper-js-slider
 * License:           	GPLv2 or later
 * License URI:       	http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: 	https://github.com/valuetainment/vt_modules
 */

add_action('admin_menu', 'test_plugin_setup_menu');
 
function test_plugin_setup_menu(){
    add_menu_page( 'Homepage', 'VT Modules', 'manage_options', 'test-plugin', 'test_init' );
    add_submenu_page('test-plugin', 'Watch Now Carousel', 'Watch Now Carousel', 'manage_options', 'my-menu', 'my_menu' );
    add_submenu_page('test-plugin', 'VTMerch Carousel', 'VTMerch Carousel', 'manage_options', 'my-menu2', 'my_menu2' );
    add_action( 'admin_init', 'watch_now_settings' );
    add_action( 'admin_init', 'vt_merch_settings' );
}



function watch_now_settings() {
	//register our settings
	register_setting( 'watch-now-settings-group', 'vtposts' );
	register_setting( 'watch-now-settings-group', 'vtcats' );
	register_setting( 'watch-now-settings-group', 'vtpages' );
    register_setting( 'watch-now-settings-group', 'vtavoid_posts' );
}

function vt_merch_settings (){
    //register our settings
	register_setting( 'vt-merch-settings-group', 'product1text' );
	register_setting( 'vt-merch-settings-group', 'product1url' );
	register_setting( 'vt-merch-settings-group', 'product2text' );
    register_setting( 'vt-merch-settings-group', 'product2url' );
    register_setting( 'vt-merch-settings-group', 'product3text' );
    register_setting( 'vt-merch-settings-group', 'product3url' );
    register_setting( 'vt-merch-settings-group', 'product4text' );
    register_setting( 'vt-merch-settings-group', 'product4url' );

}
 
function test_init(){
    echo "<h1>Hello World!</h1>";
}

function my_menu(){
    include_once plugin_dir_path( dirname( __FILE__ ) ) . 'vt_modules/views/watchnow.php';
}


function my_menu2(){
    include_once plugin_dir_path( dirname( __FILE__ ) ) . 'vt_modules/views/vtmerch-carousel.php';
}