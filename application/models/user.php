<?php 
class User extends CI_Model{
	function get_all_users()
	{
		return $this->db->query("SELECT * FROM users")->result_array();
	}
	function get_user($post)
	{
		$email = $post['email'];
		$password = $post['password'];
		return $this->db->query("SELECT * FROM users WHERE email = ? and password = ?", array($email, $password))->row_array();
	}
	function get_user_by_id($id)
	{
		return $this->db->query("SELECT * FROM users WHERE id = ?", array($id))->row_array();
	}
	function add_user($user)
	{
		//need to add form validation here
		if($this->get_all_users()){
			$user_level = "Normal";
		}
		else{
			$user_level = "Admin";
		}
		$query = "INSERT INTO users (first_name, last_name, email, password, user_level, created_at, updated_at) VALUES (?,?,?,?,?, NOW(), NOW())";
		$values = array($user['first_name'], $user['last_name'], $user['email'], $user['password'], $user_level); 
		return $this->db->query($query, $values);
	} 
	function delete_user_by_id($user_id)
	{
		return $this->db->query("DELETE FROM users WHERE id = ?", $user_id);	
	}
	function update_user($user_id, $info)
	{
		$userInfo = $this->get_user_by_id($user_id);
		foreach($info as $key => $value){
			$userInfo[$key] = $info[$key];
		}
		$query = "UPDATE users SET first_name = ?, last_name = ?, email = ?, description = ?, user_level = ?, password = ?, updated_at = NOW() WHERE id = ?";
		$values = array($userInfo['first_name'], $userInfo['last_name'], $userInfo['email'], $userInfo['description'], $userInfo['user_level'], $userInfo['password'], $userInfo['id']);
		return $this->db->query($query, $values);
	}
}
?>