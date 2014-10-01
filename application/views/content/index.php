<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Content Index
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
<h1>Content </h1>

<?php echo  anchor('content/create', 'Content Create', array( 'id' => 'create_content' ) ) ;?>
<div style="margin-top:20px;"> </div>
<ul style=" list-style:none;">
<?php foreach($content as $content_data) {?>
	<li><?php echo  anchor('content/edit/'.$content_data->content_id, $content_data->title, array( 'id' => 'edi' ) ) ;?></li>
<?php }?>
</ul>