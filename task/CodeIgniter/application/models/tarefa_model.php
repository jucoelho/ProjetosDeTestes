<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tarefa_model extends CI_Model{
	

     public function get_task(){
       $query =  $this->db->query('select usuario.id, usuario.nome, tarefa.titulo, tarefa.conteudo from tarefa join usuario  on usuario.id = tarefa.id_responsavel');
          return $query->result_array();  
     }
	
}
