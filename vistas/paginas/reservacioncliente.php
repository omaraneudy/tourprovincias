<?php

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
			<th><a href="index.php?pagina=registrarempleado">Nuevo</a></th>
		</thead>
		</tr>
		</table>

<table class="table table-striped">
	<thead>
		
		<tr>
			<th>id Reservación</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Correo</th>
            <th>Cargo</th>
			<th>Usuario</th>
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
			<a href="index.php?pagina=editarempleado&id=<?php //echo //$emp["pk_id_empleado"]; ?>" class="btn btn-warning" >Editar</a>
            </div>
			<form method="post">
                <?php if($res["fk_estado_pago"]!= 3)?>{}
                <input type="hidden" value="<?php //echo //$value["id"]; ?>" name="cancelarReservacion">

                <button type="submit" class="btn btn-secondary">Cancelar Reservación</button>


    
                    //$eliminar = new ControladorPaginas();
                    //$eliminar -> ctrEliminarRegistro();


                

			</form>	
			</div>
			</td>
		</tr>
		
	<?php endforeach ?>	
	
	</tbody>
</table>