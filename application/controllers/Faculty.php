<?php 

class Faculty extends CI_Controller 
{
		function __construct() {
	        parent::__construct();
	        $this->load->model('model_timetable');
	        //$data['rooms'] = $this->model_timetable->getRoomRows();
			if($this->session->userdata('facultydata')!='')
	       {
	       		echo 'Session Created';exit;
	       }
	       	        
	   		
	    }
		
		public function index()
		{	
			//$data['teachers'] = $this->model_timetable->getTeacherRows();


				$this->load->view('faculty/dashboard');	
		}

		private function flashAndRedirect($Successful, $successMessage,$failMessage)
		{
			if($Successful)
			{
				$this->session->set_flashdata('feedback',$successMessage);
				$this->session->set_flashdata('feedback_class','alert-success');
				return redirect('index.php/admin/dashboard');
			}
			else
			{
				$this->session->set_flashdata('feedback',$failMessage);
				$this->session->set_flashdata('feedback_class','alert-danger');
				return redirect('index.php/admin/dashboard');
			}
		}
}