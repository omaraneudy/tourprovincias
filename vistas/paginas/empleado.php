<?php

$empleados = ControladorPaginas::ctrSeleccionarEmpleado(null, null);


?>

<table class="table table-striped">
	<thead>
		<tr>
			<th><form method="post">
					<input type="text" name="nombreEmpleado">
					<button type="submit" ></button>

					<?php

						//$eliminar = new ControladorPaginas();
						//$eliminar -> ctrEliminarRegistro();

					?>

				</form>	
			</th>
			<th>       </th>
			<th><a href="index.php?pagina=registrarempleado">Nuevo</a></th>
		</tr>
		<tr>
			<th>id</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Correo</th>
            <th>Cargo</th>
			<th>Usuario</th>
		</tr>
	</thead>

	<tbody>

	<?php foreach ($empleados as $emp): ?>

		<tr>
			<td><?php echo $emp["pk_id_empleado"]; ?></td>
			<td><?php echo $emp["nombre"]; ?></td>
			<td><?php echo $emp["apellido"]; ?></td>
			<td><?php echo $emp["correo"]; ?></td>
            <td><?php echo $emp["nombre_cargo"]; ?></td>
			<td><?php echo $emp["nombre_usuario"]; ?></td>
            <td> <a href="index.php?pagina=editarempleado&id=<?php echo $emp["pk_id_empleado"]; ?>" >Editar</a>
            <form method="post">

                <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">

                <button type="submit" ></button>

                <?php
    
                    //$eliminar = new ControladorPaginas();
                    //$eliminar -> ctrEliminarRegistro();
        
                ?>

			</form>	
			</td>
		</tr>
		
	<?php endforeach ?>	
	
	</tbody>
</table>