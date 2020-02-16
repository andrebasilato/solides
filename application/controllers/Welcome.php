<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

	public function index()
	{
		$this->load->view("template/login");
		$this->load->view("template/css");
		$this->load->view("pages/login");
		
	}

	public function store()
	{

		$this->load->model("Login_model");
		$login = $_POST["login"];
		$pass = md5($_POST["password"]);
		$user = $this->Login_model->store($login, $pass);

		if ($user) {
			$this->session->set_userdata("logged_user", $user);
			redirect("dashboard");
		} else {
			redirect("/");
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("logged_user");
		redirect("/");
	}

}
