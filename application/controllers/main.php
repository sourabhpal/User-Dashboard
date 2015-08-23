<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
		$this->load->model('Post');
		$this->load->model('Comment');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function show_profile($user_id)
	{
		$user = $this->User->get_user_by_id($user_id);
		$posts = $this->get_everything($user_id);		
		$user['posts'] = $posts;
		$this->load->view('show_profile', $user);
	}

	public function get_everything($user_id){
		$posts = $this->Post->get_all_posts_by_wall_id($user_id);
		$newPosts = array();
		foreach($posts as $key => $value){
				$value['comments'] = $this->Comment->get_all_comments_by_post_id($value['postID']);
				array_push($newPosts, $value);
		}
		return $newPosts;
	}

}