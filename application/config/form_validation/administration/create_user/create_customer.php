<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Form Validation Rules for Customer Creation
 *
 * Community Auth is an open source authentication application for CodeIgniter 2.2.0
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2014, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

$config['customer_creation_rules'] = array(
	array(
		'field' => 'user_name',
		'label' => 'USERNAME',
		'rules' => 'trim|required|alpha_numeric|max_length['. MAX_CHARS_4_USERNAME .']|min_length['. MIN_CHARS_4_USERNAME .']|external_callbacks[model,formval_callbacks,_username_check]'
	),
	array(
		'field' => 'user_pass',
		'label' => 'PASSWORD',
		'rules' => 'trim|required|external_callbacks[model,formval_callbacks,_check_password_strength,TRUE]'
	),
	array(
		'field' => 'user_email',
		'label' => 'EMAIL ADDRESS',
		'rules' => 'trim|required|max_length[255]|valid_email|external_callbacks[model,formval_callbacks,_email_exists_check]'
	)
);

/* End of file create_customer.php */
/* Location: /application/config/form_validation/administration/create_user/create_customer.php */