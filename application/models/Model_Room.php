<?php 

/**
* 
*/
class Model_Room extends CI_Model
{
	public function create() 
	{
		$data = array(
			'r_name' => $this->input->post('rname'),
			'longitude' => $this->input->post('longi'),
			'latitude' => $this->input->post('lati')
		);
		 
		$sql = $this->db->insert('room', $data);

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
				'r_name' => $this->input->post('editrname'),
				'longitude' => $this->input->post('editlongi'),
				'latitude' => $this->input->post('editlati')
			);

			$this->db->where('r_id', $id);
			$sql = $this->db->update('room', $data);

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
			$sql = "SELECT * FROM room WHERE r_id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM room";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function remove($id = null) {
		if($id) {
			$sql = "DELETE FROM room WHERE r_id = ?";
			$query = $this->db->query($sql, array($id));

			// ternary operator
			return ($query === true) ? true : false;			
		} // /if
	}
	
}