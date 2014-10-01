(function ( $ ) {
    $.fn.upload = function(options ) {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var $this = $(this);
		var baseHref = document.getElementsByTagName('base')[0].href
        var settings = $.extend({
            // These are the defaults.
            textareaId: 'editor',
            url: baseHref+'server/php/',
            file_url:baseHref+'server/files/',
            ext: ['jpg', 'jpeg', 'png', 'gif'],
            allowExt:'gif|jpe?g|png|zip',
            filesDivId:'files',
            imgHeight:'200'
        }, options );
        
        $this.fileupload({
            url: settings.url,
            dataType: 'json',
            acceptFileTypes: new RegExp(settings.allowExt),
            done: function (e, data) {
                console.log(data);
                $.each(data.result.files, function (index, file) {
                    //add file to list
                    var html = "<div><span class='filename'>"+file.name+"</span>"
                    +"<span style='margin-left:10px;'><input type='hidden' name='filename[]' value='"+file.name+"'><a href='javascript:void(0);' class='remove'>Remove</a></span></div>";
                    $('#'+settings.filesDivId).append(html);
                    
                    if($( '#'+settings.textareaId ).length) {
                        //insert file into CKeditor
                        var file_url = get_file_name(file.name);
                        // get old text from CKeditor
                        var editortext=$( '#'+settings.textareaId ).html();
                        // alert(editortext);
						// add text to XKeditor
                        $( '#'+settings.textareaId ).html( editortext + file_url);		
                    }
                });
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css({
                    width:progress + '%'
                });
            }
        }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
    
        function get_file_name(str) {
            var file_name = str.toLowerCase();
            var extension = file_name.substr( (file_name.lastIndexOf('.') +1) );
            var file_url;
            if ($.inArray(extension, settings.ext) >= 0){
                file_url = '<img src="'+settings.file_url+ str+'" height="'+settings.imgHeight+'">';
            } else {
                file_url='<a href="'+settings.file_url+ str+'">'+str+'</a>';
            }
            return file_url;
        }
        
        $('#'+settings.filesDivId).on('click', '.remove',function(){
            var parent = $(this).parent().parent();
            
            var text = $('#'+settings.textareaId).val();
            
            var fname_url = '<p>'+get_file_name(parent.find('.filename').text())+'</p>';
            var newText = text.replace(fname_url,'');
            $('#'+settings.textareaId).val(newText);
//            console.log(fname_url);
//            console.log(text);
//            console.log(newText);
            parent.remove();
        });
    };
    
}( jQuery ));