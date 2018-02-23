<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Survey extends CI_Controller 
	{
		function __construct()
		{
			parent::__construct();
			$data = array();
		}
		public function builder()
		{
			if(isset($this->sesssion->userdata['logged_in']))
			{
				redirect('/');

			}else
				{
					$data['title_page'] = ucfirst('Survey Builder');
					$this->load->view('templates/header_dashboard', $data);
					$this->load->view('survey/builder', $data);
					$this->load->view('templates/footer_dashboard');
				}
		}
	}
