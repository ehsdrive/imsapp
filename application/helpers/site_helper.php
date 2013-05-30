<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function get_menus()
	{
		$CI = & get_instance();
		$CI->db->where('level_id',0);
		$query = $CI->db->get('menus');
		if ($query->num_rows() > 0)		
		{		
			$main_menus = $query->result();
			
			foreach($main_menus as $main_menu)
			{
				$CI->db->where('level_id',$main_menu->id);
				$query = $CI->db->get('menus');
				if ($query->num_rows() > 0)		
				{
					$sub_menus = $query->result();
					$main_menu->sub_menus = $sub_menus;
				}
				else
				{
				}
			}
			return $main_menus;
		}		
		else		
		{			
			return false;	
		}	
	}
	function get_admin_menus()
	{
		$CI = & get_instance();
		$CI->db->where('level_id',0);
		$query = $CI->db->get('menus_admin');
		if ($query->num_rows() > 0)		
		{		
			$main_menus = $query->result();
			
			foreach($main_menus as $main_menu)
			{
				$CI->db->where('level_id',$main_menu->id);
				$query = $CI->db->get('menus_admin');
				if ($query->num_rows() > 0)		
				{
					$sub_menus = $query->result();
					$main_menu->sub_menus = $sub_menus;
				}
				else
				{
				}
			}
			return $main_menus;
		}		
		else		
		{			
			return false;	
		}	
	}
	function get_incident_types()
	{
		$CI = & get_instance();
		$query = $CI->db->get('incident_types');
		if ($query->num_rows() > 0)		
		{
			$incident_types = $query->result();
			return $incident_types;
		}
		else
		{
			return false;
		}
	}
	
	
/* End of file site_helper.php */
/* Location: ./application/helper/site_helper.php */