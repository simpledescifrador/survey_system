<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$data = array();
		$this->load->model('projects');
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
		$data['project_created_by'] = $projectCreatedBy;
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
					$this->session->set_flashdata('error_msg', 'Project Name is already created!');
					redirect('project');
				}else
					{
						$this->projects->createProject($data); //INSERT PROJECT NAME
						
						redirect('project');
						
					}
			}
		
		
	}

	public function deleteProject()
	{
		
		$this->projects->deleteSeletedProject();
	}
}
