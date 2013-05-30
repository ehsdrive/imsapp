<?php
class User_model extends CI_Model{

	public function __construct(){

		$this->load->database();
	}
	public function validate_login($username, $password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',sha1($password));
		$query=$this->db->get('users');
		if ($query->num_rows() > 0)		
		{		
			return $query->result();		
		}		
		else		
		{			
			return false;		
		}	
}
}

?>