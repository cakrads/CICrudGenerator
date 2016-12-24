<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard1 extends CI_Controller {

	public $admin_folder;

	public function __construct()
	{
		parent::__construct();
		$this->admin_folder = $this->config->item('admin_folder');
	}


	public function index()
	{	
		$this->auth->is_admin();

		//DATA
		$data['folder_admin'] 			= $this->admin_folder;
		$data['content_header'] 		= "Dashboard";
		$data['content_header_small'] 	= "Version 2.5";
		$data['breadcrumb_active'] 		= "<li class='active'>Dashboard</li>";
		$data['show_username'] 			= $this->session->userdata('namauser');

		$element = $this->admin_folder."dashboard1";
		//View
		template_lib($element, $data, "", $this->admin_folder);
	}
}
