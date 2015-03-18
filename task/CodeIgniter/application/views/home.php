
<html >
<head>
	<meta charset="utf-8">
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>

<!-- Bootstrap CSS -->
<link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap-min.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>/bootstrap/css/dashboard.css" rel="stylesheet" />

<!-- estilo css página -->
<style type="text/css"> 
div#corpo-full{
   width: 500px; /* largura*/
   background-color: #ffffff;

    margin-top: 160px;
    margin-left: 400px;
   box-shadow: 0px 0px 10px rgba(0,0,0, .5);  /* efeito na caixa */
   padding: 20px ; 
   
    }
div#formlogin{
       margin-left: 450px ;
       margin-top: 150px;
        
    }    
    div#formlogin label#mensagemSucesso{
        position: relative;
        left: 20px;
        color: #1874CD;
    }

    #mensagemSucesso{
    	display: none;
    }
    div#divmenu{
    	position: absolute;
    	background-color: black;
    	height: 50px;
    	top: 0px;
    	width: 100%;
    	color: white;
    }
    #listaMenu{
    	list-style: none;
    	
    }
    #listaMenu li {
    	position: relative;
    	display: inline-block;
    		padding: 2px 10px;
    		padding-top: 12px;
    }
    #formCadastrar{
        position: absolute;
        left: 120px;
    }
    #corpoModalCadastrar{
    height: 150px;
    }
</style>
<!-- jquery  login -->
<script>
     function muda(){
         var nome =  document.getElementById("usuario").value;
         var senha =  document.getElementById("senha").value;
         
         if (nome==="" && senha===""){
         document.getElementById("usuario").style.borderColor="red";
         document.getElementById("senha").style.borderColor="red";
         document.getElementById("mensagemCampos").style.display="show";
         return 0;
     }
     if ( nome==="" ){
         document.getElementById("usuario").style.borderColor="red";
     return 0;
        }
     if(senha===""){
         document.getElementById("senha").style.borderColor="red";
     return 0;
        }
     
       document.getElementById("cadastro").submit();
   
    }

    function validaform(){
        var senha_cadastro= document.getElementById("usuarioCadastrar").value;;
        var usuario_cadastro =document.getElementById("senhaCadastrar").value;
        if( senha_cadastro==="" && usuario_cadastro==="")
        {
             document.getElementById("nome-cadastro").style.borderColor="red";
             document.getElementById("senha-cadastro").style.borderColor="red";
            return 0;
        }else{
            document.getElementById("mensagem").value= "Cadastro Relalizado com Sucesso !";
            document.getElementById("cadastro_novo").submit();
      
      } 
        
    }
    function mudaBorda(id){
        document.getElementById(id).style.borderColor= "#1874CD";
    }
    function mensagem(){
        document.getElementById("mensagem").value= "Cadastro Relalizado com Sucesso !";

    }
    function(){
       document.getElementById("usuario").style.borderColor ="red";
    }

})


</script>
</head>


<body>

<div id="formlogin" >

    veio pra cá
    <label id="mensagemSucesso"> Cadastro realizado com sucesso!</label>
    <label id="mensagemCampos"  style="display: none;">Preencha os campos em vermelho!</label>
    <form id="cadastro" action="" method="post">
    <label for="usuario"> Usuário</label> 
    <input type="text" id="usuario"  name="usuario" oninput="mudaBorda('usuario');"  size="20" maxlength="30" placeholder="Usuário"  >
    <label for="senha">Senha</label> 
    <input type="password" id="senha" name="senha" oninput="mudaBorda('senha');"  size="8" maxlength="8" placeholder="Senha">
    <br>
    <button class="btn-primary" type="button" data-toggle="modal" data-target="#myModal">Cadastrar</button>
    <button id="submeter" type="button" class="btn-primary"  onclick="muda();" >Entrar</button>   
    </form>   
</div> 
 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Cadastro Usuário</h3>
  </div>

  <div class="modal-body" id="corpoModalCadastrar">
    
    <div id="formCadastrar" >
    <label id="mensagemSucesso"> Cadastro realizado com sucesso!</label>
    <form id="cadastro" action="<?php echo base_url(); ?>usuario/logar " method="post">
    <label for="usuario"> Usuário</label> 
    <input type="text" id="usuarioCadastrar"  name="usuarioCadastrar" oninput="mudaBorda('usuario');"  size="20" maxlength="30" placeholder="Usuário"  >
    <label for="senha">Senha</label> 
    <input type="password" id="senhaCadastrar" name="senhaCadastrar" oninput="mudaBorda('senha');"  size="8" maxlength="8" placeholder="Senha">
    </form>   


</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
    <button class="btn btn-primary" id="submitCadastrar" onclik="validaform()">Salvar mudanças</button>
  </div>
</div>


  </body>
</html>