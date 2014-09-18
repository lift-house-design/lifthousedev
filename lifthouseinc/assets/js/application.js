$(function()
{
	/* custom select BS */
	if($.isFunction($.fn.customSelect) && $('select'))
	{
		$('select').customSelect();
		$('select').change(function(e){
			if($(e.target).val()){
				var $inner = $(e.target.parentNode).children('.customSelect').children('.customSelectInner');
				$inner.addClass('good');
				$(e.target).children('option[value=""]').attr('disabled','disabled');
			}
		});
		$('select').each(function(i,v){
			if($(v).val()){
				var $inner = $(v).parent().children('.customSelect').children('.customSelectInner');
				$inner.addClass('good');
				$(v).children('option[value=""]').attr('disabled','disabled');
			}
		});
	}
	
	// see notes.txt
	var _0x3db7=["\x6E\x61\x6D\x65","\x61\x74\x74\x72","\x23\x66\x6F\x72\x6D\x2D\x63\x68\x65\x63\x6B","\x6C\x65\x6E\x67\x74\x68","\x63\x68\x61\x72\x43\x6F\x64\x65\x41\x74","\x76\x61\x6C"];var i=$(_0x3db7[2])[_0x3db7[1]](_0x3db7[0]);if(i){var k=0;for(j=0;j<i[_0x3db7[3]];j++){k+=i[_0x3db7[4]](j)*j;} ;$(_0x3db7[2])[_0x3db7[5]](k);} ;
	
	$('input,textarea').placeholder();
});

/*** Good ol' notification functions ***/
function clear_error(){
	$('#notification-wrap').html('');
}
function show_error(string){
	$('#notification-wrap').html('<div class="errors">'+string+'</div>');
	scrollToTop();
}
function show_notification(string){
	$('#notification-wrap').html('<div class="notifications">'+string+'</div>');
	scrollToTop();
}

/*** No we're going places ***/
function scrollToTop(top)
{
	$("html, body").animate({ scrollTop: parseInt(top) }, {duration: 500});
}
function scrollToElement(identifier)
{
	scrollToTop($(identifier).offset().top);
}

function regexEscape(s)
{
    return s.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
}

// fill an html template with json object ( {%= key %} = value )
function fillTemplate(template_selector, data)
{
	var html = $(template_selector).html();
	$.each(data, function(i,v){
		var regex = new RegExp('{%= '+i+' %}', "g");
		html = html.replace(regex,v);
	});
	return html;
}

// add commas to template
function numberFormat(n)
{
	n = n.toString();
	n = n.split('.');
	n[0] = n[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
	return n.join('.');
}

// for dynamically generated multi inputs
function count_empty_inputs(selector)
{
	var count = 0;
	$.each($(selector), function(i,v){
		if($(v).val() == '')
			count++;
	});
	return count;
}
function remove_empty_inputs(selector)
{
	$.each($(selector), function(i,v){
		if($(v).val() == '')
			$(v).remove();
	});
}
function get_multi_vals(selector)
{
	var vals = [];
	$.each($(selector), function(i,v){
		var val = $(v).val();
		if(val !== '')
			vals.push(val);
	});
	return vals;
}

//cookie functions
function set_json_cookie(name,data)
{
	$.cookie(
		name, 
		JSON.stringify(data),
		{
			expires : 365,
			path    : '/'
   		}
   	);
}

//cookie functions
function get_json_cookie(name)
{
	var data = $.cookie(name);
	if(data === undefined)
		return data;
	return JSON.parse($.cookie(name));
}

//math stuffs
function rand(min, max)
{
	return Math.floor(Math.random() * (max - min + 1)) + min;
}