<html>
 <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/novojs.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/jquey.js"></script>
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap-theme.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>bootstrap/css/dashboard.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>bootstrap/estilo.css" rel="stylesheet" />

    <title>Login </title> 

 </head>
<body onload="fundo();">

  <div class="topologin">
      
  </div>
    <div id="planoDeFundo" class="container-fluid">
        
                
            
                <div id="corpo-full">
                    <div id="formlogin">
                        <form id="cadastro" action="<?php echo base_url()?>usuario/logar " method="post">
                            <label id="mensagem" class="mensagem">
                                <?php if(! is_null($msg)) echo $msg;?>
                            </label>
                            <label for="usuario">
                                Usuário
                            </label>
                            <input type="text" class="usuario" id="usuario" name="usuario" oninput="mudaBorda('usuario');"
                            size="20" maxlength="30" placeholder="Usuário">
                            <label for="senha">
                                Senha
                            </label>
                            <input type="password" id="senha" name="senha" oninput="mudaBorda('senha');"
                            size="8" maxlength="8" placeholder="Senha">
                            <br>
                            <button class="btn-primary" type="button" data-toggle="modal" data-target="#myModal">
                                Cadastrar
                            </button>
                            <button id="submeter" type="button" class="btn-primary" onclick="muda();">
                                Entrar
                            </button>
                        </form>
                    </div>
                </div>
          
         
          
          
            <!-- Modal -->
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="false" style="display: block;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                    <h3 id="myModalLabel">
                        Cadastro
                    </h3>
                </div>
                <div class="modal-body">
                    <label id="mensagemCadastrar" class="mensagemCadastrar">
                    </label>
                    <form id="cadastro_novo" action="<?php echo base_url(); ?>usuario/cadastrar"
                    method="post">
                        <label for="nome">
                            Nome
                        </label>
                        <input type="text" name="nome-cadastro" id="nome-cadastro" oninput="mudaBorda('nome-cadastro');"
                        size="20" maxlength="30" placeholder="Nome Completo">
                        <label for="email">
                            Email
                        </label>
                        <input type="email" name="email-cadastro" id="email-cadastro" oninput="mudaBorda('email-cadastro');"
                        size="20" maxlength="30" placeholder="Email">
                        <label for="usuario">
                            Usuário
                        </label>
                        <input type="text"  class="usuarioCadastro" name="usuario-cadastro" id="usuario-cadastro" oninput="mudaBorda('usuario-cadastro');" 
                        size="20" maxlength="30" placeholder="Usuário">
                        <label for="senha">
                            Senha
                        </label>
                        <input type="password" name="senha-cadastro" id="senha-cadastro" oninput="mudaBorda('senha-cadastro');"
                        size="8" maxlength="8" placeholder="Senha">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">
                        Fechar
                    </button>
                    <button type="button" onclick="validaform();" class="btn btn-primary"
                    id="cadastro_novo">
                        Cadastrar
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>



 </body>
</html>

