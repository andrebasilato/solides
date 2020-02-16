<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{

	function __construct() {
		parent::__construct();
		$user = $this->session->userdata("logged_user");
		if (empty($user)){
			redirect("Welcome");
		}

	}


	public function index()
	{
		
		$this->load->model("Pages_model");
		$data["users"] = $this->Pages_model->index();

		$this->load->view('template/header');
		$this->load->view('pages/dashboard', $data);
		
	}

}
