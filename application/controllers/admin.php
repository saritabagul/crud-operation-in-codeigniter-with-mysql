<?php

class Admin extends MY_Controller{

	public function dashboard()
	{
		$articles = $this->articles->articles_list();

		$this->load->view('admin/dashboard',['articles'=>$articles]);  
	}

	public function add_article(){
	
			$this->load->view('admin/add_article');
	
		

	}

	public function store_article()
	{
		
		$this->load->library('form_validation');
		if($this->form_validation->run('add_article_rules')){
			$post = $this->input->post();

			unset($post['submit']);

			return $this->_flashAndRedirect(
			$this->articles->add_article($post),
			"Article Add successfully",
			"Failed To Add"

		);
						
		}
		else{
			$this->load->view('admin/add_article');		
		}
	}


	public function edit_article($article_id){ 

		
		$article = $this->articles->find_article($article_id);
		$this->load->view('admin/edit_article',['article'=>$article]);
		
	}

	public function update_article($article_id)
	{
		$this->load->library('form_validation');
		if($this->form_validation->run('add_article_rules')){
			$post = $this->input->post();

			unset($post['submit']);
		
			return $this->_flashAndRedirect(
			$this->articles->update_article($article_id,$post),
			"Article Updated successfully",
			"Failed To Update"

		);
		
		}
		else{
			$this->load->view('admin/edit_article');
			
		}

	}


	public function delete_article(){
		
		$article_id = $this->input->post('article_id');
		
		return $this->_flashAndRedirect(
			$this->articles->delete_article($article_id),
			"Article Deleted successfully",
			"Failed To Delete"

		);
	}


	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_id'))
		{
			return redirect('login');
		}
		$this->load->model('articlesmodel','articles');
	}

	private function _flashAndRedirect($successful,$successMessage,$failureMessage)
	{
		if($successful)
		{
			$this->session->set_flashdata('feedback',$successMessage);
			$this->session->set_flashdata('feedback_class','alert-success');
		}else{
			$this->session->set_flashdata('feedback',$failureMessage);
			$this->session->set_flashdata('feedback_class','alert-danger');
		}
		return redirect('admin/dashboard');

	}
}


?>