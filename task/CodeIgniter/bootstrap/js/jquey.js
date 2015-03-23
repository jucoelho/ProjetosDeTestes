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
                url:'<?php echo  base_url(); ?>usuario/updateNome',
                type:"POST",
                data:{
                id:$(this).parents('tr').children().first().text(),
                campo:$(this).parent().attr('title'),
                valor:novoConteudo },
                 success:function(result){
                      if( result == 'ok')
                        alert("Certo!" + result);
                      else 
                        console.log($.parseJSON(result));
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
$("#usuario-cadastro").blur(function(){
    var controller = 'usuario';
    var base_url = 'http://127.0.0.1:8082/ProjetosDeTestes/task/CodeIgniter/';
    var conteudo = $('#usuario-cadastro').val();
     $.ajax({
         url: base_url + controller +'/validaNovoUsuario',
         type: 'POST',
         data:{
          novoUsuario:JSON.stringify(conteudo) 
         }
     }).done( function( data ){
               alert(data);
     });
    
});
 });