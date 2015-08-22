<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Comment');
	}

	public function add_comment()
	{
		//do some crap with the database to insert the comment.
		$this->load->view('show_profile');
	}

	public function show_comments_by_post_id($id)
	{
		$this->load->view('show_profile');
	}
	
}