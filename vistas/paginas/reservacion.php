<?php

$reservaciones = ControladorPaginas::ctrConsultaReservacion(null, null);

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
                <h3 class="heading text-capitalize text-center">Reservaciones</h3>
				<table class="table-sm">
<tr>
		<thead>
			<th><form method="post">
					<label>Buscar cliente por id</label>
					<input type="text" name="idCliente">
					<button type="submit"  >Buscar</button>

					<?php
						if(isset($_POST["idCliente"]) && $_POST["idCliente"]!= null)
						{
							$idcliente = $_POST["idCliente"];
							
                            $reservaciones = ControladorPaginas::ctrConsultaReservacion("pk_id_cliente", $idcliente);
						}
						else{
							
                            $reservaciones = ControladorPaginas::ctrConsultaReservacion(null,null);
                            

						}
						

					?>

				</form>	
			</th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			
		</thead>
		</tr>
		</table>

<table class="table table-striped table-sm">
	<thead>
		
		<tr>
			<th>id Reservación</th>
			<th>id cliente</th>
			<th>Nombre cliente</th>
			<th>Fecha de reservación</th>
			<th>Inicio del tour</th>
            <th>Fin del tour</th>
			<th>id tour</th>
			<th>Provincia</th>
			<th>Estado de pago</th>
            
		</tr>
	</thead>

	<tbody>

	<?php foreach ($reservaciones as $res): ?>

		<tr>
		<td><?php echo $res["pk_id_reservacion"]; ?></td>
		<td><?php echo $res["fk_cliente"]; ?></td>
		<td><?php echo $res["nombre"]; ?></td>
			<td><?php echo $res["fecha_reservacion"]; ?></td>
			<td><?php echo $res["fecha_inicio"]; ?></td>
			<td><?php echo $res["fecha_fin"]; ?></td>
            <td><?php echo $res["fk_tour_provincia"]; ?></td>
			<td><?php echo $res["nombre_provincia"]; ?></td>
			<td><?php echo $res["estado"]; ?></td>
            <td> 
			<div class="btn-group">
			<div>
			<!--<a href="index.php?pagina=editarempleado&id=<?php //echo $emp["pk_id_empleado"]; ?>" class="btn btn-warning" >Editar</a>
            --></div>
			</div>
			<form method="post">
                
                <input type="hidden" value="<?php echo $res["pk_id_reservacion"]; ?>" name="cancelarReservacion">
				<select name="can">
				<option value="<?php echo $res["pk_id_estado"]; ?>" ><?php echo $res["estado"]; ?></option>
            	
            		<option value ="1">Realizado</option>
					<option value ="2">Pendiente</option>
					<option value ="3">Cancelado</option>

            		</select>


					<?php
                    $cancelar = ControladorPaginas::ctrEstadoReservacion();
					?>
					
					<button type="submit" class="btn btn-secondary btn-sm">Cambiar estado de pago</button>
			</form>	
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