<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends App_Controller
{
	//protected $layout='layouts/administration';
	protected $authenticate = 'administrator';

	public function __construct()
	{
		$this->models[] = 'content';
		$this->models[] = 'blog';

		parent::__construct();

		$this->asides['topbar'] = 'topbar';
		$this->asides['footer'] = 'footer';
		$this->asides['notifications'] = 'notifications';
		//$this->js[] = '/plugins/tinymce/tinymce.min.js';
		$this->js[] = '/plugins/tinymce4.0.11/js/tinymce/tinymce.min.js';
		$this->min_js[] = '/plugins/fancybox2/jquery.fancybox.pack.js';
		$this->min_js[] = 'admin.js';
		$this->less_css[] = 'admin.less';
	}
	
	public function index()
	{
		$post = $this->input->post();
		if(is_array($post))
			$post = array_map('trim', $post);
		if(isset($post['action']))
		{
			if($post['action'] === 'Save Content')
			{
				$this->content->update($post['name'],$post['content']);
			}
			elseif($post['action'] === 'Save Configuration')
			{
				unset($post['action']);
				$this->configuration->save($post);
			}
		}
		$this->data['content'] = $this->content->get_all();
		$this->data['configuration'] = $this->configuration->get_all();
	}

	public function blog()
	{
		$this->authenticate = 'blogger';
		$this->data['blogs'] = $this->blog->get_all();
	}

	public function blog_add()
	{
		$this->authenticate = 'blogger';
		$this->load->library('valid');
		$post = $this->input->post();
		if(empty($post))
			redirect('/admin/blog/');
		$err = $this->valid->validate(
			$post,
			array(
				array('name',''),
				array('content','')
			)
		);
		
		
		if($err)
		{
			$this->data = array_merge($this->data, $post);
			$this->errors[] = $err;
		}
		else
		{
			$this->blog->create($post['name'], $post['content']);
			$this->notifications[] = 'Blog Posted!';
		}

		$this->blog();
		$this->view = 'admin/blog';
	}

	public function blog_edit($id)
	{
		$this->authenticate = 'blogger';
		$this->load->library('valid');
		$post = $this->input->post();
		if(empty($post))
		{
			$blog = $this->blog->get($id);
			$this->data = array_merge($this->data, $blog);
			return;
		}
		$err = $this->valid->validate(
			$post,
			array(
				array('name',''),
				array('content','')
			)
		);
		if($err)
		{
			$this->data = array_merge($this->data, $post);
			$this->data['id'] = $id;
			$this->errors[] = $err;
		}
		else
		{
			$this->db->where('id',$id)->update('blog',$post);
			$this->notifications[] = 'Changes Saved!';
		}

		$this->blog();
		$this->view = 'admin/blog';
	}

	public function blog_delete($id)
	{
		$this->authenticate = 'blogger';
		$this->db->where('id',$id)->delete('blog');
		$this->notifications[] = 'Blog Deleted!';
		$this->blog();
		$this->view = 'admin/blog';
	}
}

/* End of file administration.php */
/* Location: ./application/controllers/administration/administration.php */