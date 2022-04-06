
<div class="wrap">
<h1>Watch Now Carousel Settings</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'watch-now-settings-group' ); ?>
    <?php do_settings_sections( 'watch-now-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">vtposts</th>
        <td><input type="text" name="vtposts" value="<?php echo esc_attr( get_option('vtposts') ); ?>" /></td>
        </tr>
         
        <tr valign="vtcats">
        <th scope="row">vtcats</th>
        <td><input type="text" name="vtcats" value="<?php echo esc_attr( get_option('vtcats') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">vtpages</th>
        <td><input type="text" name="vtpages" value="<?php echo esc_attr( get_option('vtpages') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">vtavoid_posts</th>
        <td><input type="text" name="vtavoid_posts" value="<?php echo esc_attr( get_option('vtavoid_posts') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>

