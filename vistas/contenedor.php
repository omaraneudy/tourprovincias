<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Agencia tour</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="keywords" content="Grand Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

		<script>
			addEventListener("load", function () {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
	
		<!-- css files -->
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
		<link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
		<link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
		<!-- //css files -->
		
		<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">

		<!-- google fonts -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<!-- //google fonts -->
	
	</head>
	<body>
	<!-- header -->
	<header>
		<div class="container">
			<!-- nav -->
			<nav class="py-md-4 py-3 d-lg-flex">
				<div id="logo">
					<h1 class="mt-md-0 mt-2"> <a href="index.html"><span class="fa fa-map-signs"></span> Grand Tour </a></h1>
				</div>
				<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
				<input type="checkbox" id="drop" />
				<ul class="menu ml-auto mt-1">

					<?php if (isset($_GET["pagina"])): ?>

					<?php if ($_GET["pagina"] == "reservaciontour"): ?>
						<li class="active">
							<a href="index.php?pagina=reservaciontour">Reservacion tour</a>
						</li>

					<?php else: ?>
						<li class="">
							<a  href="index.php?pagina=reservaciontour">Reservacion tour</a>
						</li>
					<?php endif ?>

					<?php if ($_GET["pagina"] == "ingreso"): ?>
						<li class="active">
							<a  href="index.php?pagina=ingreso">Ingreso</a>
						</li>

					<?php else: ?>

						<li class="">
							<a href="index.php?pagina=ingreso">Ingreso</a>
						</li>
						
					<?php endif ?>

					<?php if ($_GET["pagina"] == "inicio"): ?>

						<li class="active">
							<a  href="index.php?pagina=inicio">Inicio</a>
						</li>

					<?php else: ?>

						<li class="">
							<a href="index.php?pagina=inicio">Inicio</a>
						</li>
						
					<?php endif ?>
					<?php if ($_GET["pagina"] == "salir"): ?>

					<li class="active">
						<a href="index.php?pagina=salir">Salir</a>
					</li>

					<?php else: ?>

					<li class="">
						<a href="index.php?pagina=salir">Salir</a>
					</li>

					<?php endif ?>
					<?php if ($_GET["pagina"] == "tourprovincia"): ?>

						<li class="active">
							<a href="index.php?pagina=tourprovincia">Tours</a>
						</li>

					<?php else: ?>

						<li class="">
							<a href="index.php?pagina=tourprovincia">Tours</a>
						</li>
						
					<?php endif ?>

					<?php if ($_GET["pagina"] == "registrocliente"): ?>

					<li class="active">
						<a href="index.php?pagina=registrocliente">Registro</a>
					</li>

					<?php else: ?>

					<li class="">
						<a href="index.php?pagina=registrocliente">Registro</a>
					</li>

					<?php endif ?>

					

					<?php else: ?>


					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=registrocliente">Registro</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
					</li>
					<li class="nav-item">
						<a href="index.php?pagina=salir">Salir</a>
					</li>
					<li class="nav-item">
						<a href="index.php?pagina=tourprovincia">Tours</a>
					</li>

					<?php endif ?>

				</ul>
			</nav>
			<!-- //nav -->
		</div>
	</header>
	<!-- //header -->

<!-- banner -->
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
<!-- //banner -->


		<div class="container-fluid">
			
			<div class="container py-5">

				<?php 

					if(isset($_GET["pagina"])){

						if($_GET["pagina"] == "reservaciontour" ||
						$_GET["pagina"] == "ingreso" ||
						$_GET["pagina"] == "inicio" ||
						$_GET["pagina"] == "tourprovincia"||
						$_GET["pagina"] == "salir"||
						$_GET["pagina"] == "pruebas"||
						$_GET["pagina"] == "reservacioncliente"||
						$_GET["pagina"] == "registrartour"||
						$_GET["pagina"] == "empleado"||
						$_GET["pagina"] == "registrocliente"){

							include "paginas/".$_GET["pagina"].".php";

						}else{

							include "paginas/error404.php";
						}


					}else{

						include "paginas/registrocliente.php";

					}

					

				?>

			</div>

		</div>

	<!--footer -->
	<footer>
	<section class="footer footer_w3layouts_section_1its py-5">
		<div class="container py-lg-4 py-3">
			<div class="row footer-top">
				<div class="col-lg-3 col-sm-6 footer-grid_section_1its_w3">
					<div class="footer-title">
						<h3>Address</h3>
					</div>
					<div class="footer-text">
						<p>Location : 1234 lock, Charlotte, North Carolina, United States</p>
						<p>Phone : +12 534894364</p>
						<p>Email : <a href="mailto:info@example.com">info@example.com</a></p>
						<p>Fax : +12 534894364</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 footer-grid_section mt-sm-0 mt-4">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>Vivamus magna justo, laci niats eget consectetur sed, conval lis at tellus. Nulla quis lorem ipnt libero.
						Lorem ipsum dolor.</p>
					</div>
					<ul class="social_section_1info">
						<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
						<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
					<div class="footer-title">
						<h3>Travel Places</h3>
					</div>
					<div class="row">
						<ul class="col-6 links">
							<li><a href="#choose" class="scroll">New Zealand </a></li>
							<li><a href="#overview" class="scroll">Paris, France </a></li>
							<li><a href="#pricing" class="scroll">Los Angles</a></li>
							<li><a href="#faq" class="scroll"> Darlington</a></li>
							<li><a href="#testimonials" class="scroll">Canada </a></li>
							<li><a href="index.php?pagina=empleado">Empleado </a></li>
						</ul>
						<ul class="col-6 links">
							<li><a href="index.php?pagina=pruebas">pruebas </a></li>
							<li><a href="index.php?pagina=reservacioncliente">reservacion clientes </a></li>
							<li><a href="index.php?pagina=registrartour">registrar tour </a></li>
							<li><a href="#">Italy </a></li>
							<li><a href="#">Sweden </a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
					<div class="footer-title">
						<h3>Newsletter</h3>
					</div>
					<div class="footer-text">
						<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
						<form action="#" method="post">
							<input type="email" name="Email" placeholder="Enter your email..." required="">
							<button class="btn1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	</footer>
	<!-- //footer -->

	<!-- copyright -->
	<div class="copyright py-3 text-center">
		<p>© 2019 Grand Tour. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a></p>
	</div>
	<!-- //copyright -->

	<!-- move top -->
	<div class="move-top text-right">
		<a href="#home" class="move-top"> 
			<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
		</a>
	</div>
	<!-- move top -->
		
	</body>
</html>