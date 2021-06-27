<?php 

/**
* 
*/
class Model_Member extends CI_Model
{
	public function create() 
	{
		$data = array(
			'f_name' => $this->input->post('name'),
			'f_email' => $this->input->post('email'),
			'f_pass' => $this->input->post('pass'),
			'f_status' => $this->input->post('status')
		);
		 
		$sql = $this->db->insert('faculty', $data);

		if($sql === true) {
			return true; 
		} else {
			return false;
		}
	} // /create function

	public function edit($id = null) 
	{
		if($id) {
			$data = array(
				'f_name' => $this->input->post('editname'),
				'f_email' => $this->input->post('editemail'),
				'f_pass' => $this->input->post('editpass'),
				'f_status' => $this->input->post('editstatus')
			);

			$this->db->where('f_id', $id);
			$sql = $this->db->update('faculty', $data);

			if($sql === true) {
				return true; 
			} else {
				return false;
			}
		}
			
	}

	public function fetchMemberData($id = null) 
	{
		if($id) {
			$sql = "SELECT * FROM faculty WHERE f_id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM faculty";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function remove($id = null) {
		if($id) {
			$sql = "DELETE FROM faculty WHERE f_id = ?";
			$query = $this->db->query($sql, array($id));

			// ternary operator
			return ($query === true) ? true : false;			
		} // /if
	}
	
}