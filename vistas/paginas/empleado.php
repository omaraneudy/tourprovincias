<?php

$empleados = ControladorPaginas::ctrSeleccionarEmpleado(null, null);


?>

<div class="container-fluid">
    <div class="row flex-nowrap">
        
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">

                    </li>
                    <li class="nav-item">
                        <a href="index.php?pagina=tour" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Tours</span>
                        </a>
                    </li>
					<li>
                        <a href="index.php?pagina=reservacion" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Reservaciones</span></a>
                    </li>
                    <li>
                        <a href="index.php?pagina=empleado" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Empleados</span> </a>
                    </li>

                </ul>
                <hr>
            </div>
        </div>
        <!-- <div class="col py-3">
            Content area...
        </div> -->


                <!--AGREGADO-->

                <DIV>
                <h3 class="heading text-capitalize text-center">Empleados</h3>
				<table>
<tr>
		<thead>
			<th><form method="post">
					<label>Buscar por nombre</label>
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
			<!--<th><a href="index.php?pagina=registrarempleado">Nuevo</a></th>-->
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
			<!--<a href="index.php?pagina=editarempleado&id=<?php echo $emp["pk_id_empleado"]; ?>" class="btn btn-warning" >Editar</a>-->
            </div>
			</div>
			</td>
		</tr>
		
	<?php endforeach ?>	
	
	</tbody>
</table>
                   
                </DIV>

        
    
                    </div>    

                    
                    
                </table>
            

            <div>
                
        </div>

    </div>
</div>