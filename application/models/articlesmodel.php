<?php

class Articlesmodel extends CI_Model{


public function articles_list(){

//take user_id from session

	$user_id = $this->session->userdata('user_id');
	$q = $this->db
				->select(['title','id'])
				->where('user_id',$user_id)
				->get('articles');

return $q->result();

}

//insert article
	public function add_article($array)
	{
		return $this->db->insert('articles',$array);
	}

//fetch article for edit (per article)
	public function find_article($article_id)
	{
		$q = $this->db->select(['id','title','body'])
					->where('id',$article_id)
					->get('articles');

		return $q->row();
	}

	public function update_article($article_id, Array $article)
	{
		return $this->db
					  ->where('id',$article_id)
					  ->update('articles',$article);

		
	}

	public function delete_article($article_id)
	{
		return $this->db->delete('articles',['id'=>$article_id]);
	}

}


?>