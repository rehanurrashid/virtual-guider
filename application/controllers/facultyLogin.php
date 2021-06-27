<?php

class FacultyLogin extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
		{
			
			if($this->session->userdata('facultydata')['is_logged_in'])
	        {
	        	redirect('faculty');
	        }
	        else{
			$this->load->view('faculty/faculty_login');
			}
		}

	public function admin_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','User Name','required|alpha');
		$this->form_validation->set_rules('pass','Password','required');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run())
		{
			$username = $this->input->post('uname');
			$password = $this->input->post('pass');
			// echo "Username: $username and Password: $password";

			$this->load->model('login_model','login');

			$login_id = $this->login->faculty_login($username,$password);
			if($login_id)
			{
				$login_id['is_logged_in']=true;
				
				$this->session->set_userdata('facultydata',$login_id);
				// echo '<pre>',print_r($login_id)	;exit;			
				// echo $this->session->userdata('facultydata')['is_logged_in'];exit;
				redirect('faculty');
				//authenticaiton valid
			}
			else
			{
				$this->session->set_flashdata('login_failed','Invalid Username/password'); // if username of password is incorrect display alert
				$this->load->view('faculty/faculty_login');
				//authentication InValid
			}
		}
	else
	{
		$this->load->view('faculty/faculty_login');
		// echo "Failed";
		//  echo validation_errors();
	}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect('index.php/login');
	}
}