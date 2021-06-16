
<?php
$provincias = ControladorPaginas::ctrListarProvincia(null,null);

//print_r($tipousuario["pk_id_tipo"]);

?>
	<form  method="post" id="formulario">

			<label for="provincia">Provincia</label>
            <select name="insertarProvincia">
            <option value="" ></option>
            <?php foreach($provincias as $prov):?>
            <option value ="<?php echo $prov["pk_id_provincia"];?>"><?php echo $prov["nombre_provincia"]; ?></option>
            <?php endforeach ?>
            </select><br>
            <label for="">Descripción</label><textarea class="form-control" name="insertarDescripcion"></textarea>    

			<label >Fecha inicio de tour</label><input type="date" class="form-control" name="insertarInicio">
            <label >Fecha final de tour</label><input type="date" class="form-control" name="insertarFin">

            <label for="">Precio</label><input type="numbre" class="form-control" name="insertarPrecio">
			
			<label >Seleccionar imagen:</label><input type="file" class="form-control" name="insertarImagen">
            <label for="">Detalles del tour</label><textarea class="form-control" name="insertarDetalle"></textarea> 
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
		
		<button type="submit">Guardar Tour</button>

	</form>
