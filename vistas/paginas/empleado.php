<?php

$empleados = ControladorPaginas::ctrSeleccionarEmpleado(null, null);


?>

<table>
<tr>
		<thead>
			<th><form method="post">
					<input type="text" name="nombreEmpleado">
					<button type="submit"  >Buscar</button>

					<?php
						if(isset($_POST["nombreEmpleado"]) && $_POST["nombreEmpleado"]!= null)
						{
							$nombreempleado = $_POST["nombreEmpleado"];
							$empleados = ControladorPaginas::ctrSeleccionarEmpleado("nombre",$nombreempleado);
						}
						else{
							$empleados = ControladorPaginas::ctrSeleccionarEmpleado(null, null);

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
            <td> 
			<div class="btn-group">
			<div>
			<a href="index.php?pagina=editarempleado&id=<?php echo $emp["pk_id_empleado"]; ?>" class="btn btn-warning" >Editar</a>
            </div>
			<form method="post">

                <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">

                <button type="submit" class="btn btn-secondary">Deshabilitar</button>

                <?php
    
                    //$eliminar = new ControladorPaginas();
                    //$eliminar -> ctrEliminarRegistro();
        
                ?>

			</form>	
			</div>
			</td>
		</tr>
		
	<?php endforeach ?>	
	
	</tbody>
</table>