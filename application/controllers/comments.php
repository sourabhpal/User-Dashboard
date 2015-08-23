<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Comment');
	}

	public function add_comment_to_post($post_id)
	{
		$this->Comment->add_comment_to_post($this->input->post('comment'), $post_id);
		echo "comment added";
	}	
}