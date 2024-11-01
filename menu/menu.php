<?php

// create custom plugin settings menu
add_action('admin_menu', 'couponica_create_menu');

function couponica_create_menu() {

	//create new top-level menu
	add_dashboard_page('WpCode.net Couponica | Settings', 'WpCode Couponica', '8', __FILE__, 'couponica_settings_page',WP_PLUGIN_URL .'/login-logo-customization/images/llc.png');
    //add_submenu_page(__FILE__, 'Login Logo Customization | Settings', 'Default Settings', '8', llc_settings_page);
    //add_submenu_page(__FILE__, 'Simple Website Screenshot | Details', 'Details', 8, WP_PLUGIN_DIR .'/wordpress-simple-website-screenshot/doc/details.php');
    //add_submenu_page(__FILE__, 'Login Logo Customization | Usage', 'Plugin Homepage', 8, WP_PLUGIN_DIR .'/wp-simple-website-screenshot/plugin_page.php');
	//call register settings function
	add_action( 'admin_init', 'register_couponicasettings' );
}


function register_couponicasettings() {
	//register our settings
	register_setting( 'couponica-settings-group', 'edit_link' );
	register_setting( 'couponica-settings-group', 'edit_logo' );
	register_setting( 'couponica-settings-group', 'wordpress' );
	register_setting( 'couponica-settings-group', 'custom_message' );
}

function couponica_settings_page() {

?>
<div class="wrap">
<h2>WpCodeNet Couponica | Settings Page</h2>

<h3><?php _e('How to Use <em>Couponica</em>:')?></h3>

--> <?php _e('You can insert Shortcode [couponica] into your post')?><br />
--> <?php _e('You can insert')?> "<em>&lt;?php if(function_exists('couponica')) { couponica(); } ?&gt;</em>" <?php _e('into your single.php or wherever you want <b>into your wordpress loop</b>')?>
<br /><br />
<h3><?php _e('Custom Fields Needed') ?></h3>

--> <?php _e('Name: "couponica_code" -> Value "Your Coupon Code"')?><br />
--> <?php _e('Name: "couponica_link" -> Value:"Link where apply your coupon code"')?><br />
--> <?php _e('Live Demo:')?> --> <a href="http://hostcoupon.biz" target="_blank">Hosting Coupon</a>
<p style="float:right;margin-left:15px"><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="Z2HB86TG9VGLN">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="item_name" value="Pigi - Simple Website Screenshot">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
<input type="image" src="https://www.paypal.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypal.com/it_IT/i/scr/pixel.gif" width="1" height="1">
</form>
<br />
</p>


<h3><?php _e('Customize your Message after click/copy coupon')?></h3>
<form method="post" action="options.php">
    <?php settings_fields( 'couponica-settings-group' ); ?>
    
    <table class="form-table">
               
      <tr valign="top">
        <th scope="row"><?php _e('Custom Message after coupon Click/Copy'); ?></th>
        <td><textarea rows="3" cols="28" name="custom_message" value="<?php echo get_option('custom_message'); ?>"> <?php echo get_option('custom_message'); ?></textarea></td>
        <td><?php _e('Will be append text: "<em>Powered by: WpCode.net Couponica</em>"'); ?></td>
        </tr> 
    </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>

<h2>Share:</h2>
Please Share <em>WpCodeNet Couponica</em> Post <br />
<a name="fb_share" type="box_count" share_url="http://www.wpcode.net/wpcode-couponica-v-0-1b.html" href="http://www.facebook.com/sharer.php">Share "Couponica" on Facebook</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
<script type="text/javascript">
tweetmeme_url = 'http://www.wpcode.net/wpcode-couponica-v-0-1b.html';
</script>
<script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
<?php }?>