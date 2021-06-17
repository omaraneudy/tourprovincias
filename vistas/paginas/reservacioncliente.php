
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
$provincias = ControladorPaginas::ctrListarProvincia(null,null);

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
                        <a href="index.php?pagina=reservacioncliente" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Mis reservaciones</span>
                        </a>
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
                <h3 class="heading text-capitalize text-center"> Mis reservaciones</h3>
               

<table>
<tr>
		<thead>
			<th><form method="post">
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
							$reservacion = ControladorPaginas::ctrConsultaClienteReservacion("fk_provincia",$provincia);
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
			<th>Provincia</th>
			<th>Estado del pago</th>
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
			<td><?php echo $res["nombre_provincia"]; ?></td>
			<td><?php echo $res["estado"]; ?></td>
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
                </DIV>

        
    
                    </div>    

                    
                    
                </table>
            

            <div>
                
        </div>

    </div>
</div>