<?php 
session_start();
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agencia Aventuras</title>
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


					<?php if ($_GET["pagina"] == "principal"): ?>
						<li class="active">
							<a  href="index.php?pagina=principal">Inicio</a>
						</li>

					<?php else: ?>

						<li class="">
							<a href="index.php?pagina=principal">Inicio</a>
						</li>
						
					<?php endif ?>

					<?php if (isset($_SESSION["validarIngreso"])): ?>
					<?php if ($_GET["pagina"] == "reservacioncliente"): ?>

					<?php echo "<li class=\"active\"> ";?>
						<?php echo"<a href=\"index.php?pagina=reservacioncliente\">Mis reservaciones</a>";?>
					<?php echo"</li>";?>

					<?php else: ?>

						<?php echo "<li class=\"\"> ";?>
						<?php echo"<a href=\"index.php?pagina=reservacioncliente\">Mis reservaciones</a>";?>
					<?php echo"</li>";?>

					<?php endif ?>
					<?php endif ?>

					<?php if (isset($_SESSION["validarIngreso"])): ?>
					<?php if ($_GET["pagina"] == "salir"): ?>

					<?php echo "<li class=\"active\"> ";?>
						<?php echo"<a href=\"index.php?pagina=salir\">Salir</a>";?>
					<?php echo"</li>";?>

					<?php else: ?>

						<?php echo "<li class=\"\"> ";?>
						<?php echo"<a href=\"index.php?pagina=salir\">Salir</a>";?>
					<?php echo"</li>";?>

					<?php endif ?>
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

					<?php if ($_GET["pagina"] == "cuenta"): ?>

					<li class="active">
						<a href="index.php?pagina=cuenta">Cuenta</a>
					</li>

					<?php else: ?>

					<li class="">
						<a href="index.php?pagina=cuenta">Cuenta</a>
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
					<li class="nav-item">
						<a href="index.php?pagina=cuenta">Cuenta</a>
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
						$_GET["pagina"] == "empleado"||
						$_GET["pagina"] == "registrartour"||
						$_GET["pagina"] == "principal"||
						$_GET["pagina"] == "reservacion"||
						$_GET["pagina"] == "cuenta"||
						$_GET["pagina"] == "admin"||
						$_GET["pagina"] == "cliente"||
						$_GET["pagina"] == "tour"||
						$_GET["pagina"] == "editartour"||
						$_GET["pagina"] == "registrocliente"){

							include "paginas/".$_GET["pagina"].".php";

						}else{

							include "paginas/error404.php";
						}


					}else{

						include "paginas/principal.php";

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
					<h3>Dirección</h3>
				</div>
				<div class="footer-text">
					<p>Calle, Republica Dominicana</p>
					<p>Telefono : +1 809-574-0000</p>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Nosotros</h3>
				</div>
				<div class="footer-text">
					<p>Enfocados en brindar las mejores experiencias a quienes desean conocer los lugares mas atractivos de la Republica Dominicana.</p>
				</div>
				<ul class="social_section_1info">
					<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<!--<li class="Instagram"><a href="#"><span class="fa fa-google-plus"></span></a></li>-->
					<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
				</ul>
				</div>
			</div>
			
		</div>
	</div>
</section>

</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright py-3 text-center">
	<!-- 	<p>© 2019 Agencia Aventuras. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> ellos </a></p> -->

	<p>© 2021 | Agencia Aventuras. </a></p>
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