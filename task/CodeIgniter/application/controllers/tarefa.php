<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Tarefa extends CI_Controller{


    public funcition get_task(){
       $this->load->model('tarefa_model');
        $this->tarefa->get_task();

    }
	public function updateNome($conteudo){
         $this->load->model('usuario_model');
         $this->usuario_model->updateNome($conteudo);

  }
}

/* End of file usuario.php */
/* Location: ./application/controllers/usuario.php */