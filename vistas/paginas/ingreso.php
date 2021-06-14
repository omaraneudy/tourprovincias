<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">

		<div class="form-group">

			<label for="email">Usuario:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="email" name="ingresoUsuario">
			
			</div>
			
		</div>

		<div class="form-group">
			<label for="pwd">Contraseña:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>

				<input type="password" class="form-control" id="pwd" name="ingresoContrasena">

			</div>

		</div>

		<?php 

		$ingreso = new ControladorPaginas();
		$ingreso -> ctrIngreso();

		?>
		
		<button type="submit" >Ingresar</button>

	</form>

</div>