<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}

	public function signin()
	{
		$this->load->view('signin');
	}

	public function signin_action(){
		$user = $this->User->get_user($this->input->post());
		if($user){
			$this->session->set_userdata('user_level', $user['user_level']);
			$this->session->set_userdata('LoggedIn', true);
			$this->session->set_userdata('current_user_id', $user['id']);
			$this->show_users();
		}
		else{
			$this->session->set_userdata('error', 'No matching record found!');
			$this->signin();
		}
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function register_action()
	{
		$this->User->add_user($this->input->post());
		//add logic to check if the query insertion was successful, maybe show success message alert
		if($this->session->userdata('LoggedIn')){
			$this->show_users();
		}
		else{
			$this->signin();
		}
	}

	public function show_users()
	{
		$users = array("users" => $this->User->get_all_users());
		$id = array();
		$first_name = array();
		$last_name = array();
		$email = array();
		$created_at = array();
		$user_level = array();
		$description = array();
		foreach($users as $key => $value){
			foreach($value as $v){
				array_push($id, $v['id']);
				array_push($first_name, $v['first_name']);
				array_push($last_name, $v['last_name']);
				array_push($email, $v['email']);
				array_push($created_at, $v['created_at']);
				array_push($user_level, $v['user_level']);
				array_push($description, $v['description']);
			}
		}
		$u = array(
			"id" => $id,
			"first_name" => $first_name,
			"last_name" => $last_name,
			"email" => $email,
			"created_at" => $created_at,
			"user_level" => $user_level,
			"description" => $description
			);
		$this->load->view('show_users', $u);
	}

	public function add_user()
	{
		$this->load->view('add_user');
	}

	public function add_user_action()
	{
		$this->User->add_user($this->input->post());
		//add logic to check if the query insertion was successful, maybe show success message alert
		$this->show_users();
	}

	public function edit_user($user_id)
	{
		$user = $this->User->get_user_by_id($user_id);
		$this->load->view('edit_user', $user);
	}

	public function edit_user_action($user_id)
	{
		$this->User->update_user($user_id, $this->input->post());
		$this->show_users();
	}

	public function remove_user_action($user_id)
	{
		$this->User->delete_user_by_id($user_id);
		$this->show_users();
	}

	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}