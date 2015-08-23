<?php 
	class Comment extends CI_Model{
		function get_all_comments_by_post_id($post_id)
		{
		 return $this->db->query("SELECT first_name, last_name, comments.comment, comments.created_at, post_id 
									FROM users
									JOIN comments on users.id = comments.user_id
									JOIN posts on comments.post_id = posts.id 
									WHERE post_id = ?;", array($post_id))->result_array();
		}
		
		function add_comment_to_post($comment, $post_id)
		{
		 $query = "INSERT INTO comments (user_id, post_id, comment, created_at) VALUES (?,?,?,NOW())";
		 $values = array($this->session->userdata['current_user_id'], $post_id, $comment); 
		 return $this->db->query($query, $values);
		} 
	}
 ?>