<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  
  <title>Conversor</title>



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

<div style="background-image: url(public/img/conversor.jpg); background-size: cover; background-repeat: no-repeat;">



<main class="container" style=" height:700px;"> 

<?php

include ('header.php');

?>

<div class="form col-sm-12 col-lg-4 " >

  <h2 class="text-center">CONVERSOR MOEDAS</h2>

  <b><label id="text1">Converter: </label></b><br />
  <select class="form-control" id="a">
  <option></option>
  <option value="0">BRASIL | Real BRL</option>
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
  
  <input class="form-control" type="text" id="valor" ><br>



  <b><label id="text1">Para: </label></b><br />
  <select class="form-control" id="b">
  <option></option>
  <option value="0">BRASIL | Real BRL</option>
  <option value="1">ESTADOS UNIDOS | Dólar Comercial USD</option>
  <option value="2">ZONA DO EURO |Euro</option>
  <option value="3">REINO UNIDO | Libra GBP</option>
  <option value="4">ARGENTINA | Peso ARS</option>
  <option value="5">CHINA | Yuan CNY</option>
  <option value="6">JAPÃO | Iene JPY </option>
  <option value="7">EMIRADOS ÁRABES| Dirhan AED</option>
  <option value="8">AUSTRALIA | Dólar Australiano AUD </option>
  
  </select><br>





  <input type="submit" value="Converter" onclick="converter()" class="btn btn-primary btn-lg btn-block"><br>
  

  <div id="resultado"></div>
  

</div>

<div class="texto col-8">
		
</div>



<script>
      var real = 1.00;
      var dolar= 4.15;
      var euro = 4.54;
      var libra = 5.03;
      var peso = 0.07;
      var yuan = 0.058;
      var iene = 0.04;
	    var dirhan = 1.12; 	
      var australia = 2.78;
      var cifra;
    
      var quantidade;
      var cotacao;

      var totalFinal;

      var moedaA;
      var moedaB;

     
            
 function converter(){

    opcaoA =  document.getElementById('a').value
    opcaoB =  document.getElementById('b').value
  
    quantidade = parseFloat(document.getElementById('valor').value);


    switch (opcaoA) {
      
      case "0":
        moedaA = real; 
        break;
     
      case "1":
        moedaA = dolar; 
        break;
     
      case "2":
        moedaA = euro;
        break;

      case "3":
        moedaA = libra;
        break;
    		
      case "4":
        moedaA = peso;
        break;			
    			
      case "5":
        moedaA = yuan;
        break;			
    			
      case "6":
        moedaA = iene;
        break;
    			
      case "7":
        moedaA = dirhan;
         break;
    			
      case "8":
        moedaA = australia;
        break;	
  
    default:
        document.getElementById('total').innerHTML ='erro';
    }




    switch (opcaoB) {
     
          case "0":
            moedaB = real; 
            
            cifra ="R$: ";

            break;
         
          case "1":
            moedaB = dolar; 
            
            cifra ="U$: ";

            break;
         
          case "2":
            moedaB = euro;
            
            cifra ="Euro: ";
            break;

          case "3":
            moedaB = libra;
            
            cifra ="GBP: ";
            break;
            
          case "4":
            moedaB = peso;
            cifra ="ARS: ";
            break;      
              
          case "5":
            moedaB = yuan;
            cifra ="CNY: ";
            break;      
              
          case "6":
            moedaB = iene;
            cifra ="JPY: ";
            break;
              
          case "7":
            moedaB = dirhan;
            cifra ="AED: ";
             break;
              
          case "8":
            moedaB = australia;
            cifra ="AUD: ";
            break;  
      
        default:
            document.getElementById('total').innerHTML ='erro';
        }


        totalFinal = (moedaA * quantidade) / moedaB;



        if(opcaoB==0){


         document.getElementById('resultado').innerHTML ='<h3>' +cifra + totalFinal.toFixed(2).replace(".", ",") +  '</h3>';   

        }

        else{

        document.getElementById('resultado').innerHTML ='<h3>' +cifra + totalFinal.toFixed(2)+  '</h3>';    

        }

  

  

 }

</script>


    </main>

</div>
 

 
<?php

include ('footer.php');

?>

</footer>
</body>
</html>