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
