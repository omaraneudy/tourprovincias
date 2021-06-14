<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->




<?php

if(!isset($_SESSION["validarIngreso"])){

	echo '<script>window.location = "index.php?pagina=ingreso";</script>';

	return;

}else{

	if($_SESSION["validarIngreso"] != "ok"){

		echo '<script>window.location = "index.php?pagina=ingreso";</script>';

		return;
	}
	
}


$tourprovincia = ControladorPaginas::ctrSeleccionarTour(null, null);

?>

<!-- tour packages -->
<section class="packages pt-5">
	<div class="container py-lg-4 py-sm-3">
		<h2 class="heading text-capitalize text-center"> Discover our tour packages</h2>
		<p class="text mt-2 mb-5 text-center">Vestibulum tellus neque, sodales vel mauris at, rhoncus finibus augue. Vestibulum urna ligula, molestie at ante ut, finibus vulputate felis.</p>
		<div class="row">
			
            <?php foreach ($tourprovincia as $tour): ?>

			<div class="col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="<?php echo $tour["ruta_imagen"]; ?>" alt="" class="img-fluid" />
					<p><span class="fa fa-tags"></span> <span>RD$<?php echo $tour["precio"]; ?> </span></p>
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span class="fa fa-map-marker mr-2"></span><?php echo $tour["nombre_provincia"]; ?></h6>
					<h5 class="my-2">Sodales vel mauris</h5>
					<p class=""><?php echo $tour["descripcion"]; ?></p>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duración : <span><?php echo $tour["duracion"]; ?> Días</span></li>
					</ul>
					<a href="index.php?pagina=reservaciontour&id=<?php echo $tour["pk_tour_provincia"]; ?>"> reservar</a>

					<!--<form method="post">
					<input type="hidden" value="<?php //echo $tour["pk_tour_provincia"]; ?>" name="reservarTour">
					<button type="submit" class="btn btn-danger"></button>
					</form> -->

				</div>
			</div>
			<?php endforeach ?>
			
			
		</div>
	</div>
</section>
<!-- tour packages -->



	
</body>
</html>