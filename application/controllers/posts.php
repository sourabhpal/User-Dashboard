<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
		$this->load->model('post');
		$this->load->model('comment');
	}

	public function add_post()
	{
		//do some database crap to insert posts
		$this->load->view('show_profile');
	}
}

//end of main controller