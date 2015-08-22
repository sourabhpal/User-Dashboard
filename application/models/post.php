<?php 
	class Post extends CI_Model{
		function get_all_posts()
		{
		 return $this->db->query("SELECT * FROM posts")->result_array();
		}
		function get_post_by_id($post_id)
		{
		 return $this->db->query("SELECT * FROM posts WHERE id = ?", array($post_id))->row_array();
		}
		function add_post($post)
		{
		 $query = "INSERT INTO posts (user_id, post, created_at) VALUES (?,?,?)";
		 $values = array($post['user_id'], $post['post'], NOW()); 
		 return $this->db->query($query, $values);
		} 
		function delete_post_by_id($post_id)
		{
			return $this->db->query("DELETE FROM posts WHERE id = ?", $post_id);	
		}
	}
 ?>