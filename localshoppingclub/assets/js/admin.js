$(function(){
tinymce.init({
    	selector: 'textarea[name="content"]',
	    plugins: 'code image link textcolor',
	    toolbar: 'code image link forecolor backcolor bold italic underline alignleft aligncenter alignright alignjustify fontselect fontsizeselect bullist numlist outdent indent blockquote undo redo',
    	menubar: 'edit view format',
    	convert_urls: false
	});
});