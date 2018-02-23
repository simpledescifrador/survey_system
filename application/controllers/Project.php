<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$data = array();
	}
	function index()
	{
		$data['title_page'] = ucwords('My Projects');
		$this->load->view('templates/header', $data);
		$this->load->view('project');
		$this->load->view('templates/footer');
	}
}
