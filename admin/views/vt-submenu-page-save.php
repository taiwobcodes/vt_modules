<?php

add_action( 'load-tools_page_vt-submenu-page', 'vt_save_options' );
/**
 * The method for saving the options to the database or for deleting them
 * based on what the user has specified on the submenu page.
 *
 * @since    1.0.0
 */
function vt_save_options() {

	$action       = 'vt-submenu-page-save';
	$nonce        = 'vt-submenu-page-save-nonce';

	// If the user doesn't have permission to save, then display an error message
	if ( ! vt_user_can_save( $action, $nonce ) ) {
		return;
	}
	
    var_dump("save");

	/* Here is where you update your options. Depending on what you've implemented,
	   the code may vary, but it will generally follow something like this:
	 
	   if ( isset( $_POST['vt-your-option-name'] ) ) {
		 
			- Sanitize the code
			- update_option( $your_option_id, $your_option_value );
		
		} else {
			
			delete_option( $your_option_id );
			
		}
		
	*/

}