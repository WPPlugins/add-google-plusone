(function() {
    tinymce.create('tinymce.plugins.google1plugin', {
 
        init : function(ed, url){
            
            ed.addCommand('mceonpanel', function() {
            
                    ed.windowManager.open({
                            file : url + '/dialog.php',
                            width : 450,
                            height : 200,
                            inline : 1
                    }, {
                            plugin_url : url, // Plugin absolute URL
                    });
                    
            });
            
            ed.addButton('google1plugin', {
                title   : 'Insert Google+1 Button',  
                cmd     : 'mceonpanel',              
                image   : url + "/google-plusone.png"
            });
        },
        
        // Set MCE plugin info
        getInfo : function() {
			
            return {
				
                longname : 'Add Google PlusOne',
                author : 'Noufan Studio',
                authorurl : 'http://onnayokheng.com',
                infourl : 'http://onnayokheng.com',
                version : "1.0"
				
            };
			
        } // end set info
    });
 
    tinymce.PluginManager.add('google1plugin', tinymce.plugins.google1plugin);
 
})();