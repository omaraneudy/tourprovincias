<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post" onsumit="return validacion()">

		<div class="form-group">

			<label for="email">Usuario:</label>

			<div class="input-group">
				
				<input type="text" class="form-control" id="usuario" name="ingresoUsuario">
			
			</div>
			
		</div>

		<div class="form-group">
			<label for="pwd">Contraseña:</label>

			<div class="input-group">

				<input type="password" class="form-control" id="contrasena"  name="ingresoContrasena">

			</div>

		</div>
		<div>
		<a href="index.php?pagina=registrocliente">¿Eres nuevo? Registrate</a>
		</div>
		<?php 

		$ingreso = new ControladorPaginas();
		$ingreso -> ctrIngreso();

		?>
		
		<button type="submit" >Ingresar</button>

	</form>
	<script src="script/script.js"></script>

</div>