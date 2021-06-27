<?php

class Admin_login_model extends CI_Model
{
	public function valid_login($email,$password)
	{
		$q = $this->db->where(['a_email'=> $email,'a_pass'=>$password])
					->get('admin');
		if($q->num_rows())
		{
			return $q->row()->a_id;
		}
			return false;
	}
}