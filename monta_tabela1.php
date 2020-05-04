
<?php

include ('conexao.php');

?>


<?php

     	  
	  $sql = "Select * FROM cambio.usuarios";
;

      $resultado = mysqli_query($conexao,$sql)
                            or die("<h3>$sql</h3>" . mysqli_error($conexao) );


      $linhas = mysqli_num_rows($resultado);

		
      if($linhas == 0)
      {
          echo '<h3>Nenhum registro foi localizado</h3>';
          include('fecha.php');
          exit;
      }


     
if ($resultado->num_rows > 0) {
    // output data of each row
    while($linhas = $resultado->fetch_assoc()) {
      
			$id = $linhas['id'];
			$nome = $linhas['nome'];
			$email = $linhas['email'];
      $usuario = $linhas['usuario'];
      $senha = $linhas['senha'];
                 
		
		$excluir='<img src="public/img/delete.jpg"alt="exclusão"/>';
		
		$excluir="<a href='excluir1.php?id=$id'>$excluir</a>";
		

		echo "

  		<tbody>
    	<tr>
    	<th scope='row'>$id</th>
        	 <td>$nome</td>
           <td>$email</td>
    			 <td>$usuario</td>
    			 <td>$senha</td>
           <td>$excluir</td>	
		</tr>
		</tbody>";


	}
	} else {
    echo "0 results";}


      
?>




