<div class="wrap">
	<div class="postbox">
		<h2>Login Logo Options</h2>
		<form method='post' action='options.php'>
			<?php wp_nonce_field( 'update-options' ); ?>
			<?php settings_fields( 'oizuled-login-logo-option-group' ); ?>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><strong>Enter the URL of the image you want to use for your login logo</strong>.</th>
					<td><input type="text" size="36" name="oizuled-login-logo-img" value="<?php echo get_option('oizuled-login-logo-img'); ?>" />
				</tr>
				<tr valign="top">
					<th scope="row"><strong>Enter the URL of you would like the login logo to point to.</strong><br />By default it points to <a href="http://wordpress.org" target="_blank">WordPress.org</a></th>
					<td><input type="text" size="36" name="oizuled-login-logo-link" value="<?php echo get_option('oizuled-login-logo-link'); ?>" />
				</tr>
				<tr valign="top">
					<th scope="row"><strong>Enter the text to display when you hover your mouse over the login logo.</strong><br />By default it says "Powered by WordPress".</th>
					<td><input type="text" size="36" name="oizuled-login-logo-title" value="<?php echo get_option('oizuled-login-logo-title'); ?>" />
				</tr>
				<tr valign="top">
					<th scope="row"><strong>Enter custom CSS for the login screen.</strong><br />If you are not familiar with CSS, you can leave this blank.
					<ul>
						<li><a href="http://codex.wordpress.org/Customizing_the_Login_Form#Styling_Your_Login" target="_blank">CSS options can be found by clicking here.</a></li>
					</ul>
					</th>
					<td><textarea rows="10" cols="36" name="oizuled-login-logo-css"><?php echo get_option('oizuled-login-logo-css'); ?></textarea>
				</tr>
				<tr valign="top">
					<td colspan="2"><input type="hidden" name="action" value="update" /><?php submit_button(); ?></td>
				</tr>
			</table>
		</form>
		<?php
		$oizuledlogo = get_option('oizuled-login-logo-img');
		$oizuledlink = get_option('oizuled-login-logo-link');
		$oizuledtitle = get_option('oizuled-login-logo-title');
		$oizuledcss = get_option('oizuled-login-logo-css');
		if(!empty($oizuledlogo)) { ?>
			<p>How your login logo image looks:</p>
			<a href="<?php if (!empty($oizuledlink)) { echo $oizuledlink; } else { echo "#"; } ?>">
				<img src="<?php echo $oizuledlogo; ?>" title="<?php if (!empty($oizuledtitle)) { echo $oizuledtitle; } else { echo ""; } ?>" />
			</a>	
		<?php } ?>
	</div>
	<div class="postbox">
		<p>If this plugin has helped you out at all, please consider making a donation to encourage future updates.<br />Your generosity is appreciated!</p>
			<a href="#" onclick="window.open('https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5WVZQ3MZAKTU2');">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" width="147" height="47">
			</a>
		<p>To report any issues with this plugin, please use the <a href="http://oizuled.com/contact">contact form</a>, or visit the support page on WordPress.org.</p>
		<p><a href="https://twitter.com/oizuled" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @oizuled</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></p>
	</div>
</div>