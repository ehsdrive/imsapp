<?php
class Ims_admin_common_model extends CI_Model{

	public function __construct(){

		$this->load->database();
	}
	public function add_env_rootcause($fields)
	{
		$this->db->insert('root_cause',$fields);
		if($this->db->insert_id())
		{
			return $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}
}

?>