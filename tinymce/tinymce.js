function init() {
	tinyMCEPopup.resizeToInnerSize();
}

function onshortcodesubmit() {
	
	var tagtext;
	
	var on_shortcode = document.getElementById('onshortcode_panel');
	
	// who is active ?
	if (on_shortcode.className.indexOf('current') != -1) {
		var onsc_url        = document.getElementById('onsc_url').value;
		var onsc_count      = document.getElementById('onsc_count').value;
		var onsc_size       = document.getElementById('onsc_size').value;
		var onsc_callback   = document.getElementById('onsc_callback').value;
                
                if(onsc_url != '')      { onsc_url = ' href='+onsc_url; } else { onsc_url = ''; }
                if(onsc_callback != '') { onsc_callback = ' callback='+onsc_callback; } else { onsc_callback = ''; }
                
                tagtext = "[google1"+onsc_url+onsc_callback+onsc_count+onsc_size+"]"
                
        }

        if(window.tinyMCE) {
                //TODO: For QTranslate we should use here 'qtrans_textarea_content' instead 'content'
                window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, tagtext);
                //Peforms a clean up of the current editor HTML. 
                //tinyMCEPopup.editor.execCommand('mceCleanup');
                //Repaints the editor. Sometimes the browser has graphic glitches. 
                tinyMCEPopup.editor.execCommand('mceRepaint');
                tinyMCEPopup.close();
        }
	return;
}