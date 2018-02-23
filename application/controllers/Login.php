<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$data = array();
		$this->load->library('form_validation');
		$this->load->model('admin');
	}
	function index()
	{
		if(!isset($this->session->userdata['logged_in']))
		{
			$data['title_page'] = ucwords('login');
			$this->load->view('templates/header', $data);
			$this->load->view('login');
			$this->load->view('templates/footer');
		}
		else
		{
			redirect('project');
		}
	}
	/* function for login authentication */
	public function loginAuth() 
	{
		$data = array();	
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->session->set_flashdata('validate_msg', validation_errors());
			redirect('/');
		} else 
			{
				//getting value from the login form
				$data['username'] = $this->input->post('username');
				$data['password'] = $this->input->post('password');
				$result = $this->admin->login($data);//get data from admin model
			
				if($result)
				{
					$username = $this->input->post('username');
					$result = $this->admin->readAdminInfo($username);
					
					if($result){
						$session_data = array(
							'username' => $result[0]->name
						);
						$this->session->set_userdata('logged_in', $session_data);
						redirect('/');
					}
				}else
					{
						$data['error_msg'] = 'Invalid Username or Password';
						$this->session->set_flashdata('error_msg', $data['error_msg']);
						redirect('login');
					}
			}
	}
	/* Remove session and logout redirect to login page */
	public function logout() 
		{
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
