$(function(){
	tinyMCE.PluginManager.add('stylebuttons', function(editor, url) {
	    ['pre', 'p', 'code', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'].forEach(function(name){
	        editor.addButton("style-" + name, {
	            tooltip: "Toggle " + name,
	            text: name.toUpperCase(),
	            onClick: function() { editor.execCommand('mceToggleFormat', false, name); },
	            onPostRender: function() {
	                var self = this, setup = function() {
	                    editor.formatter.formatChanged(name, function(state) {
	                        self.active(state);
	                    });
	                };
	                editor.formatter ? setup() : editor.on('init', setup);
	            }
	        })
	    });
	});
	tinymce.init({
    	selector: 'textarea[name="content"]',
	    plugins: 'code image link stylebuttons table textcolor',
	    toolbar: 'undo redo | image link table | bold italic underline forecolor backcolor | bullist numlist blockquote | alignleft aligncenter alignright alignjustify outdent indent | fontselect | fontsizeselect | style-h1 style-h2 style-h3 | code',
    	menubar: 'edit view format',
    	convert_urls: false
	});
	$('.accordion').accordion({ heightStyle: "content", collapsible: true });
	$( ".tabs" ).tabs();
});