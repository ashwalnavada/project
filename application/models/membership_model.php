<?php


class Membership_model extends CI_Model
{
	
	function validate() // Validating credentials for users
	{
		$this->db->where('fname', $this->input->post('fname'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('members');
		print_r($query);

		if($query->num_rows == 1)
		{
			return true;
		}
	}
}