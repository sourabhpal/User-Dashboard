<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Post');
	}

	public function add_post()
	{
		//do some database crap to insert posts
		$this->load->view('show_profile');
	}

	public function show_posts(){

	}
}

//end of main controller