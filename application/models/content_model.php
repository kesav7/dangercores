<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Registration_model Model
 *
 * Community Auth is an open source authentication application for CodeIgniter 2.2.0
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2014, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

class Content_model extends MY_Model {

	public $table_content = 'content';

	/* content */
	public function insertcontent($data)
	{
		$this->db->insert($this->table_content, $data); 
		return $this->db->insert_id();
	}
	public function updatecontent($data,$where=array())
	{
		if(count($where)>0)
		$this->db->where($where);
		return $this->db->update($this->table_content,$data);
	}
	public function getcontent($where=array(),$limit="",$offset="",$orderby="",$disporder="")
	{
		if(count($where)>0)
			$this->db->where($where);
        
        if($orderby!="" && $disporder!="")
            $this->db->order_by($orderby,$disporder);
        else
            $this->db->order_by("content_id","asc");
        
        if($limit!="" && $offset!="")
            $this->db->limit($limit,$offset);
        
		$result = $this->db->get($this->table_content);
     	if($result != false && $result->num_rows()>0)
			return $result->result();
		else
			return false;
	}
	public function getsinglecontent($where=array(),$limit="",$offset="",$orderby="",$disporder="")
	{
		if(count($where)>0)
			$this->db->where($where);
        
        if($orderby!="" && $disporder!="")
            $this->db->order_by($orderby,$disporder);
        else
            $this->db->order_by("content_id","asc");
        
        if($limit!="" && $offset!="")
            $this->db->limit($limit,$offset);
        
		$result = $this->db->get($this->table_content);
     	if($result != false && $result->num_rows()>0)
			return $result->row();
		else
			return false;
	}
	public function getrevisioncontent($id)
	{
	
            $this->db->where('content_id',$id);
	    	return $this->db->get($this->table_content)->row()->revision;
        
	}
	
	public function create_slug($title) {
	
	$slug = preg_replace('/[\s-]+/', '-', trim($title));
	$slug = preg_replace('/[^a-z0-9-]/', '', strtolower($slug));
	
	return $slug;
	
	}
	public function setContent($type)
	{
		$message = 'error';
		$post = $this->input->post();
		if(!empty($post))
		{
			$content_id =$this->input->post('content_id');
			if($content_id) { $revision_data = $this->getrevisioncontent($content_id);}
			if($type == 'new')
			{
			$revision = '1';
			}
			else
			{
			$revision = $revision_data+1;
			}
			$this->config->load( 'form_validation/content/content_form' );
			$this->validation_rules = config_item('content_form');
			
				if( $this->validate() )
				{
					$user_id = getUserId( );
				$insert_array = array(
				'author_id'     => $user_id,
				'slug'          => $this->create_slug(set_value('content_title')),
				'title'         => set_value('content_title'),
				'revision'      => $revision,
				'content'       =>  htmlspecialchars_decode(set_value('content_contents'))
				);
				$insert_id = $this->insertcontent($insert_array);
				if($insert_id){	$message = 'success'; }
				}
		}
		return $message;
	}
	
}

/* End of file content_model.php */
/* Location: /application/models/content_model.php */