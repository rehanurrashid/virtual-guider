<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoomManagement extends CI_Controller {
	public function __construct() {
		parent::__construct();
//$data['rooms'] = $this->model_timetable->getRoomRows();
			
		//form -validation
		$this->load->library('form_validation');

		$this->load->model('model_room');

	}

	public function index()
	{
		if($this->session->userdata('facultydata')!='')
	       {
	       		echo 'Session Created';exit;
	       }
		$this->load->view('admin/dashboard');
	}

	public function create() 
	{

		$validator = array('success' => false, 'messages' => array());

		$config = array(
	    array(
        'field' => 'rname',
        'label' => 'First Name',
        'rules' => 'trim|required'
	    )
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

			$createMember = $this->model_room->create(); 

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
	public function fetchRoomData() 
	{
		$result = array('data' => array());

		$data = $this->model_room->fetchMemberData();
		foreach ($data as $key => $value) {
			//$name = $value['fname'] . ' ' . $value['lname'];

			// button
			$buttons = '
			<div class="nav-item dropdown">
			  <button type="button" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Action <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
			    <li><a class="dropdown-item" type="button" onclick="editRoom('.$value['r_id'].')" data-toggle="modal" data-target="#editRoomModal">Edit</a></li>
			    <li><a class="dropdown-item" type="button" onclick="removeRoom('.$value['r_id'].')" data-toggle="modal" data-target="#removeRoomModal">Remove</a></li>			    
			  </ul>
			</div>
			';

			$result['data'][$key] = array(
				$value['r_name'],
				$value['longitude'],
				$value['latitude'],
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}

	public function getSelectedMemberInfo($id) 
	{
		if($id) {
			$data = $this->model_room->fetchMemberData($id);
			echo json_encode($data);
		}
	}

	public function edit($id = null) 
	{
		if($id) {
			$validator = array('success' => false, 'messages' => array());

			$config = array(
		    array(
	        'field' => 'editrname',
	        'label' => 'First Name',
	        'rules' => 'trim|required'
		    )
		    //  array(
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

				$editMember = $this->model_room->edit($id); 

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

			$removeMember = $this->model_room->remove($id);
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
