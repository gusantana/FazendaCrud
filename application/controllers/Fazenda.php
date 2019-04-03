<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fazenda extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->load->database();
	}

	public function index()
	{
		$data['dados'] = $this->db->get('fazenda')->result();

		$this->load->view('templates/header');
		$this->load->view('pages/fazenda/index', $data);
		$this->load->view('templates/footer');
	}


	public function listarFuncionario($id = NULL)
	{
		if (empty($id)) {
			redirect('fazenda/index');
		}
		$where = array('idFazenda' => $id);
		$this->db->where($where);
		$data['dados'] = $this->db->get('funcionario')->result();

		$this->db->where('id', $id);
		$data['fazenda'] = $this->db->get('fazenda')->result()[0];
		

		$this->load->view('templates/header');
		$this->load->view('pages/fazenda/listarFuncionario', $data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$config = array(
			array(
				'field' => 'nome',
				'label' => 'Nome',
				'rules' => 'required',
				'errors' => array (
					'required' => 'Deve ser fornecido um %s.'
				)
			)
		);

		$this->form_validation->set_rules($config);

		// $this->form_validation->set_rules('nome', "Nome", "required",
			// array('required' => 'Deve ser fornecido um %s.')
		// );

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('pages/fazenda/add');
			$this->load->view('templates/footer');

			return;
		}

		//$this->load->model("fazenda_model");
		//$this->fazenda_model->inserir_registro();
		

		$dados = array (
			'nome' => $this->input->post('nome'),
			'dataRegistro' => date('Y-m-d H:i:s'),
			'situacao' => 'ATIVO'
		);

		$this->db->insert('fazenda', $dados);
		
		
		$data['mensagem'] = "Registro inserido com sucesso.";

		$this->load->view('templates/header');
		$this->load->view('pages/fazenda/add', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id = NULL)
	{
		$config = array(
			array(
				'field' => 'nome',
				'label' => 'Nome',
				'rules' => 'required',
				'errors' => array (
					'required' => 'Deve ser fornecido um %s.'
				)
			),
			array(
				'field' => 'id',
				'label' => 'Registro',
				'rules' => 'required',
				'errors' => array (
					'required' => 'Deve ser fornecido um %s válido.'
				)
			)
		);

		$this->form_validation->set_rules($config);

		if (empty($id)) 
		{
			//inserindo
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('pages/fazenda/edit');
				$this->load->view('templates/footer');
			}

			$dados = array (
				'nome' => $this->input->post('nome')
			);

			$this->db->update('fazenda', $dados, array('id' => $this->input->post('id')));

			$where = array('id' => $this->input->post('id'));

			$this->db->where($where);
			$data['dados'] = $this->db->get('fazenda')->result()[0];

			$data['mensagem'] = "Registro alterado com sucesso.";

			$this->load->view('templates/header');
			$this->load->view('pages/fazenda/edit', $data);
			$this->load->view('templates/footer');

			return;
		}
		

		$where = array('id' => $id);
		$this->db->where($where);
		$data['dados'] = $this->db->get('fazenda')->result()[0];
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('pages/fazenda/edit', $data);
			$this->load->view('templates/footer');

			return;
		}
		
	}

	public function delete($id = NULL)
	{
		if (empty($id)) {
			redirect('fazenda/index');
		}

		$where = array('id' => $id);
		$this->db->where($where);
		$this->db->delete('fazenda');
		
		redirect('fazenda/index');
		
	}
}
