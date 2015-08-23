<?php 
	class Post extends CI_Model{
		function get_all_posts_by_wall_id($user_id)
		{
		 return $this->db->query("SELECT posts.id as postID, post, first_name, last_name, posts.created_at as created_at
		 						FROM posts join users on posts.user_id = users.id 
		 						WHERE wall_id = ?", array($user_id))->result_array();
		}
		function add_post($wall_id, $post)
		{
		 $query = "INSERT INTO posts (user_id, post, wall_id, created_at) VALUES (?,?,?,NOW())";
		 $values = array($this->session->userdata['current_user_id'], $post['post'], $wall_id); 
		 return $this->db->query($query, $values);
		} 
		function delete_post_by_id($post_id)
		{
			return $this->db->query("DELETE FROM posts WHERE id = ?", $post_id);	
		}

	}
 ?>