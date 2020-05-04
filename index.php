<!doctype html>
<html >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- boostrap -->
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
 
    <style>
      figure img{margin: 10px}
      
    </style>

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Casa de Câmbio</title>
  </head>

  <body>
    
    	
    <main class="container-fluid"> 

 <?php

include ('header.php');

?>

    
           <!-- carrosel -->
      <div  style=" border-radius : 30px;">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="public/img/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>DÓLAR</h1>
                  <h2>R$ 4,15</h2>
              </div>
            </div>
              <div class="carousel-item">
                <img src="public/img/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>LIBRA</h1>
                  <h2>R$ 5,30</h2>
                </div>
              </div>
              <div class="carousel-item ">
                <img src="public/img/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>EURO</h1>
                  <H2>R$ 4,65</H2>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>



        <div class="homea d-flex flex-column justify-content-center">
          
          <h1>MOEDAS EM ESPÉCIE NAS VIAGENS PARA O EXTERIOR</h1><br>
          
          <h2>As nossas moedas são importadas e numeradas, trabalhamos com toda a garantia e qualidade para atender você em sua viagem.</h2><br>
          
          <div class="row justify-content-center">

          <a class="btn btn-lg " href="moeda.php">Saiba mais...</a>
         
         </div>

        </div>
        
        <div class="homeb d-flex flex-column justify-content-center">
          
          <h1>REMESSAS INTERNACIONAIS</h1><br>
          <h2>Transfira dinheiro para qualquer lugar do mundo com as Remessas Internacionais ou Remessas Expressas do Ourinvest Câmbio. </h2><br>

          <div class="row justify-content-center">

         <a class="btn btn-lg" href="transferencia.php">Saiba mais...</a>
         </div>
        </div>
        
        <div class="homec d-flex flex-column justify-content-center">
          
          <h1>CARTÕES DE VIAGEM MULTIMOEDAS OURINVEST</h1></a><br>
          <h2>Viaje com toda segurança e controle sobre gastos!</h2><br>

          <div class="row justify-content-center">

         <a class="btn btn-lg" href="cartao.php">Saiba mais...</a>
         
          </div>
          
        </div>
          
         <!-- Footer -->

        		<footer class="pt-5 pb-4" id="contact">
			<div class="container">
				<div class="row" style="margin-top: -30px;margin-bottom: -40px;">
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">SOBRE NÓS</h5>
						
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-map-marker"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Endereço:</h6>
										<p>Avenida Ana Costa 200, Vila Mathias|Santos/SP<br>CEP 11013-020</p>
									</div>
								</div>
							</li>
						
						
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">TWEETS RECENTES</h5>
						<ul class="f-address">
					
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><h6 class="font-weight-bold mb-0">@GlobalCâmbio</h6>10 Min Atrás</p>
										
									</div>
								</div>
							</li>
						
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">ULTIMA ATUALIZAÇÃO</h5>
						<ul class="recent-post">
							<li>
								<label class="mr-3">25<br><span>SET</span></label>
								<h6 class="font-weight-bold mb-0">Cotações atualizadas</h6>
							</li>
				
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">CONECTE-SE CONOSCO</h5>
						<div class="input-group">
						  	<input type="text" class="form-control" placeholder="Seu email">
						  	<span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
						</div>
						<ul class="social-pet mt-4">
							<li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- Copyright -->
		<section class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<div class="text-center text-white">
							&copy; 2019 Global Câmbio. All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</section>
     
</main>



  
 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 



<script src="public/js/jquery.js"></script>
<script src="public/js/bootstrap.bundle.min.js"></script>

</body>
</html>