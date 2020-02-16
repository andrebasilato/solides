<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ponto extends CI_Controller 
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

        $this->load->view('template/header');
        $this->load->view('pages/pontos');

    }

    public function store ()
    {

        $this->load->model("Pontos_model");
        $entry_comp = array (
            "hr_chegada_emp" => $this->input->post("entry"),
            "hr_saida_alm" => $this->input->post("elunch"),
            "hr_volta_alm" => $this->input->post("rlunch"),
            "hr_saida_emp" => $this->input->post("exit"),
            "id_usuario" => $_SESSION['logged_user']['id'],
            "data_cad" => $date = date("Y-m-d H:i:s"),
            "dia_ano" => $date = date("z"),
            "tag" => 0,
            "excluido" => 0
        );

        $this->Pontos_model->store($entry_comp);
        redirect("Dashboard");
    }

    public function entry ()
    {

        $this->load->model("Pontos_model");
        $entry_comp = array (
            "hr_chegada_emp" => $date = date("Y-m-d H:i:s"),
            "id_usuario" => $_SESSION['logged_user']['id'],
            "data_cad" => $date = date("Y-m-d H:i:s"),
            "dia_ano" => $date = date("z"),
            "tag" => 1,
            "excluido" => 0
        );

        $this->Pontos_model->store($entry_comp);
        redirect("Dashboard");

    }

    public function elunch ($date)
    {

        $this->load->model("Pontos_model");
        $this->Pontos_model->elunch($date);
        redirect("Dashboard");

    }

    public function rlunch ($date)
    {

        $this->load->model("Pontos_model");
        $this->Pontos_model->rlunch($date);
        redirect("Dashboard");

    }

    public function exit_comp ($date)
    {

        $this->load->model("Pontos_model");
        $this->Pontos_model->exit_comp($date);
        redirect("Dashboard");

    }

}