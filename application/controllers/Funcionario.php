<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

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
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/funcionario/index');
		$this->load->view('templates/footer');
	}
	
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/funcionario/add');
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
