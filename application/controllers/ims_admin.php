<?php
	Class Ims_admin extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('session');
		}
        public function index()
        {
			$this->env_rootcause();
        }
		public function env_rootcause()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('root_cause', 'Root Cause', 'required');
			$this->form_validation->set_rules('incident_type', 'Incident Type', 'required');
			$this->form_validation->set_rules('comment', 'Description/Comment', 'required');
			$this->form_validation->set_rules('created_by', 'Created By', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$data['main_content']	=	"ims-admin/rootcause_category";
				$this->load->view('admin_template',$data);
			}
			else
			{
				$this->load->model('ims_admin_common_model');
				$insert_fields['root_cause'] = $this->input->post('root_cause');
				$insert_fields['incident_type'] = $this->input->post('incident_type');
				$insert_fields['comment'] = $this->input->post('comment');
				$insert_fields['created_by'] = $this->input->post('created_by');
				$insert_fields['created_date'] = date('Y-m-d H:i:s');
				$insert_fields['modified_by'] ='';
				$insert_id = $this->ims_admin_common_model->add_env_rootcause($insert_fields);
				if($insert_id)
				{
					echo 'success';
					redirect(site_url('ims_admin/env_rootcause'), 'refresh');
				}
				else
				{
					echo 'Some error occured while adding';
				}
			}
		}
    }
?>