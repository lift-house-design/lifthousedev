<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
/* For CMS */
class Content_model extends App_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function update($name, $content)
	{
		$res = $this->db->where('name',$name)->select('name')->get('content')->row_array();
		if(!$res)
			$this->db->insert('content', array('name'=>$name,'content'=>$content));
		else
			$res = $this->db->where('name',$name)->update('content',array('content'=>$content));
	}

	public function get($name)
	{
		$res = $this->db->where('name',$name)->select('content')->get('content')->row_array();
		if(!$res)
			return '';
		return $res['content'];
	}
	public function get_all()
	{
		$res = $this->db->get('content')->result_array();
		return $res;
	}
}