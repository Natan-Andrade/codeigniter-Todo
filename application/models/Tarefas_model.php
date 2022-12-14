<?php
	class Tarefas_model extends CI_Model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		public function listarTarefas(){
			$tarefas = $this->db->get('tarefas');

			return $tarefas->result_array();
		}

		public function getTarefaById($id){
			$titulo = $this->db->get_where('tarefas',array('id'=>$id));
			return $titulo->row_array();
		}
	}

?>