
<?php

      if(  isset($_POST['nome'])   )
      {
           $nome   =  $_POST['nome'];
           $cpf  =  $_POST['cpf'];
           $telefone = $_POST['telefone'];
		   $moeda =  $_POST['moeda'];
           $quantidade =  $_POST['quantidade'];
		   
      }
      else
      {
            header('location:reserva.php');
            exit;
      }


      
  include('conexao.php');

	  
	  
	$sql ="insert into cambio.reserva (nome,cpf,telefone,valor,quantidade) values
		('{$nome}','{$cpf}','{$telefone}','{$moeda}','{$quantidade}')";
		$resultado = mysqli_query($conexao, $sql);
		
		if($resultado)
		

		 header('location:reserva.php');
            
		
		else 
		echo "</h1>erro ao inserir</h1></br>";
		mysqli_close($conexao);
		
		
		
		
		
		
             
        
       ?>



