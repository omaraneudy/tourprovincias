<?php

$tourprovincia = ControladorPaginas::ctrSeleccionarTour(null, null);

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
                        <a href="index.php?pagina=registrartour" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Tours</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Reservaciones</span></a>
                    </li>
                    <li>
                        <a href="index.php?pagina=empleado" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Empleados</span> </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
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
                <h3 class="heading text-capitalize text-center">Tours</h3>
				<table>
<tr>
		<thead>
		
                <th><form method="post">
                <label>Buscar por provincia</label>
			<select name="provincia">
            <option value="" ></option>
            <?php foreach($provincias as $prov):?>
            <option value ="<?php echo $prov["pk_id_provincia"];?>"><?php echo $prov["nombre_provincia"]; ?></option>
            <?php endforeach ?>
            </select><br>
					<button type="submit"  >Buscar</button>

					<?php
						if(isset($_POST["provincia"]) && $_POST["provincia"]!= null)
						{
							$provincia = $_POST["provincia"];
							$tourprovincia = ControladorPaginas::ctrSeleccionarTour("fk_provincia",$provincia);
						}
						else{
							$tourprovincia = ControladorPaginas::ctrSeleccionarTour(null, null);

						}
						

					?>

				</form>	


			</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th><a href="index.php?pagina=registrartour" class="btn btn-success">Agregar nuevo Tour</a></th>
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

	<?php foreach ($tourprovincia as $tour): ?>
        "SELECT DATEDIFF(t.fecha_fin, t.fecha_inicio) As duracion, t.pk_tour_provincia, t.descripcion, t.fecha_inicio, t.fecha_fin, p.nombre_provincia, t.precio, t.ruta_imagen, t.detalle_tour  FROM $tabla t inner join provincia p on t.fk_provincia = p.pk_id_provincia WHERE $item = :$item ORDER BY t.pk_tour_provincia DESC");
		<tr>
			<td><?php echo $tour["pk_tour_provincia"]; ?></td>
			<td><?php echo $emp["nombre_provincia"]; ?></td>
			<td><?php echo $emp["apellido"]; ?></td>
			<td><?php echo $emp["correo"]; ?></td>
            <td><?php echo $emp["nombre_cargo"]; ?></td>
			<td><?php echo $emp["nombre_usuario"]; ?></td>
            <td> 
			<div class="btn-group">
			<div>
			<a href="index.php?pagina=editartour&id=<?php echo $emp["pk_tour_provincia"]; ?>" class="btn btn-warning" >Editar</a>
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
                   
                </DIV>

        
    
                    </div>    

                    
                    
                </table>
            

            <div>
                
        </div>

    </div>
</div>