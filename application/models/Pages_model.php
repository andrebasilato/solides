<?php

class Pages_model extends CI_Model
{
	public function index()
	{
		
		$user_id = $_SESSION["logged_user"]["id"];
		// $Sql = "SELECT * FROM sis_usuario u
		// 		INNER JOIN tb_lancamento l ON l.id_usuario = u.id
		// 		WHERE excluido = 0";
		// return $this->db->query($Sql)->result_array();

		$this->db->select('*');
		$this->db->from('sis_usuario');
		$this->db->join('tb_lancamento', 'tb_lancamento.id_usuario = sis_usuario.id');
		$this->db->where('excluido', 0);
		$this->db->where('id_usuario', $user_id);

		return $this->db->get()->result_array();
		
	}

	public function store()
	{

	}
}