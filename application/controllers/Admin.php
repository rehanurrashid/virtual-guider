<?php 

class Admin extends CI_Controller 
{
	function __construct() {
        parent::__construct();
        $this->load->model('model_timetable');

   //      if (!$this->session->userdata('aid')) //if user is not logged in than redirect 
			// {
			// 	return redirect('login');
			// }
    }
		
		public function index()
		{	
			$data['teachers'] = $this->model_timetable->getTeacherRows();
			$data['rooms'] = $this->model_timetable->getRoomRows();
				$this->load->view('admin/dashboard', $data);	
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