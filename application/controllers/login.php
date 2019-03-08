<?php

class Login extends MY_Controller{

	public function index()
	{
		if($this->session->userdata('user_id')){
			return redirect('admin/dashboard');
		}
		
		$this->load->view('public/admin_login');
	}

	public function admin_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','User Name', 'required|alpha');
		$this->form_validation->set_rules('password','Password', 'required');

		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run())
		{
			//success
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('loginmodel');
			$login_id = $this->loginmodel->login_valid($username,$password);
			if($login_id){
				
				//credential valid, login user

				// $this->load->library('session');
				$this->session->set_userdata('user_id',$login_id); //user_id any name

				return redirect('admin/dashboard');
				// $this->load->view('admin/dashboard');
			}else{
				//use flashdata for displaying error msg
				$this->session->set_flashdata('login_failed',"Invalid Username and Password");

				return redirect('login');


					
			}

			


		}
		else{
			//failed
			$this->load->view('public/admin_login');

			
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}
}


?>