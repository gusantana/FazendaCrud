<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fazenda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form'));

		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->database();
		$data['dados'] = $this->db->get('fazenda')->result();

		$this->load->view('templates/header');
		$this->load->view('pages/fazenda/index', $data);
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

		$this->load->database();
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

	public function edit()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/fazenda/edit');
		$this->load->view('templates/footer');
	}

	public function delete()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/fazenda/delete');
		$this->load->view('templates/footer');
	}
}
