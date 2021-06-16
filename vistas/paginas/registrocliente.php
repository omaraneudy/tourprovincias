
	<h3 class="heading text-capitalize text-center"> Registro</h3>
	<form  method="post" id="formulario" onsubmit="return validacionregistrocliente()">

			<label for="nombre">Nombre:</label><input type="text" class="form-control"  id="nombre" name="registroNombre">

            <label for="nombre">Apellido</label><input type="text" class="form-control" id="apellido" name="registroApellido">    

			<label >Correo</label><input type="email" class="form-control" id="correo" id="correo" name="registroCorreo">

            <label for="nombre">Usuario</label><input type="text" class="form-control" id="usuario" name="registroUsuario">
			
			<label >Contraseña:</label><input type="password" class="form-control" id="contrasena" name="registroContrasena">
            <label >Fecha nacimiento:</label><input type="date" class="form-control" id="fecha" name="registroFecha">

            <label for="nombre">Cedula:</label><input type="number" class="form-control" id="cedula"  name="registroCedula">    

			<label >Telefono</label><input type="number" class="form-control" id="telefono" name="registroTelefono">
			
			<label >Celular</label><input type="number" class="form-control" id="celular" name="registroCelular">
                                    <input type="hidden" name="registroTipoC" value="1">

		<?php 

		$registrocliente = ControladorPaginas::ctrRegistroCliente();
		$registrousuario = ControladorPaginas::ctrRegistroUsuario();

		if($registrocliente == "ok" && $registrousuario == "ok"){

			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

			echo '<div class="alert alert-success">Se ha registrado correctamente</div>';
		
		}

		?>
		
				<button type="submit" class="btn btn-success" >Enviar</button>


	</form>
	<script src="script/script.js"></script>

