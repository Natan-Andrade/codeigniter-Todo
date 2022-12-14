<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefas extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		$this->load->model('Tarefas_model');
	}


	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titulo','titulo','required');
		if($this->form_validation->run() == false){
			$data['tarefas'] = $this->Tarefas_model->listarTarefas();
			$this->load->view('Tarefas',$data);
		}else{
			//Existe o post
			$data = ['titulo'=>$this->input->post('titulo')];
			$this->db->insert('tarefas',$data);
			echo 'A tarefa foi inserido com suceso!';

		}
	}

	public function getTarefa($idTarefa){
		$info = $this->Tarefas_model->getTarefaById($idTarefa);
		$data['titulo'] = $info['titulo'];
		$this->load->view('tarefa_single',$data);
	}

}
