<!-- Reservación de tour -->
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
?>

<?php
 if(isset($_GET["id"])){

    $item = "pk_tour_provincia";
    $valor = $_GET["id"];

    $tourprovincia = ControladorFormularios::ctrSeleccionarTour($item, $valor);

}
?>

<section class="contact py-5">
	<div class="container py-lg-5 py-sm-4">
		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Reservar Tour</h2>
		<div class="contact-grids">
			<div class="row">
				<div class="col-lg-5 contact-right pl-lg-5">
				
					<div class="image-tour position-relative">
						<img src="<?php echo $tourprovincia["ruta_imagen"]; ?>" alt="" class="img-fluid" />
						<p><span class="fa fa-tags"></span> <span>RD$<?php echo $tourprovincia["precio"]; ?></span></p>
					</div>
					
					<h4><?php echo $tourprovincia["descripcion"]; ?></h4>
					<p class="mt-3"> <?php echo $tourprovincia["detalle_tour"]; ?></p>


					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Reservación de tour -->