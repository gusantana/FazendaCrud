<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$config['upload_path'] = 'upload/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['min_width'] = '480';
		$config['min_height'] = '480';
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);

		$this->load->database();
	}


	public function index()
	{
		$data['dados'] = $this->db->get('funcionario')->result();

		$this->load->view('templates/header');
		$this->load->view('pages/funcionario/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function add($idFazenda = NULL)
	{
		$this->db->where('id', $idFazenda);
		$data['fazenda'] = $this->db->get('fazenda')->result()[0];

		$config = array(
			array(
				'field' => 'idFazenda',
				'label' => 'Nome da Fazenda',
				'rules' => 'required',
				'errors' => array (
					'required' => 'Deve ser fornecido um %s.'
				)
			),
			array(
				'field' => 'nome',
				'label' => 'Nome do Funcionário',
				'rules' => 'required',
				'errors' => array (
					'required' => 'Deve ser fornecido um %s.'
				)
			)
		);

		$this->form_validation->set_rules($config);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('pages/funcionario/add', $data);
			$this->load->view('templates/footer');

			return;
		}
		
		if ($this->upload->do_upload('foto'))
		{
			$dados = array (
				'idFazenda' => $this->input->post('idFazenda'),
				'nome' => $this->input->post('nome'),
				'mensagem1' => $this->input->post('mensagem1'),
				'mensagem2' => $this->input->post('mensagem2'),
				'foto' => $this->upload->data()['file_name'],
				'situacao' => 'ATIVO',
				'dataRegistro' => date('Y-m-d H:i:s')
			);

			$this->db->insert('funcionario', $dados);

			$data['mensagem'] = '<div class="alert alert-success">Registro inserido com sucesso.</div>';
		}
		else
		{
			$data['mensagem'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
		}

		$this->load->view('templates/header');
		$this->load->view('pages/funcionario/add', $data);
		$this->load->view('templates/footer');
	}
	
	
	public function edit($id = NULL)
	{
		$data["id"] = $id;
		
		
		$this->load->view('templates/header');
		$this->load->view('pages/funcionario/edit', $data);
		$this->load->view('templates/footer');
	}

	
	public function visualizar()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/funcionario/visualizar');
		$this->load->view('templates/footer');
	}
}
