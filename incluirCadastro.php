
<?php

      if(  isset($_GET['nome'])   )
      {
           $nome   =  $_GET['nome'];
           $cpf  =  $_GET['cpf'];
           $telefone = $_GET['telefone'];
		   $valor =  $_GET['valor'];
           $quantidade =  $_GET['quantidade'];
		   
      }
      else
      {
            header('location:reserva.php');
            exit;
      }


      
  include('conexao.php');

	  
	  
	$sql ="insert into cambio.reserva (nome,cpf,telefone,valor,quantidade) values
		('{$nome}', '{$cpf}','{$telefone}','{valor}','{quantidade}')";
		$resultado = mysqli_query($conexao, $sql);
		if($resultado)
		echo "<h1>Cadastrado com sucesso</h1></br>";
		else 
		echo "</h1>erro ao inserir</h1></br>";
		mysqli_close($conexao);
		
		
		
		
		
		
             
        
       ?>



