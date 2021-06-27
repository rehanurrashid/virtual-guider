<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeacherManagement extends CI_Controller {
	public function __construct() {
		parent::__construct();

		//form -validation
		$this->load->library('form_validation');

		$this->load->model('model_member');
	}

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

	public function create() 
	{

		$validator = array('success' => false, 'messages' => array());

		$config = array(
	    array(
        'field' => 'name',
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

			$createMember = $this->model_member->create(); 

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
	public function fetchMemberData() 
	{
		$result = array('data' => array());

		$data = $this->model_member->fetchMemberData();
		foreach ($data as $key => $value) {
			//$name = $value['fname'] . ' ' . $value['lname'];

			// button
			$buttons = '
			<div class="nav-item dropdown">
			  <button type="button" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Action <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
			    <li><a class="dropdown-item" type="button" onclick="editMember('.$value['f_id'].')" data-toggle="modal" data-target="#editMemberModal">Edit</a></li>
			    <li><a class="dropdown-item" type="button" onclick="removeMember('.$value['f_id'].')" data-toggle="modal" data-target="#removeMemberModal">Remove</a></li>			    
			  </ul>
			</div>
			';

			$result['data'][$key] = array(
				$value['f_name'],
				$value['f_email'],
				$value['f_pass'],
				$value['f_status'],
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}

	public function getSelectedMemberInfo($id) 
	{
		if($id) {
			$data = $this->model_member->fetchMemberData($id);
			echo json_encode($data);
		}
	}

	public function edit($id = null) 
	{
		if($id) {
			$validator = array('success' => false, 'messages' => array());

			$config = array(
		    array(
	        'field' => 'editname',
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

				$editMember = $this->model_member->edit($id); 

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

			$removeMember = $this->model_member->remove($id);
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
