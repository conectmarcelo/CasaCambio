<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  
  <title>Cartão</title>



  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="public/js/jquery.js"></script>
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="public/js/jquery.mask.min.js"></script>

  <script>
    $(document).ready(function () { 
    $("#valor").mask("9.990.00",{reverse:true})
    });
  </script>



<link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>

  <div style="background-image: url(public/img/cartao.jpg); background-size: cover; background-repeat: no-repeat;">

  <main class="container" style=" height:700px;"> 

    <?php

include ('header.php');

?>


<div class="form  col-sm-12 col-lg-4"  >

<h2 class="text-center">CARTÃO PRÉ-PAGO</h2>

         <b><label id="text1">Escolha a moeda: </label></b><br />
          <select class="form-control" id="opções">
          <option></option>
          <option value="1">ESTADOS UNIDOS | Dólar Comercial USD</option>
          <option value="2">ZONA DO EURO |Euro</option>
          <option value="3">REINO UNIDO | Libra GBP</option>
          <option value="4">ARGENTINA | Peso ARS</option>
          <option value="5">CHINA | Yuan CNY</option>
          <option value="6">JAPÃO | Iene JPY </option>
          <option value="7">EMIRADOS ÁRABES| Dirhan AED</option>
          <option value="8">AUSTRALIA | Dólar Australiano AUD </option>
          
          </select><br>

          <b><label>Escolha a quantia:</label><br>
          <input class="form-control" type="text" min="0" onkeyup="k(this);" id="valor"><br>



         
  <input type="submit" value="Cotação" onclick="cotar()" class="btn btn-primary btn-lg btn-block"><br>
  <a class="btn btn-primary btn-lg btn-block" href="login.php" role="button">Reservar</a>

  <div id="cotacao"> </div>
  <div id="taxa"></div>
  <div id="iof"></div>
  <div id="totFinal"></div>
</div>

<div class="texto col-8">
  

</div>



<script>

      var dolar= 4.15;
      var euro = 4.54;
      var libra = 5.03;
      var peso = 0.07;
      var yuan = 0.058;
      var iene = 0.04;
      var dirhan = 1.12;  
      var australia = 2.78;
    
      var quantidade;
      var cotacao;

      var iof = 0.0638;
      var taxa = 2.99;
      var totalFinal;

     
      var opcao;

      
 function cotar(){



quantidade = parseFloat(document.getElementById('valor').value);
opcao =  document.getElementById('opções').value

  
    switch (opcao) {
 
  case "1":

    cotacao = dolar * quantidade;   
    
    break;
 
  case "2":

    cotacao = euro * quantidade;   

    break;

case "3":

  
    cotacao = libra * quantidade;   

    break;
    
case "4":

  
    cotacao = peso * quantidade;   

    break;      
      
case "5":

    
    cotacao = yuan * quantidade;   

    break;      
      
case "6":

    
    cotacao = iene * quantidade;   

    break;
      
case "7":

    
    cotacao = dirhan * quantidade;   

    break;
      
case "8":

    
    cotacao = australia * quantidade;   

    break;  
      
      
  default:

    document.getElementById('total').innerHTML ='erro';
    
}

    iof = cotacao * iof;
    totalFinal = (cotacao + iof + taxa);
    
    document.getElementById('cotacao').innerHTML ='<p>Cotação : R$ ' + cotacao.toFixed(2).replace('.',',') + '</p>';
    document.getElementById('iof').innerHTML ='<p>IOF 6.38% : R$ ' + iof.toFixed(2).replace('.',',') +  '</p>';
    document.getElementById('taxa').innerHTML ='<p>Taxa Administrativa : R$ ' + taxa.toFixed(2).replace('.',',') +  '</p>';
    document.getElementById('totFinal').innerHTML ='<h4>Total : R$ ' + totalFinal.toFixed(2).replace('.',',') +  '</h4>';


 }



</script>

</main>

</div>

<div style="background-color: #4B0082; float:left; padding: 50px;">



<h4>É um cartão pré-pago em moeda estrangeira que pode ser carregado em até seis moedas diferentes*. Com ele você realiza compras e saques na moeda local do país onde estiver. Aceito em mais de 32 milhões de estabelecimentos e caixas eletrônicos credenciados Mastercard® em todo o mundo, o Cartão de Viagem Multi - Moeda torna a sua viagem muito mais fácil, prática e segura.</h4>


 </div>


     
</main>


<?php

include ('footer.php');

?>


</body>
</html>