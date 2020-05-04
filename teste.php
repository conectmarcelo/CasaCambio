<?php

      if(  isset($_POST['nome'])   )
      {
           $nome   =  $_POST['nome'];
           $cpf  =  $_POST['cpf'];
           $telefone = $_POST['telefone'];
		       $valor =  $_POST['valor'];
           $quantidade =  $_POST['quantidade'];
		   




      }
      else
      {
            header('location:envia.php');
            exit;
      }


      


      include('conexao.php');


	  
	  
	$sql ="insert into cambio.reserva (nome,cpf,telefone,valor,quantidade) values
		('{$nome}', '{$cpf}',{$telefone}','{valor}','{quantidade}'	)";
		$resultado = mysqli_query($conexao, $sql);
		if($resultado)
		echo "<h1>Cadastrado com sucesso</h1></br>";
		else 
		echo "</h1>erro ao inserir</h1></br>";
		mysqli_close($conexao);
		
		
		
		
		
		
             
        
       ?>



