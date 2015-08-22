<?php 
	class Comment extends CI_Model{
		function get_all_comments_by_post_id($post_id)
		{
		 return $this->db->query("SELECT * FROM comments where post_id = ?", array($post_id))->result_array();
		}
		function get_comment_by_id($comment_id)
		{
		 return $this->db->query("SELECT * FROM comments WHERE id = ?", array($comment_id))->row_array();
		}
		function add_comment_to_post($comment, $post_id)
		{
		 $query = "INSERT INTO comments (user_id, post_id, comment, created_at) VALUES (?, ?,?,?)";
		 $values = array($comment['user_id'], $post_id, $comment['comment'], NOW()); 
		 return $this->db->query($query, $values);
		} 
	}
 ?>