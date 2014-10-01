<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Login Form View
 *
 * Community Auth is an open source authentication application for CodeIgniter 2.2.0
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2014, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */
$message ='';
if( ! isset( $on_hold_message ) )
{
	if( isset( $login_error_mesg ) )
	{
		$message = '
			  <div class="alert alert-danger">
				<p class="feedback_header">
					Login Error: Invalid Username, Email Address, or Password.
				</p>
				<p style="margin:.4em 0 0 0;">
					Username, email address and password are all case sensitive.
				</p>
			</div>
		';
	}

	if( $this->input->get('logout') )
	{
		$message = '
			<div class="alert alert-success">
				<p class="feedback_header">
					You have successfully logged out.
				</p>
			</div>
		';
	}

	// Redirect to specified page
	$redirect = $this->input->get('redirect')
		? '?redirect=' . $this->input->get('redirect') 
		: '';

	// Redirect to optional login's page
	if( $redirect == '' && isset( $optional_login ) )
	{
		$redirect = '?redirect=' . urlencode( $this->uri->uri_string() );
	}

	$login_url = USE_SSL === 1 
		? secure_site_url( LOGIN_PAGE . $redirect ) 
		: site_url( LOGIN_PAGE . $redirect );

	echo form_open( $login_url, array( 'class' => 'std-form', 'style' => 'margin-top:20px;' ) ); 
?>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php if( ! isset( $optional_login ) ){echo 'Login';}?></h3>
                    </div>
                    <div class="panel-body">
                       <?php echo $message;?>
                      
                      
                            <fieldset>
                                <div class="form-group">
                                  	<input type="text" name="login_string" id="login_string" class="form-control" placeholder="Username or Email" autocomplete="off" maxlength="255" />
                                </div>
                                <div class="form-group">
                                 <input type="password" name="login_pass" id="login_pass" class="form-control password" placeholder="Password" autocomplete="off" maxlength="<?php echo MAX_CHARS_4_PASSWORD; ?>" />
                                </div>
                                <div class="form-group">
                                <label for="show-password" class="form_label">Show Passwords</label>
			<input type="checkbox" id="show-password" />
                              </div>
								<?php
                                if( config_item('allow_remember_me') )
                                {
                                ?>
                                <div class="checkbox">
                               
                                    <label for="remember_me" class="form_label">Remember Me</label>
                                       <input type="checkbox" id="remember_me" name="remember_me" value="yes" />
                                    </label>
                                </div>
								<?php
                                }
                                ?>
                            <div class="form-group"> 
                                <p>
                                    <a href="<?php echo secure_site_url('user/recover'); ?>">
                                    Can't access your account?
                                    </a>
                                </p>
                            </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" value="Login" class="btn btn-lg btn-success btn-block" id="submit_button"  />
                                                       </fieldset>
                        
                    </div>
                </div>
            </div>
        </div>
	
</form>

<?php

	}
	else
	{
		// EXCESSIVE LOGIN ATTEMPTS ERROR MESSAGE
		echo '
			 <div class="alert alert-danger">
				<p class="feedback_header">
					Excessive Login Attempts
				</p>
				<p style="margin:.4em 0 0 0;">
					You have exceeded the maximum number of failed login<br />
					attempts that the ' . WEBSITE_NAME . ' website will allow.
				<p>
				<p style="margin:.4em 0 0 0;">
					Your access to login and account recovery has been blocked for ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes.
				</p>
				<p style="margin:.4em 0 0 0;">
					Please use the ' . secure_anchor('user/recover','Account Recovery') . ' after ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes has passed,<br />
					or ' . secure_anchor('contact','Contact') . ' ' . WEBSITE_NAME . '  if you require assistance gaining access to your account.
				</p>
			</div>
		';
	}

/* End of file login_form.php */
/* Location: /application/views/auth/login_form.php */ 
?>