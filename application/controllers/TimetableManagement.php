<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TimetableManagement extends CI_Controller {
	public function __construct() {
		parent::__construct();

		//form -validation
		$this->load->library('form_validation');

		$this->load->model('model_timetable');
	}

	public function index()
	{
		$data['teachers'] = $this->model_timetable->getCountryRows();
		$this->load->view('admin/dashboard', $data);
	}

	public function create() 
	{

		$validator = array('success' => false, 'messages' => array());

		$config = array(
	    array(
        'field' => 'time',
        'label' => 'Time',
        'rules' => 'trim|required'
	    ),
	    // array(
     //    'field' => 'age',
     //    'label' => 'Age',
     //    'rules' => 'trim|required|integer'	            
	    // ),
	    // array(
     //    'field' => 'contact',
     //    'label' => 'Contact',
     //    'rules' => 'trim|required|integer'	            
	    // )
		);

		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

		if($this->form_validation->run() === true) {

			$createMember = $this->model_timetable->create(); 

			if($createMember === true) {
				$validator['success'] = true;
				$validator['messages'] = "Successfully added";
			} else {
				$validator['success'] = false;
				$validator['messages'] = "Error while updating the infromation";
			}			
		} 
		else {
			$validator['success'] = false;
			foreach ($_POST as $key => $value) {
				$validator['messages'][$key] = form_error($key);	
			}			
		}

		echo json_encode($validator);
	}
	public function fetchTimetableData() 
	{
		$result = array('data' => array());

		$data = $this->model_timetable->fetchMemberData();
		// echo '<pre>',print_r($data),'</pre>';
		// exit();
		foreach ($data as $key => $value) {
			//$name = $value['fname'] . ' ' . $value['lname'];

			// button
			$buttons = '
			<div class="nav-item dropdown">
			  <button type="button" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Action <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
			    <li><a class="dropdown-item" type="button" onclick="editTimetable('.$value['t_id'].')" data-toggle="modal" data-target="#editTimetableModal">Edit</a></li>
			    <li><a class="dropdown-item" type="button" onclick="removeTimetable('.$value['t_id'].')" data-toggle="modal" data-target="#removeTimetableModal" >Remove</a></li>			    
			  </ul>
			</div>
			';

			$result['data'][$key] = array(
				$value['f_name'],
				$value['r_name'],
				$value['t_time'],
				$value['t_shift'],
				$value['t_section'],
				$value['t_day'],
				$value['t_course'],
				$value['t_degree'],
				$value['t_department'],
				$value['t_semester'],
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}

	public function fetchUserData() 
	{
		$result = array('data' => array());

		$data = $this->model_timetable->fetchSchedule();
		// echo '<pre>',print_r($data),'</pre>';
		// exit();
		foreach ($data as $key => $value) {
			//$name = $value['fname'] . ' ' . $value['lname'];

			$result['data'][$key] = array(
				$value['f_name'],
				$value['r_name'],
				$value['t_time'],
				$value['t_shift'],
				$value['t_section'],
				$value['t_day'],
				$value['t_course'],
				$value['t_degree'],
				$value['t_department'],
				$value['t_semester']
			);
		} // /foreach

		echo json_encode($result);
	}

	public function getSelectedMemberInfo($id) 
	{
		if($id) {
			$data = $this->model_timetable->fetchMemberData($id);
			echo json_encode($data);
		}
	}

	public function edit($id = null) 
	{
		if($id) {
			$validator = array('success' => false, 'messages' => array());

			$config = array(
		    array(
	        'field' => 'edittime',
	        'label' => 'First Name',
	        'rules' => 'trim|required'
		    )
		    // array(
	     //    'field' => 'editAge',
	     //    'label' => 'Age',
	     //    'rules' => 'trim|required|integer'	            
		    // ),
		    // array(
	     //    'field' => 'editContact',
	     //    'label' => 'Contact',
	     //    'rules' => 'trim|required|integer'	            
		    // )
			);

			$this->form_validation->set_rules($config);
			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

			if($this->form_validation->run() === true) {

				$editMember = $this->model_timetable->edit($id); 

				if($editMember === true) {
					$validator['success'] = true;
					$validator['messages'] = "Successfully updated";
				} else {
					$validator['success'] = false;
					$validator['messages'] = "Error while updating the infromation";
				}			
			} 
			else {
				$validator['success'] = false;
				foreach ($_POST as $key => $value) {
					$validator['messages'][$key] = form_error($key);	
				}			
			}

			echo json_encode($validator);
		}
	}

	public function remove($id = null)
	{
		if($id) {
			$validator = array('success' => false, 'messages' => array());

			$removeMember = $this->model_timetable->remove($id);
			if($removeMember === true) {
				$validator['success'] = true;
				$validator['messages'] = "Successfully removed";
			}
			else {
				$validator['success'] = true;
				$validator['messages'] = "Successfully removed";
			}

			echo json_encode($validator);
		}
	}

}
