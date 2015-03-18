
<html >
<head>
    <title>Página Principal</title>
	<meta charset="utf-8">
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/novojs.js"></script>
<!-- Bootstrap CSS -->
<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap-responsive.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap-min.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>/bootstrap/css/dashboard.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>bootstrap/estilo.css" rel="stylesheet" />

<!-- estilo css página -->
<style type="text/css"> 

 

</style>
<!-- jquery  login -->
<script>




</script>
</head>
<body>
   <div id="interface">

    
     <table class="table table-bordered table-striped"  class="tabelaEditavel" id="tabela">
     <?php 
           
           
           if(!is_null($data))
           {

            
             echo '
                       <thead>
                       <tr>
                       <th style="text-align:center";> ID </th>
                       <th style="text-align:center";> Título </th>
                       <th style="text-align:center";> Conteudo </th>
                       <th style="text-align:center";> Responsável </th>
                       
                       </tr>
                       </thead>';
            foreach ($data as $key ) {
                   echo   '<tbody>
                       <tr>
                       <td  style="text-align:center";>'.$key['id'].'</td> 
                        <td title="titulo" class="editavel" style="text-align:center";>'.$key['titulo'].'</td>
                        <td title="conteudo" class="editavel" style="text-align:center";>'.$key['conteudo'].'</td>
                        <td title="nome" class="editavel" style="text-align:center";>'.$key['nome'].'</td>
                        </tr>
                       </tbody>';
                     

            }
            
             
           }
      
     ?>
     </table>
<footer id="rodape">
                <p>
                    Copyright &copy; 2013 - by Juarez G. Coelho
                    <br>
                    Facebook | Twitter
                </p>
</footer>
</div>


  </body>
</html>