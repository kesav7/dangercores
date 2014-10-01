<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Form Validation Rules for Content Form
 *
 * Community Auth is an open source authentication application for CodeIgniter 2.2.0
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2014, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

$config['content_form'] = array(
	array(
		'field' => 'content_title',
		'label' => 'TITLE',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'content_contents',
		'label' => 'CONTENT',
		'rules' => 'trim|required'
	)
);

/* End of file content_form.php */
/* Location: /application/config/form_validation/content/content_form.php */