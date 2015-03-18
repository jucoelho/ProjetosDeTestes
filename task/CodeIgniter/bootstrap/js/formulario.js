$(function() {
 
   $('.usuario').blur(function(){
     
     
     var nome = $(this).val();

     $.ajax({
          type:"POST",
          url:'<?php echo base_url() ?>usuario/validarUsuario',
          data:{user:nome},
          success:function(response){
          	
            }
        });
      
       
  });

   

});