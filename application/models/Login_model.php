<?php

class Login_model extends CI_Model 
{
    public function store($login, $pass)
    {
        $this->db->where("usuario", $login);
        $this->db->where("senha", $pass);
        $user = $this->db->get("sis_usuario")->row_array();

        return $user;
    }
}