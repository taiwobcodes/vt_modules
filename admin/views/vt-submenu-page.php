<?php
/**
 * Renders the content of the submenu page for the Acme submenu page.
 *
 * @since    1.0.0
 *
 * @package     VT
 * @subpackage  VT/admin/views
 */
?>

<div class="wrap">

	<h1>Acme Submenu Page</h1>
	<p class="description">
		Select your options from the following set of choices...
	</p>

	<form action="" method="post">
	  
		<!-- The set of option elements, such as checkboxes, would go here -->

		<?php submit_button( 'Save' ); ?>
		<?php wp_nonce_field( 'vt-submenu-page-save', 'vt-submenu-page-save-nonce' ); ?>

	</form>

</div><!-- .wrap -->