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
                      alert(result);
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