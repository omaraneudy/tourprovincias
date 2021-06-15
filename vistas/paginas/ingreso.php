<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">

		<div class="form-group">

			<label for="email">Usuario:</label>

			<div class="input-group">
				
				<input type="text" class="form-control" id="email" name="ingresoUsuario">
			
			</div>
			
		</div>

		<div class="form-group">
			<label for="pwd">Contraseña:</label>

			<div class="input-group">

				<input type="password" class="form-control"  name="ingresoContrasena">

			</div>

		</div>

		<?php 

		$ingreso = new ControladorPaginas();
		$ingreso -> ctrIngreso();

		?>
		
		<button type="submit" >Ingresar</button>

	</form>

</div>