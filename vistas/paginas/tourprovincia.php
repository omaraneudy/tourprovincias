<?php

$tourprovincia = ControladorPaginas::ctrSeleccionarTour(null, null);

?>

<!-- tour packages -->
<section class="packages pt-5">
	<div class="container py-lg-4 py-sm-3">
	<h3 class="heading text-capitalize text-center"> Descubra Nuestros Paquetes Turísticos</h3>
		<p class="text mt-2 mb-5 text-center">Porque nuestra meta es que disfrutes, sin preocupaciones, ofrecemos paquetes para que vivan la experiencia junto a nosotros .</p>
		<div class="row">
			
            <?php foreach ($tourprovincia as $tour): ?>

			<div class="col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="<?php echo $tour["ruta_imagen"]; ?>" alt="" class="img-fluid" />
					<p><span class="fa fa-tags"></span> <span>RD$<?php echo $tour["precio"]; ?> </span></p>
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span class="fa fa-map-marker mr-2"></span><?php echo $tour["nombre_provincia"]; ?></h6>
					<h5 class="my-2"><?php echo $tour["descripcion"]; ?></h5>

					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duración : <span><?php echo $tour["duracion"]; ?> Días</span></li>
					</ul>
					<a href="index.php?pagina=reservaciontour&id=<?php echo $tour["pk_tour_provincia"]; ?>"> Reservar</a>

				</div>
			</div>
			<?php endforeach ?>
			
			
		</div>
	</div>
</section>
<!-- tour packages -->



	
</body>
</html>