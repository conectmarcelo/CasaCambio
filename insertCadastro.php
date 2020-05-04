
<?php

      if(  isset($_POST['nome'])   )
      {
           $nome = $_POST['nome'];
           $cpf  =  $_POST['cpf'];
           $email = $_POST['email'];
		   $telefone = $_POST['telefone'];
           
		   
      }
      else
      {
            header('location:cadastro.php');
            exit;
      }


      
  include('conexao.php');

	  
	  
	$sql ="insert into cambio.cadastro (nome,cpf,email,telefone) values
		('{$nome}','{$cpf}','{$email}','{$telefone}')";
		$resultado = mysqli_query($conexao, $sql);
		
		if($resultado)
		

		 header('location:cadastro.php');
            
		
		else 
		echo "</h1>erro ao inserir</h1></br>";
		mysqli_close($conexao);
		
		
		
		
		
		
             
        
       ?>



