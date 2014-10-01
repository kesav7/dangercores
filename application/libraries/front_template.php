<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

class CI_Front_Template {

	public $news = false;
	public function __construct(){	
		$this->CI =& get_instance();
	}
	public function load_template($data=array("content"=>"", "title"=>"", "current_menu" =>"", "view_file"=>""),$datas = array()){
		$headerdata = $data;
		$headerdata["news"] = $this->news;
		$this->CI->load->view("templates/header",$headerdata);
		$this->CI->load->view("templates/menu");
		$this->CI->load->view($data["view_file"],$datas);
		$this->CI->load->view("templates/footer");
	}
	public function login_template($data=array("content"=>"", "title"=>"", "current_menu" =>"", "view_file"=>"")){
		$headerdata = $data;
		$headerdata["news"] = $this->news;
		$this->CI->load->view("templates/header",$headerdata);
		$this->CI->load->view($data["view_file"],$data);	
		$this->CI->load->view("templates/footer");
		
	}
	
}?>