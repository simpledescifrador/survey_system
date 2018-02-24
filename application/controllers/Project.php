<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$data = array();
		$this->load->model(array('projects', 'admin'));
		$this->load->library('form_validation');
	}
	function index()
	{
		$data['title_page'] = ucwords('My Projects');
		$data['projects'] = $this->projects->getAllProject();
		$this->load->view('templates/header_project', $data);
		$this->load->view('project', $data);
		$this->load->view('templates/footer_project');
	}
	public function createBlankProject()
	{
		$project_name = $this->input->post('project_name');
		$projectCreatedBy = $this->session->userdata['logged_in']['username'];
		$data['project_name'] = str_replace('_', ' ', $project_name);
		$array = $this->admin->getIdByName($projectCreatedBy); 
		foreach ($array as  $value) {
			$data['admin_id'] = $value->id;
		}
		$data['status'] = 1;

		$this->form_validation->set_rules('project_name' , 'Project Name' , 'trim|required|min_length[5]');
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->session->set_flashdata('error_msg', validation_errors());
			redirect('project');
		} else 
			{
				if($this->projects->checkDuplicateproject_name($data))
				{
					$data['error_msg'] = ucwords($data['project_name']) . ' is already created!';
					$this->session->set_flashdata('error_msg', $data['error_msg']);
					redirect('project');
				}else
					{
						
						$this->projects->createProject($data); //INSERT PROJECT NAME
						$data['display_msg'] = ucwords($data['project_name'])  . ' is successfully created!';
						$this->session->set_flashdata('display_msg', $data['display_msg']);
						redirect('project');
						
					}
			}
		
		
	}
	public function editSurvey($id = null)
	{
		$data['title_page'] = ucwords('edit survey');
		$this->load->view('templates/header_project', $data);
		$this->load->view('survey');
		$this->load->view('templates/footer_project');
	}
	public function deleteSurvey($id = null)
	{
		$this->projects->deleteSeletedProject($id);
		$data['display_msg'] = 'Successfully Deleted!';
		$this->session->set_flashdata('display_msg', $data['display_msg']);
		redirect('project');
	}
}
