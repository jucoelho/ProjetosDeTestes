<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model{
	
	public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('usuario'));
        $password = $this->security->xss_clean($this->input->post('senha'));
        
        // Prep the query
        $this->db->where('usuario', $username);
        $this->db->where('senha', $password);
        
        // Run the query
        $query = $this->db->get('usuario');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'userid' => $row->id,
                    'username' => $row->nome,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
  public function updateNome( $data)
  {

                 

                
                if( strcmp($data['campo'], "nome") == 0 ){

                  $dados = array('nome'=> $data['valor']);
                  $this->db->where('id', $data['id']);
                  $this->db->update('usuario',$dados);
                  return true;
                }
                elseif(strcmp($data['campo'], "titulo") == 0 ){
                  $dados = array('titulo'=> $data['valor']);
                  $this->db->where('id_responsavel', $data['id']);
                  $this->db->update('tarefa',$dados);
                  return true;
                }
                 elseif(strcmp($data['campo'], "conteudo") == 0 ){
                 $dados = array('conteudo'=> $data['valor']);
                  $this->db->where('id_responsavel', $data['id']);
                  $this->db->update('tarefa',$dados);
                  return true;
                }
     
  }
 public function validaNovoUsuario($usuario){
       
        $this->db->query('select * from usuario whrere usuario=' + $usuario);
        // Let's check if there are any results
        if($query->num_rows == 1){
          return true;
        }else{
          return false;
        }
 }
   public function validateUser($dados){
      
        $this->db->where('usuario', $dados['nome']);
        $query = $this->db->get('usuario');
        // Let's check if there are any results
        if($query->num_rows == 1){
          return 1;
        }else{
          return 0;
        }

   }
}
