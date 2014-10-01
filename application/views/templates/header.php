<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Template Content View
 *
 * Community Auth is an open source authentication application for CodeIgniter 2.2.0
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2014, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */
?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title><?php echo ( isset( $title ) ) ? $title : WEBSITE_NAME; ?></title>
<?php
	// Add any keywords
	echo ( isset( $keywords ) ) ? meta('keywords', $keywords) : '';

	// Add a discription
	echo ( isset( $description ) ) ? meta('description', $description) : '';

	// Add a robots exclusion
	echo ( isset( $no_robots ) ) ? meta('robots', 'noindex,nofollow') : '';
?>
<base href="<?php echo if_secure_base_url(); ?>" />

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo if_secure_base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo if_secure_base_url(); ?>css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

     <!-- Timeline CSS -->
    <link href="<?php echo if_secure_base_url(); ?>css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo if_secure_base_url(); ?>css/sb-admin-2.css" rel="stylesheet">
    
    
     <!-- DataTables CSS -->
    <link href="<?php echo if_secure_base_url(); ?>css/plugins/dataTables.bootstrap.css" rel="stylesheet">


    <!-- Morris Charts CSS -->
    <link href="<?php echo if_secure_base_url(); ?>css/plugins/morris.css" rel="stylesheet">
   
    <!-- Custom Fonts -->
    <link href="<?php echo if_secure_base_url(); ?>font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	   <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo if_secure_base_url(); ?>js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo if_secure_base_url(); ?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo if_secure_base_url(); ?>js/plugins/metisMenu/metisMenu.min.js"></script>
       

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo if_secure_base_url(); ?>js/sb-admin-2.js"></script>
    
   <?php // Add any additional stylesheets
	if( isset( $style_sheets ) )
	{
		foreach( $style_sheets as $href => $media )
		{
			echo link_tag( array( 'href' => $href, 'media' => $media, 'rel' => 'stylesheet' ) ) . "\n";
		}
	}

	/*// jQuery is always loaded
	echo script_tag( '//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' ) . "\n";*/

	// Add any additional javascript
	if( isset( $javascripts ) )
	{
		for( $x=0; $x<=count( $javascripts )-1; $x++ )
		{
			echo script_tag( $javascripts["$x"] ) . "\n";
		}
	}

	// Add anything else to the head
	echo ( isset( $extra_head ) ) ? $extra_head : '';

	// Add Google Analytics code if available in config
	if( ! empty( $tracking_code ) ) echo $tracking_code; ?>

</head>

<body>
    