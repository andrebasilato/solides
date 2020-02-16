<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller 
{

	public function index()
	{
		$this->load->view("template/cadastro");
		$this->load->view("template/css");
		$this->load->view("pages/cadastro");
		
	}

	public function store()
	{
		$this->load->model("Users_model");
		$user = array(
			"nome_completo" => $this->input->post("name"),
			"email" => $this->input->post("email"),
			"usuario" => $this->input->post("username"),
			"senha" => md5($this->input->post("password"))
		);

		$this->Users_model->store($user);
		redirect("Welcome");

	}

}
