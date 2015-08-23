<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Post');
		$this->load->model('User');
	}

	public function add_post($wall_id)
	{
		$post = $this->input->post();
		$this->Post->add_post($wall_id, $post);
		echo "post added";
	}
}