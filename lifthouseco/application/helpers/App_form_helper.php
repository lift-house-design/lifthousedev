<?php

function form_select($data, $val=false, $attr='', $title=false)
{
	$html = "<select $attr>";
	if($title !== false)
		$html .= "<option value=\"\">$title</option>";

	foreach($data as $i => $s)
	{
		if(is_numeric($i))
			$i = $s;
		$selected = $i == $val ? 'selected' : '';
		$html .= "<option value=\"$i\" $selected>$s</option>";
	}
	return $html."</select>";
}

if(!function_exists('form_field'))
{
	function form_field($label, $name, $type='text', $params=array())
	{
		$CI=get_instance();

		if($type=='text')
			$type='input';

		if(is_array($params))
		{
			$params['id']=$name;
			$params['name']=$name;	
		}
		
		return $CI->load->view('asides/field',array(
			'label'=>$label,
			'name'=>$name,
			'type'=>$type,
			'params'=>$params,
		),TRUE);
	}
}

function set_missing(&$array, $indexes, $make_array=false)
{
	$array = empty($array) ? array() : $array;
	$array = is_array($array) ? $array : array($array);
	foreach(explode(',',$indexes) as $i)
	{
		if(!isset($array[$i]))
			$array[$i] = false;
		if($make_array && !is_array($array[$i]))
			$array[$i] = array();
	}
}