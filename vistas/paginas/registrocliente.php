
<?php
$tipousuario = ControladorPaginas::ctrTipoUsuario("pk_id_tipo", "1");

//print_r($tipousuario["pk_id_tipo"]);

?>
	<form  method="post">

			<label for="nombre">Nombre:</label><input type="text" class="form-control" name="registroNombre">

            <label for="nombre">Apellido</label><input type="text" class="form-control" name="registroApellido">    

			<label >Correo</label><input type="email" class="form-control" name="registroCorreo">

            <label for="nombre">Usuario</label><input type="text" class="form-control" name="registroUsuario">
			
			<label >Contraseña:</label><input type="password" class="form-control" name="registroContrasena">
            <label >Fecha nacimiento:</label><input type="text" class="form-control" name="registroFecha">

            <label for="nombre">Cedula:</label><input type="number" class="form-control" name="registroCedula">    

			<label >Telefono</label><input type="number" class="form-control" name="registroTelefono">
			
			<label >Celular</label><input type="number" class="form-control" name="registroCelular">
                                    <input type="hidden" name="registroTipoC" value="<?php $tipousuario["pk_id_tipo"];?>">

		<?php 

		$registrocliente = ControladorPaginas::ctrRegistroCliente();
		$registrousuario = ControladorPaginas::ctrRegistroUsuario();

		if($registrocliente == "ok" && $registrousuario == "ok"){

			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

			echo '<div class="alert alert-success">Usted se ha registrado</div>';
		
		}

		?>
		
		<button type="submit">Enviar</button>

	</form>
