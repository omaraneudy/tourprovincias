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


$reservacion = ControladorPaginas::ctrConsultaClienteReservacion(null, null);


?>

<table>
<tr>
		<thead>
			<th><form method="post">
					<input type="text" name="provincia">
					<button type="submit"  >Buscar</button>

					<?php
						if(isset($_POST["provincia"]) && $_POST["provincia"]!= null)
						{
							$provincia = $_POST["provincia"];
							$reservacion = ControladorPaginas::ctrConsultaClienteReservacion("",$provincia);
						}
						else{
							$reservacion = ControladorPaginas::ctrConsultaClienteReservacion(null, null);

						}
						

					?>

				</form>	
			</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th><a href="index.php?pagina=tourprovincia">Nueva reservación</a></th>
		</thead>
		</tr>
		</table>

<table class="table table-striped">
	<thead>
		
		<tr>
			<th>id Reservación</th>
			<th>Reservación realizada en:</th>
			<th>Fecha de inicio del tour</th>
			<th>Fecha del fin del tour</th>
            <th>id tour provincia</th>
			<th>id estado pago</th>
		</tr>
	</thead>

	<tbody>

	<?php foreach ($reservacion as $res): ?>

		<tr>
			<td><?php echo $res["pk_id_reservacion"]; ?></td>
			<td><?php echo $res["fecha_reservacion"]; ?></td>
			<td><?php echo $res["fecha_inicio"]; ?></td>
			<td><?php echo $res["fecha_fin"]; ?></td>
            <td><?php echo $res["fk_tour_provincia"]; ?></td>
			<td><?php echo $res["fk_estado_pago"]; ?></td>
            <td> 
			<div class="btn-group">
			<div>
			<!--<a href="index.php?pagina=editarempleado&id=<?php //echo //$emp["pk_id_reservacion"]; ?>" class="btn btn-warning" >Editar</a>-->
            </div>
			<form method="post">
                
                <input type="hidden" value="<?php echo $res["pk_id_reservacion"]; ?>" name="cancelarReservacion">
				<input type="hidden" value="3" name="can">


					<?php
					//echo "id estado pago".$_POST["can"];
					//echo "id reservacion".$_POST["cancelarReservacion"];
                    $cancelar = ControladorPaginas::ctrEstadoReservacion();
			
					?>
					<?php if($res["fk_estado_pago"]!= 3):?>
					<button type="submit" class="btn btn-secondary">Cancelar Reservación</button>
					<?php endif ?>
					

                

			</form>	
			</div>
			</td>
		</tr>
		
	<?php endforeach ?>	
	<?php
		if($cancelar == "ok"){

			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

			echo '<div class="alert alert-success">Se ha cancelado correctamente</div>';
		
		}

	?>
	</tbody>
</table>