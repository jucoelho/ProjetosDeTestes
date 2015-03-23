<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Usuario extends CI_Controller{


	
	
	public function index( $msg = NULL)	{

		 $data['msg'] = $msg;
		 $this->load->view('login', $data);
	}

	public function incluir(){
     $this->load->view('welcome_message');
	}
	public function cadastrar(){
		  $nome = $this->input->get_post('nome-cadastro');
		  $usuario = $this->input->get_post('usuario-cadastro');
          $senha = $this->input->get_post('senha-cadastro');
          
          $dados =array('nome'=> $nome,'usuario'=> $usuario,'senha'=>$senha);
          $this->load->model('Cadastro');
          $this->Cadastro->cadastrar($dados);
	}

	public function logar(){
         $this->load->model('usuario_model');
         $resulado=  $this->usuario_model->validate();
         
         if($resulado)
         {

          $this->chamhar_page();
         }		
        else{
        	$msg = '<font color=red>Inválido usuario e/ou senha! </font><br />';
        	$this->index($msg);
        }

	}
   public function validarUsuario(){
     
       $dados['nome'] = $this->input->post('usuarioCadastro');
     $this->load->model('usuario_model');
     $usuario = $this->usuario_model->validateUser($dados);
     echo ($usuario) ? '1' : '0';
     
  }
  public function updateNome()
  {
    
        
       $dados = array('id' =>  $this->input->post('id'),'campo' => $this->input->post('campo'),
      'valor' => $this->input->post('valor') );
      $this->load->model('usuario_model');
      $result =  $this->usuario_model->updateNome($dados);
        echo 'ok';
    
  }
  public function validaNovoUsuario(){

     $usuario = $this->input->post('novousuario');
     $this->load->model('usuario_model');
      $resultado= $this->usuario_model->validaNovoUsuario($usuario);
      if($resultado){
       return  1 ;
      }

  }
  private function chamhar_page(){
        $this->load->model('tarefa_model');
         $data  =  $this->tarefa_model->get_task();
         $dados['data'] = $data; 
       $this->load->view('principal',$dados);
  }

}

/* End of file usuario.php */
/* Location: ./application/controllers/usuario.php */