<?php

     

      $id = $_GET['id'];

     
      include('conexao.php');

      $sql = "delete from reserva where id = $id";

      mysqli_query($conexao,$sql)
           or die("<h3>$sql</h3>" . mysqli_error($conexao) );

      if( mysqli_affected_rows($conexao) > 0   )
      {
         echo "<script>alert('Registro Excluido com Sucesso')</script>";
      }
      else
      {
         echo "<script>alert('Registro Já excluido por outro usuário')</script>";
      }

      echo "<script>self.location='listar.php'</script>";

      include('fecha.php');


?>