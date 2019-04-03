<?php

class Fazenda_model extends CI_Model {

    public $nome;
    public $dataRegistro;
    public $situacao;

    public function get_ultimos_registros()
    {
        $query = $this->db->get('entries');
        return $query->result();
    }

    public function inserir_registro()
    {
        $this->fazenda->nome = $this->input->post('nome');
		$this->fazenda->dataRegistro = date('Y-m-d H:i:s');
		$this->fazenda->situacao = 'ATIVO';

        $this->db->insert('fazenda', $this);
    }
}