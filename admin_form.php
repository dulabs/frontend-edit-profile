<?php
    if (!defined('FEP')) {
        exit;
    }
?>
<div  class="postbox-container" style="width: 70%">

<div class="wrap">
			<h2>Frontend Edit Profile</h2>
			<hr />
			<h3><?php _e('General Settings', 'fep'); ?></h3>
			<form action="options.php" method="post">
			 <?php settings_fields('fep_options'); ?>
			<table class="form-table">
				<tr>
					<th scope="row">
						<label for="fep_biographical">
							<?php _e('Show Biographical Info', 'fep'); ?>
						</label>
					</th>
					<td>
						<input type="checkbox" value="on" id="fep_biographical" name="fep_biographical"<?php echo $biographical; ?>/>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="pass_indicator"><?php _e('Show Password Indicator', 'fep'); ?></label></th>
					<td><input type="checkbox" value="on" id="pass_indicator" name="fep_pass_indicator"<?php echo $pass_indicator; ?>/></td>
				</tr>
				<tr>
					<th scope="row"><label for="pass_hint"><?php _e('Show Password Hint', 'fep'); ?></label></th>
					<td><input type="checkbox" value="on" id="pass_hint" name="fep_pass_hint"<?php echo $pass_hint; ?>/></td>
				</tr>
				<tr>
					<th ><label for="custom_pass_hint"><?php _e('Custom Password Hint', 'fep'); ?></label></th>
					<td valign="top">
						<input type="checkbox" value="on" id="fep_custom_pass_hint" name="fep_custom_pass_hint"<?php echo $custom_pass_hint; ?>/>
					</td>
				</tr>
				<tr>
					<th scope="row" valign="top"><label for="pass_hint"><?php _e('Password Hint', 'fep'); ?></label></th>
					<td valign="top">
						<textarea name="fep_text_pass_hint" id="fep_text_pass_hint" rows="5" cols="40"><?php echo get_option('fep_text_pass_hint')?></textarea>				
					</td>
				</tr>
			</table>
			<h3 class="title"><?php _e('Authentication', 'fep'); ?></h3>
			<table class="form-table">
				<tr>
					<th scope="row" valign="top"><label for="fep_notlogin"><?php _e('Not Logged in Text', 'fep'); ?></label></th>
					<td valign="top"><textarea id="fep_notlogin" name="fep_notlogin" rows="5" cols="40"><?php echo get_option('fep_notlogin'); ?></textarea></td>
				</tr>
				<tr>
					<th scope="row"><label for="login_form"><?php _e('Show Login Form', 'fep'); ?></label></th>
					<td><input type="checkbox" value="on" id="login_form" name="fep_loginform"<?php echo $login_form; ?>/></td>
				</tr>
				<tr>
					<th scope="row"><label for="override_logouturl"><?php _e('Override Logout Url', 'fep'); ?></label></th>
					<td><input type="checkbox" value="on" id="override_logouturl" name="fep_override_logouturl"<?php echo $override_logouturl; ?>/></td>
				</tr>
				<tr>
					<th scope="row"><label for="fep_logouturl"><?php _e('Logout URL', 'fep'); ?></label></th>
					<td><input type="text" id="fep_logouturl" name="fep_logouturl" value="<?php echo esc_attr(get_option('fep_logouturl')); ?>" style="width: 60%;" /></td>
				</tr>
				<tr>
					<th scope="row"><label for="override_loginurl"><?php _e('Override Login Url', 'fep'); ?></label></th>
					<td><input type="checkbox" value="on" id="override_loginurl" name="fep_override_loginurl"<?php echo $override_loginurl; ?>/></td>
				</tr>
				<tr>
					<th scope="row"><label for="fep_loginurl"><?php _e('Login URL', 'fep'); ?></label></th>
					<td>
						<input type="text" id="fep_loginurl" name="fep_loginurl" value="<?php echo esc_attr(get_option('fep_loginurl')); ?>" />
						<?php _e('or page', 'fep'); ?>&nbsp;
						<select name="fep_loginpage">
							<?php 
                                foreach ($pages as $page):
                                    $selected = ($page->ID == $loginpage) ? 'selected="selected"' : '';
                            ?>
								<option value="<?php echo $page->ID; ?>"<?php echo $selected; ?>><?php echo $page->post_title; ?></option> 
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="override_lostpasswordurl"><?php _e('Override Lost Password Url', 'fep'); ?></label></th>
					<td><input type="checkbox" value="on" id="override_lostpasswordurl" name="fep_override_lostpasswordurl"<?php echo $override_lostpasswordurl; ?>/></td>
				</tr>
				<tr>
					<th scope="row"><label for="fep_lostpasswordurl"><?php _e('Lost Password URL', 'fep'); ?></label></th>
					<td>
						<input type="text" id="fep_lostpasswordurl" name="fep_lostpasswordurl" value="<?php echo esc_attr(get_option('fep_lostpasswordurl')); ?>" />
						<?php _e('or page', 'fep'); ?>&nbsp;
						<select name="fep_lostpasswordpage">
							<?php 
                                foreach ($pages as $page):
                                    $selected = ($page->ID == $lostpasswordpage) ? 'selected="selected"' : '';
                            ?>
								<option value="<?php echo $page->ID; ?>"<?php echo $selected; ?>><?php echo $page->post_title; ?></option> 
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="override_registerurl"><?php _e('Override Register Url', 'fep'); ?></label></th>
					<td><input type="checkbox" value="on" id="override_registerurl" name="fep_override_registerurl"<?php echo $override_registerurl; ?>/></td>
				</tr>
				<tr>
					<th scope="row"><label for="fep_registerurl"><?php _e('Register URL', 'fep'); ?></label></th>
					<td>
						<input type="text" id="fep_registerurl" name="fep_registerurl" value="<?php echo esc_attr(get_option('fep_registerurl')); ?>" />
						<?php _e('or page', 'fep'); ?>&nbsp;
						<select name="fep_registerpage">
							<?php 
                                foreach ($pages as $page):
                                    $selected = ($page->ID == $registerpage) ? 'selected="selected"' : '';
                            ?>
								<option value="<?php echo $page->ID; ?>"<?php echo $selected; ?>><?php echo $page->post_title; ?></option> 
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="fep_profilepage"><?php _e('Profile Page', 'fep'); ?></label></th>
					<td>
						<select name="fep_profilepage">
							<?php 
                                $profilepage = get_option('fep_profilepage');
                                foreach ($pages as $page):
                                    $selected = ($page->ID == $profilepage) ? 'selected="selected"' : '';
                            ?>
								<option value="<?php echo $page->ID; ?>"<?php echo $selected; ?>><?php echo $page->post_title; ?></option> 
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
			</table>
			
			<h3 class="title"><?php _e('Disable Contact Methods', 'fep'); ?></h3>
			<em><?php _e('Click to disable contact methods in profile page', 'fep'); ?></em>
		
			<table class="widefat fixed">
				<?php
                    foreach (_wp_get_user_contactmethods() as $name => $desc) {
                        if (in_array($name, $contact_methods)) {
                            $checked = ' checked="checked"';
                        } else {
                            $checked = ' ';
                        }
                        ?>
				<tr>
					<th scope="row"><label for="fep_contactmethod_<?php echo $name;
                        ?>"><?php echo apply_filters('user_'.$name.'_label', $desc);
                        ?></label></th>
					<td><input type="checkbox" name="fep_contact_methods[]" id="fep_contactmethod_<?php echo $name;
                        ?>" value="<?php echo $name;
                        ?>" <?php echo $checked;
                        ?> /></td>
				</tr>
				<?php

                    }
                ?>
			</table>
			  <p class="submit">
			  <input type="submit" name="submit" class="button-primary" value="<?php _e('Save Changes', 'fep'); ?>" />
			  </p>
			</form>	
		</div>

</div>

	<div class="postbox-container" style="width: 25%;">
		<div class="metabox-holder">
			<div class="meta-box-sortables ui-sortable">
				<div id="fep-subscribe" class="postbox">
					<div class="handlediv" title="Click to toggle">
					</div>
					<h3 class="hndle">
						<span>Subscribe to get latest development version
						</span></h3>
					<div class="inside">
						<div class="frame list">
							
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//dulabs.us12.list-manage.com/subscribe/post?u=7a2eb656fcf4ca94aa0b765ec&amp;id=1ce72ea2b9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7a2eb656fcf4ca94aa0b765ec_1ce72ea2b9" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
