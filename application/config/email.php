<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Example of setting up an SMTP config set
 * ( not used anywhere in the example application )
 */
$config['smtp_example_config'] = array(
	'protocol'     => 'smtp',
	'smtp_host'    => 'ssl://smtp.gmail.com',
	'smtp_user'    => 'kmkesavan7@gmail.com',
	'smtp_pass'    => 'goddess27',
	'smtp_port'    => '465',
	'smtp_timeout' => '5',
	'from_email'   => 'kmkesavan7@gmail.com',
	'from_name'    => 'Admin',
	'to'           => 'kesav@stallioni.com' 
);

/**
 * Admin Email Config Set
 */
$config['admin_email_config'] = array(
	'from_email' => 'kesav@stallioni.com',
	'from_name'  => WEBSITE_NAME
);

/**
 * No Reply Config Set
 */
$config['no_reply_email_config'] = array(
	'from_email' => 'no-reply@stallioni.com',
	'from_name'  => WEBSITE_NAME
);

$config['contact_form_recipient_email_address'] = 'customer-service@stallioni.com';

$config['registration_review_email_address']    = 'registration@stallioni.com';

/* End of file email.php */
/* Location: /application/config/email.php */