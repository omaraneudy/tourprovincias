
<?php
$provincias = ControladorPaginas::ctrListarProvincia(null,null);

 if(isset($_GET["idp"]))
 {

    $item = "pk_tour_provincia";
    $valor = $_GET["idp"];
	


    $tourprovincia = ControladorPaginas::ctrSeleccionarTour($item, $valor);

	$nombrecolumn = "pk_id_provincia";
	$provincia = ControladorPaginas::ctrListarProvincia($nombrecolumn,$tourprovincia["fk_provincia"]);



}


?>


<div class="container-fluid">
<h3 class="heading text-capitalize text-center">Editar tour</h3>
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

				<form  method="post"  class="col-lg-7 contact-left-form">
			

<label for="provincia">Provincia</label>
<select name="actualizarProvincia">
<option value="<?php echo $provincia["pk_id_provincia"];?>"><?php echo $provincia["nombre_provincia"];?></option>
<?php foreach($provincias as $prov):?>
<option value ="<?php echo $prov["pk_id_provincia"];?>"><?php echo $prov["nombre_provincia"]; ?></option>
<?php endforeach ?>
</select><br>
<label for="">Descripción</label><textarea class="form-control" value="" name="actualizarDescripcion"><?php echo $tourprovincia["descripcion"];?></textarea>    

<label >Fecha inicio de tour</label><input type="date" class="form-control" value="<?php echo $tourprovincia["fecha_inicio"];?>"name="actualizararInicio">
<label >Fecha final de tour</label><input type="date" class="form-control" value="<?php echo $tourprovincia["fecha_fin"];?>" name="actualizarFin">

<label for="">Precio</label><input type="number" class="form-control" value="<?php echo $tourprovincia["precio"];?>" name="actualizarPrecio">

<label >Seleccionar imagen:</label><input type="file" class="form-control" value="<?php echo $tourprovincia["ruta_imagen"];?>" name="actualizarImagen">
<label for="">Detalles del tour</label><textarea class="form-control" value="" name="actualizarDetalle"><?php echo $tourprovincia["detalle_tour"];?></textarea> 
<input type="hidden" value="<?php echo $_GET["idp"];?>" name="idTourEditar">
	<!-- <input type="hidden" name="registroTipoC" value="<?php //$tipousuario["pk_id_tipo"];?>">-->

<?php 

$registrotour = ControladorPaginas::ctrRegistroTour();

if($registrotour == "ok"){

echo '<script>

	if ( window.history.replaceState ) {

		window.history.replaceState( null, null, window.location.href );

	}

</script>';

echo '<div class="alert alert-success">Se ha registrado correctamente</div>';

}

?>

<button type="submit">Actualizar Tour</button>
<a href="index.php?pagina=tour" class="btn btn-secondary">Cancelar</a>
</form>

                   
                

        
    
                    </div>    

                    
                    
                </table>
            

            <div>
                
        </div>

    </div>
</div>




