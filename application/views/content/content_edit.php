<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Content Form View
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
<h1>Edit Content</h1>

<?php

	// ERROR MESSAGE OUTPUT ******************************
	if( isset( $validation_errors ) >= 1 )
	{
		echo '
			<div class="feedback error_message">
				<p class="feedback_header">
					The following content form fields contained errors:
				</p>
				<ul>
					' . $validation_errors . '
				</ul>
				
			</div>
		';
	}

	// CONFIRMATION MESSAGE - TYPE 1 *********************
	if( isset( $validation_passed ) && $message == 'success' )
	{
		echo '
			<div class="feedback confirmation">
				<p>
					Content Edited Successfully.
				</p>
			</div>
		';
	}

	

	if( ! isset( $validation_passed ) )
	{
		?>

		<?php echo form_open( '', array( 'class' => 'std-form', 'style' => 'margin-top:18px;' ) ); ?>
			<div class="form-column-left">
				<div class="form-row">

					<?php
						// TITLE LABEL AND INPUT ***********************************************
						echo form_label('Title','content_title',array('class'=>'form_label'));

						echo input_requirement('*');
						
						$input_data = array(
							'name'		=> 'content_title',
							'id'		=> 'content_title',
							'class'		=> 'form_input alpha_numeric',
							'value'		=> set_value('content_title',$content->title)
							
						);
						
						echo form_input($input_data);

					?>

				</div>
                <?php
						// CONTENT LABEL AND INPUT ***********************************************
						echo form_label('Content','content_contents',array('class'=>'form_label'));

						
					?>
                    <div class="form-row">
			       
					<div class="btn-toolbar" data-role="editor-toolbar"
				data-target="#editor">
				<div class="btn-group">
					<a class="btn btn-default dropdown-toggle" data-toggle="dropdown"
						title="Font Size"><i class="icon-text-height"></i>&nbsp;<b
						class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a data-edit="fontSize 5"><font size="5">Huge</font>
						</a>
						</li>
						<li><a data-edit="fontSize 3"><font size="3">Normal</font>
						</a>
						</li>
						<li><a data-edit="fontSize 1"><font size="1">Small</font>
						</a>
						</li>
					</ul>
				</div>
				<div class="btn-group">
					<a class="btn btn-default" data-edit="bold"
						title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i>
					</a> <a class="btn btn-default" data-edit="italic"
						title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i>
					</a> <a class="btn btn-default" data-edit="strikethrough"
						title="Strikethrough"><i class="icon-strikethrough"></i>
					</a> <a class="btn btn-default" data-edit="underline"
						title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i>
					</a>
				</div>
				<div class="btn-group">
					<a class="btn btn-default" data-edit="insertunorderedlist"
						title="Bullet list"><i class="icon-list-ul"></i>
					</a> <a class="btn btn-default" data-edit="insertorderedlist"
						title="Number list"><i class="icon-list-ol"></i>
					</a> <a class="btn btn-default" data-edit="outdent"
						title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i>
					</a> <a class="btn btn-default" data-edit="indent" title="Indent (Tab)"><i
						class="icon-indent-right"></i>
					</a>
				</div>
				<div class="btn-group">
					<a class="btn btn-default" data-edit="justifyleft"
						title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i>
					</a> <a class="btn btn-default" data-edit="justifycenter"
						title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i>
					</a> <a class="btn btn-default" data-edit="justifyright"
						title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i>
					</a> <a class="btn btn-default" data-edit="justifyfull"
						title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i>
					</a>
				</div>
				<div class="btn-group">
					<a class="btn btn-default dropdown-toggle" data-toggle="dropdown"
						title="Hyperlink"><i class="icon-link"></i>
					</a>
					<div class="dropdown-menu input-append">
						<input class="span2" placeholder="URL" type="text"
							data-edit="createLink" />
						<button class="btn" type="button">Add</button>
					</div>
				</div>

				<div class="btn-group">
					<a class="btn btn-default" data-edit="unlink"
						title="Remove Hyperlink"><i class="icon-cut"></i>
					</a> 
				</div>
				<div class="btn-group">
					<a class="btn btn-default" data-edit="undo"
						title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i>
					</a> <a class="btn btn-default" data-edit="redo"
						title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i>
					</a>
					
					<a class="btn btn-default" data-edit="html"
						title="Show source"><i class='glyphicon glyphicon-pencil'></i>
					</a>
				</div>
			</div>
			<div id="editor" class="lead"><?php echo $content->content;?></div>
			<input type='hidden' name='content_contents' id='text'/>
         
            <!-- The fileinput-button span is used to style the file input field as button -->
            <span class="btn btn-success fileinput-button">
                <i class="glyphicon glyphicon-plus"></i>
                <span>Drag and drop files...</span>
                <!-- The file input field used as target for the file upload widget -->
                <input id="fileupload" type="file" name="files[]" multiple>
            </span>
            <br>
            <br>
            <!-- The global progress bar -->
            <div id="progress" class="progress">
                <div class="progress-bar progress-bar-success"></div>
            </div>
            <!-- The container for the uploaded files -->
            <div id="files" class="files"></div>				 
                    
			</div>
				<div class="form-row">

					
                    
					<?php					
											
						echo form_hidden('content_id',$content->content_id);

					?>
				</div>
								
				
				<div class="form-row">
					<div id="submit_box">
<button value="true" name="submit" class="btn btn-primary" type="submit" onClick="$('#text').val($('#editor').cleanHtml(true));$('#submit_button').submit();">Submit</button>


					</div>
				</div>
			</div>
		</form>

	<?php
	
}
?>
