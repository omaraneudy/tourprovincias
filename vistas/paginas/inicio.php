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

$tourprovincia = ControladorFormularios::ctrSeleccionarTour(null, null);


?>




<table class="">
	<thead>
		<tr>
			<th>id</th>
			<th>Descripción</th>
			<th>Precio</th>
			<th>Duración</th>
		</tr>
	</thead>

	<tbody>

	<?php foreach ($tourprovincia as $tour): ?>

		<tr>
			<td><?php echo $tour["pk_tour_provincia"]; ?></td>
			<td><?php echo $tour["descripcion"]; ?></td>
			<td><?php echo $tour["precio"]; ?></td>
			<td><?php echo $tour["duracion"]; ?></td>
		</tr>
		
	<?php endforeach ?>	
	




	</tbody>
</table>


