<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Admin_Controller extends CI_Controller 
	{
		// function __construct() 
		// {
		// 	parent::__construct();
		// }
		function index() 
		{
			$data = array();
			if(isset($this->session->userdata['logged_in']))
			{
				redirect('project');//redirect to dashboard controller
			}else
				{
					redirect('login');
				}
		}	
	}
