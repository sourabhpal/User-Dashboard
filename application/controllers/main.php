<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
		$this->load->model('post');
		$this->load->model('comment');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function signin()
	{
		$this->load->view('signin');
	}

	public function signin_action(){

	}

	public function register()
	{
		$this->load->view('register');
	}

	public function register_action()
	{

	}

	public function show_users()
	{
		$this->load->view('show_users');
	}

	public function add_user()
	{
		$this->load->view('add_user');
	}

	public function add_user_action()
	{

	}

	public function edit_user()
	{
		$this->load->view('edit_user');
	}

	public function edit_user_action()
	{

	}

	public function remove_user_action()
	{

	}

	public function show_profile()
	{
		$this->load->view('show_profile');
	}

	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

}

//end of main controller