<?php 

class Model_Timetable extends CI_Model
{
	function __construct() {
        $this->facultyTbl = 'faculty';
        $this->roomTbl = 'room';
    }

    /*
     * Get country rows from the countries table
     */
    function getTeacherRows($params = array()){
        $this->db->select('c.f_id, c.f_name');
        $this->db->from($this->facultyTbl.' as c');
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                if(strpos($key,'.') !== false){
                    $this->db->where($key,$value);
                }else{
                    $this->db->where('c.'.$key,$value);
                }
            }
        }
        $this->db->where('c.f_status','1');
        
        $query = $this->db->get();
        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;

        //return fetched data
        return $result;
//         Alter table `faculty` 
// Add column `f_status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active' 
// After `f_pass`;
    }
    function getRoomRows($params = array()){
        $this->db->select('c.r_id, c.r_name');
        $this->db->from($this->roomTbl.' as c');
        
        //fetch data by conditions
        // if(array_key_exists("conditions",$params)){
        //     foreach ($params['conditions'] as $key => $value) {
        //         if(strpos($key,'.') !== false){
        //             $this->db->where($key,$value);
        //         }else{
        //             $this->db->where('c.'.$key,$value);
        //         }
        //     }
        // }
        // $this->db->where('c.f_status','1');
        
        $query = $this->db->get();
        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;

        //return fetched data
        return $result;
    }

	public function create() 
	{	
		
		$data = array(
			'f_id' => $this->input->post('teacher'),
			'r_id' => $this->input->post('room'),
			't_time' => $this->input->post('time'),
			't_shift' => $this->input->post('shift'),
			't_section' => $this->input->post('section'),
			't_day' => $this->input->post('day'),
			't_course' => $this->input->post('course'),
			't_degree' => $this->input->post('degree'),
			't_department' => $this->input->post('department'),
			't_semester' => $this->input->post('semester')
		);
		 
		$sql = $this->db->insert('timetable', $data);

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
				't_time' => $this->input->post('edittime'),
				't_shift' => $this->input->post('editshift'),
				't_section' => $this->input->post('editsection'),
				't_day' => $this->input->post('editday'),
				't_course' => $this->input->post('editcourse'),
				't_degree' => $this->input->post('editdegree'),
				't_department' => $this->input->post('editdepartment'),
				't_semester' => $this->input->post('editsemester')
			);

			$this->db->where('t_id', $id);
			$sql = $this->db->update('timetable', $data);

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
			$sql = "SELECT * FROM timetable WHERE t_id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM timetable t,room r,faculty f WHERE t.f_id = f.f_id AND t.r_id = r.r_id";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function fetchSchedule($id = null) 
	{
		//$user_id = $this->session->userdata('f_id');
		$user_id = 1;
		$sql = "SELECT * FROM timetable t,room r,faculty f WHERE t.f_id = $user_id AND t.r_id = r.r_id AND t.f_id = f.f_id";
		$query = $this->db->query($sql);

		return $query->result_array(); //return array
	}

	public function remove($id = null) {
		if($id) {
			$sql = "DELETE FROM timetable WHERE t_id = ?";
			$query = $this->db->query($sql, array($id));

			// ternary operator
			return ($query === true) ? true : false;			
		} // /if
	}
	
}