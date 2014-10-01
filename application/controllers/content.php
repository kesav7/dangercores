<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Register Controller
 *
 * Community Auth is an open source authentication application for CodeIgniter 2.2.0
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2014, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

class Content extends MY_Controller {

	/**
	 * Class constructor
	 */
	public function __construct()
	{
		parent::__construct();
        $this->load->model('content_model');
		// Force encrypted connection
		$this->force_ssl();
	}

	// --------------------------------------------------------------

	/**
	 * Registration form
	 */
	public function index()
	{
		if( $this->require_min_level(1) )
		{
		$view_data['content'] = $this->content_model->getcontent();
		$data = array(
			'title' => WEBSITE_NAME . ' - Content',
			'content' => $this->load->view( 'content/index',$view_data, TRUE )
			);
		$this->load->view( $this->template, $data );
		}
	}
	public function create()
	{
	if( $this->require_min_level(1) )
		{
	$message = $this->content_model->setContent('new');
	$view_data['message'] =$message;
	$data = array(
			'title' => WEBSITE_NAME . ' - Create Content',
			'content' => $this->load->view( 'content/content_form',$view_data, TRUE )
			);
		$this->load->view( $this->template, $data );
		}

	}
	public function edit()
	{
	if( $this->require_min_level(1) )
		{
			$content_id = $this->uri->segment(3);
			
	$view_data['content'] = $this->content_model->getsinglecontent(array('content_id'=>$content_id));
	$message = $this->content_model->setContent('edit');
	$view_data['message'] =$message;
	$data = array(
			'title' => WEBSITE_NAME . ' - Edit Content',
			'content' => $this->load->view( 'content/content_edit',$view_data, TRUE )
			);
		$this->load->view( $this->template, $data );
		}

	}
	
	

}

/* End of file register.php */
/* Location: /application/controllers/register.php */