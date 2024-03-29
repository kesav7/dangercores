<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Create User View
 *
 * Community Auth is an open source authentication application for CodeIgniter 2.2.0
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2014, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */
 ?>
	<div id="page-wrapper" >
            <div class="row">
                <div class="col-lg-12">
                   <?php echo '<h1 class="page-header">' . ( isset( $type ) ? ucfirst( $type ) . ' Creation' : 'User Creation' ) . '</h1>'; ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?php

if( isset( $validation_passed, $user_created ) )
{
	echo '
		<div class="alert alert-success">
			<p class="feedback_header">
				The new ' . $type . ' has been successfully created.
			</p>
		</div>
	';
}
else if( isset( $validation_errors ) )
{
	echo '
		<div class="alert alert-danger">
			<p class="feedback_header">
				' . ucfirst( $type ) . ' Creation Contained The Following Errors:
			</p>
			<ul>
				' . $validation_errors . '
			</ul>
			<p>
				' . strtoupper( $type ) . ' NOT CREATED
			</p>
		</div>
	';
}

if( isset( $level, $type ) )
{
	echo $user_creation_form;
}
else
{
	
	
	echo '
		<p>Please choose a user type to create:</p>
		<ul class="std-list">
	';

	foreach( $roles as $k => $v )
	{
		if( $k < $auth_level )
		{
			echo '<li>' . secure_anchor( 'administration/create_user/' . $v, $v ) . '</li>';
		}
	}

	echo '</ul>';
}
?>
</div>
<?php
/* End of file create_user.php */
/* Location: /application/views/administration/create_user.php */ ?>