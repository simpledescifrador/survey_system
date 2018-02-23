<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Dashboard extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$data = array();
		}
		public function home()
		{
			$data['title_page'] = ucfirst('Admin');
			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('admin/dashboard', $data);
			$this->load->view('templates/footer_dashboard');
		}
		public function mySurvey()
		{	
			if(isset($this->session->userdata['logged_in'])) 
			{
				$data['title_page'] = ucfirst('my survey');
				$this->load->view('templates/header_dashboard', $data);
				$this->load->view('dashboard/my_survey' , $data);
				$this->load->view('templates/footer_dashboard');
			}else
				{
					
					redirect('/');
					
				}
		}

		public function createSurvey()
		{
			if(isset($this->session->userdata['logged_in'])) 
			{
				$data['title_page'] = ucfirst('Create Survey');
				$this->load->view('templates/header_dashboard', $data);
				$this->load->view('dashboard/create_survey' , $data);
				$this->load->view('templates/footer_dashboard');
			}else
				{
					
					redirect('/');
					
				}

		}
	}
