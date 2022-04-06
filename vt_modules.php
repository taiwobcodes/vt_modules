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
    add_menu_page( 'Test Plugin Page', 'VT Modules', 'manage_options', 'test-plugin', 'test_init' );
    add_submenu_page('test-plugin', 'Homepage Setup', 'HomePage Setup', 'manage_options', 'my-menu', 'my_menu' );
    add_submenu_page('test-plugin', 'Submenu Page Title2', 'Whatever You Want2', 'manage_options', 'my-menu2', 'my_menu2' );
    add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}

function register_my_cool_plugin_settings() {
	//register our settings
	register_setting( 'my-cool-plugin-settings-group', 'new_option_name' );
	register_setting( 'my-cool-plugin-settings-group', 'some_other_option' );
	register_setting( 'my-cool-plugin-settings-group', 'option_etc' );
}
 
function test_init(){
    ?>
<div class="wrap">
<h1>VT Modules Settings</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'my-cool-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'my-cool-plugin-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Car</th>
        <td><input type="text" name="new_option_name" value="<?php echo esc_attr( get_option('new_option_name') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Some Other Option</th>
        <td><input type="text" name="some_other_option" value="<?php echo esc_attr( get_option('some_other_option') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Options, Etc.</th>
        <td><input type="text" name="option_etc" value="<?php echo esc_attr( get_option('option_etc') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>
}

function my_menu(){
    include_once plugin_dir_path( dirname( __FILE__ ) ) . 'vt_modules/admin/views/vt-submenu-page.php';
}

function my_menu2(){
    echo "<h1>Hello World! 11111</h1>";
}