<?php

class Pontos_model extends CI_Model
{

    public function store ($entry_comp)
    {
        $this->db->insert("tb_lancamento", $entry_comp);
    }

    public function elunch ($date)
    {
        $elunch = array (
                "hr_saida_alm" => $date = date("Y-m-d H:i:s"),
                "id_usuario" => $_SESSION['logged_user']['id'],
                "data_cad" => $date = date("Y-m-d H:i:s"),
                "dia_ano" => $date = date("z"),
                "tag" => 1,
                "excluido" => 0
            );

        $this->db->where('dia_ano', $date);
        return $this->db->update("tb_lancamento", $elunch);
    }

    public function rlunch ($date)
    {
        $rlunch = array (
            "hr_volta_alm" => $date = date("Y-m-d H:i:s"),
            "id_usuario" => $_SESSION["logged_user"]["id"],
            "data_cad" => $date = date("Y-m-d H:i:s"),
            "dia_ano" => $date = date("z"),
            "tag" => 1,
            "excluido" => 0
        );

        $this->db->where("dia_ano", $date);
        return $this->db->update("tb_lancamento", $rlunch);

    }

    public function exit_comp ($date)
    {
        $exit_comp = array (
            "hr_saida_emp" => $date = date("Y-m-d H:i:s"),
            "id_usuario" => $_SESSION["logged_user"]["id"],
            "data_cad" => $date = date("Y-m-d H:i:s"),
            "dia_ano" => $date = date("z"),
            "tag" => 1,
            "excluido" => 0
        );

        $this->db->where("dia_ano", $date);
        return $this->db->update("tb_lancamento", $exit_comp);
    }

}