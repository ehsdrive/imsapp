<?php
	Class Site extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('session');
		}
        public function index()
        {
            $this->home();
        }
        public function home(){
			if($this->session->userdata('logged_in')==TRUE)
			{
				$data['main_content']	=	"ims/dashboard";
				$this->load->view('template',$data);
			}
			else
			{
				$data['main_content']	=	"home";
				$this->load->view('login-template',$data);
			}
		}
		public function contact_us(){
			$data['main_content']	=	"contact_us";
			$this->load->view('template',$data);
		}
		public function about_us(){
			$data['main_content']	=	"about_us";
			$this->load->view('template',$data);
		}
		public function login()
		{
			if($this->session->userdata('logged_in')==TRUE)
			{
				$data['main_content']	=	"ims/dashboard";
				$this->load->view('template',$data);
			}
			else
			{
				$this->load->library('form_validation');
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				if ($this->form_validation->run() == FALSE)
				{
					$data['main_content']	=	"home";
					$this->load->view('login-template',$data);
				}
				else
				{
					$this->load->model('user_model');
					$username = $this->input->post('username');
					$password = $this->input->post('password');
					if($this->user_model->validate_login($username,$password))
					{
						$session_data = array(
							   'username'  => $username,
							   'user_type'     => 'admin',
							   'logged_in' => TRUE
							);
						$this->session->set_userdata($session_data);
						//$this->session->set_userdata('admin', $username);
						//echo 'succcess';
						$data['main_content']	=	"ims/dashboard";
						$this->load->view('template',$data);
					}
					else
					{
						//echo 'falied';
						$data['main_content']	=	"home";
						$this->load->view('login-template',$data);
					}
				}
			}
		}
		public function logout()
		{
			$this->session->sess_destroy();
			redirect(site_url('site'), 'location');		
		}
	}
?>