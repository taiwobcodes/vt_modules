
<div class="wrap">
<h1>VTMerch Settings</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'vt-merch-settings-group' ); ?>
    <?php do_settings_sections( 'vt-merch-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Product 1</th>
        <td><input type="text" name="product1text" value="<?php echo esc_attr( get_option('product1text') ); ?>" /></td>
        <td><input type="url" name="product1url" value="<?php echo esc_attr( get_option('product1url') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Product 2</th>
        <td><input type="text" name="product2text" value="<?php echo esc_attr( get_option('product2text') ); ?>" /></td>
        <td><input type="url" name="product2url" value="<?php echo esc_attr( get_option('product2url') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Product 3</th>
        <td><input type="text" name="product3text" value="<?php echo esc_attr( get_option('product3text') ); ?>" /></td>
        <td><input type="url" name="product3url" value="<?php echo esc_attr( get_option('product3url') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Product 4</th>
        <td><input type="text" name="product4text" value="<?php echo esc_attr( get_option('product4text') ); ?>" /></td>
        <td><input type="url" name="product4url" value="<?php echo esc_attr( get_option('product4url') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

    <?php $vt_cats_dump = get_option('vtcats');
var_dump($vt_cats_dump) ?>

</form>
</div>

<?php $vt_cats_dump = get_option('vtcats');
var_dump($vt_cats_dump) ?>