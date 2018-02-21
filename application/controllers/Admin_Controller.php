<?php
	class Admin_Controller extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('admin');
		}
		public function loginAuth() {
			$data = array();
			//getting value from the login form
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error_msg', validation_errors());
				redirect('/');
			} else {
				$result = $this->admin->login($data);

				if($result){
					$username = $this->input->post('username');
					$result = $this->admin->readAdminInfo($username);
					if($result){
						$session_data = array(
							'username' => $result[0]->name
						);
						$this->session->set_userdata('logged_in', $session_data);
						
						$this->session->set_flashdata('display_msg', 'Welcome');
						redirect('/');
							
					}
				}else{
					$data['error_msg'] = 'Invalid Username or Password';
					$this->session->set_flashdata('error_msg', $data['error_msg']);
					redirect('/');
				}
			}
	
		}
		public function dashboard() {
			if(isset($this->session->userdata['logged_in'])){
				
				$this->load->view('admin/dashboard');
				
			}else{
				$this->load->view('admin/login');
			}
		}
		public function logout() {
			// Removing session data
			$sess_array = array(
				'username' => ''
			);
			$this->session->unset_userdata('logged_in', $sess_array);
			$data['display_msg'] = 'Successfully Logout';
			$this->session->set_flashdata('display_msg', $data['display_msg']);
			
			redirect('/');


			}
			
	}
