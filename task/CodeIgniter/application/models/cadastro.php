<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends  CI_Model{
	
	public function do_insert($dados=NULL){
		if($dados!=null){
		$this->db->insert('usuario',$dados);
		$this->session->set_flashdata('cadastrook','Cadastro efetuado com sucesso!');
		redirect('olamundo/visualizar');
		}
	
}
public function cadastrar($dados){

	
     //$query = $this->db->query('insert into usuario (nome,usuario,senha,email)values('.$nome.','.$usuario.','.$senha.','.$email.')');
  $this->db->insert('usuario',$dados);
  redirect('usuario');
     
}
}