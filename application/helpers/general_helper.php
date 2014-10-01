<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 function getUserId( )
	{
		$CI = & get_instance();		
		$auth_identifier = $CI->session->userdata('auth_identifier');
		$temp = substr( $auth_identifier , 12 );

		return substr_replace( $temp , '' , -13 );
	}
	
	function getRoles( )
	{
		$CI = & get_instance();		
		
		return $roles = $CI->authentication->roles;
			
		
	}

?>