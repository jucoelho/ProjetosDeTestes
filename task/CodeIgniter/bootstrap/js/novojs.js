$(function () {


  $("td.editavel").dblclick(
     function () { 

      var conteudoOriginal = $(this).text(); 

      $(this).addClass("celulaEmEdicao"); 
      $(this).html("<input type='text' value='" + conteudoOriginal + "' />"); 
      $(this).children().select();
      $(this).children().first().focus(); 
      
      $(this).children().first().keypress(function (e) {
       var novoConteudo = $(this).val();
       if (e.which == 13 && novoConteudo !=conteudoOriginal) { 
        
              $.ajax({
                type:"POST",
                url:'<?php echo  base_url(); ?>usuario/updateNome',
                data:{
                id:$(this).parents('tr').children().first().text(),
                campo:$(this).parent().attr('title'),
                valor:novoConteudo },
                 success:function(result){
                      alert( 'kkkkkkkkkkk');
                 }
              });

              $(this).parent().text(novoConteudo); 
              $(this).parent().removeClass("celulaEmEdicao"); 
            } 
       });

       $(this).children().first().blur(function(){
        $(this).parent().text(conteudoOriginal); 
        $(this).parent().removeClass("celulaEmEdicao"); }
        ); }
    );
 });
 function muda(){
         var nome =  document.getElementById("usuario").value;
         var senha =  document.getElementById("senha").value;

         
         if (nome==="" && senha===""){
         document.getElementById("usuario").style.borderColor="red";
         document.getElementById("senha").style.borderColor="red";
        document.getElementById("mensagem").innerHTML = "Preencha o(s) campo(s) em vermelho!";
         document.getElementById("mensagem").style.color = "red";
         document.getElementById("mensagem").style.visibility ="visible";
         return 0;
     }
     if ( nome==="" ){
         document.getElementById("mensagem").innerHTML = "Preencha o(s) campo(s) em vermelho!";
         document.getElementById("mensagem").style.color = "red";
         document.getElementById("mensagem").style.visibility ="visible";
         document.getElementById("usuario").style.borderColor="red";
     return 0;
        }
     if(senha===""){
      document.getElementById("mensagem").innerHTML = "Preencha o(s) campo(s) em vermelho!";
         document.getElementById("mensagem").style.color = "red";
         document.getElementById("mensagem").style.visibility ="visible";
         document.getElementById("senha").style.borderColor="red";
     return 0;
        }
     
       document.getElementById("cadastro").submit();
   
    }
    function validaform(){
        var nome_cadastro =  document.getElementById("nome-cadastro").value;
        var senha_cadastro= document.getElementById("senha-cadastro").value;;
        var email_cadastro = document.getElementById("email-cadastro").value;;
        var usuario_cadastro =document.getElementById("usuario-cadastro").value;
        if(nome_cadastro ==="" && senha_cadastro==="" && email_cadastro==="" && usuario_cadastro==="")
        {
             document.getElementById("nome-cadastro").style.borderColor="red";
             document.getElementById("senha-cadastro").style.borderColor="red";
             document.getElementById("email-cadastro").style.borderColor="red";
             document.getElementById("usuario-cadastro").style.borderColor="red";
             document.getElementById("mensagemCadastrar").innerHTML = "Preencha o(s) campo(s) em vermelho!";
         document.getElementById("mensagemCadastrar").style.color = "red";
         document.getElementById("mensagemCadastrar").style.visibility ="visible";
            return 0;
        }else{
          document.getElementById("mensagemCadastrar").style.color = "blue";
            document.getElementById("mensagemCadastrar").innerHTML= "Cadastro Relalizado com Sucesso !";
            document.getElementById("cadastro_novo").submit();
            
      } 
        
    }
    function mudaBorda(id){
        document.getElementById(id).style.borderColor= "#1874CD";
    }
    function mensagem(){
        document.getElementById("mensagemCadastrar").innerHTML = "Cadastro Relalizado com Sucesso !";
    }
  


  
