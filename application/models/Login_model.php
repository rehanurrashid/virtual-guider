<?php

class Login_model extends CI_Model
{
	public function valid_login($username,$password)
	{
		$q = $this->db->where(['name'=> $username,'pass'=>$password])
					->get('admin');
		if($q->num_rows())
		{
			return $q->row()->aid;
		
		}
			return false;
	}
	public function faculty_login($username,$password)
	{
		return $this->db->where('f_name',$username)
						->where('f_pass',$password)
						->get('faculty')
						->row_array();
	}
}