<?php

class ControladorFormularios{


	static public function ctrRegistroCliente(){

		if(isset($_POST["registroNombre"])){

			$tabla = "cliente";

			$datos = array("nombre" => $_POST["registroNombre"], "correo" => $_POST["registroCorreo"],"contrasena" => $_POST["registroContrasena"],"cedula" => $_POST["registroCedula"], "fecha_nacimiento" => $_POST["registroFecha"],"celular" => $_POST["registroCelular"],"telefono" => $_POST["registroTelefono"], "apellido" => $_POST["registroApellido"]);

			$respuesta = ModeloFormularios::mdlRegistroCliente($tabla, $datos);

			return $respuesta;

		}

	}

	static public function ctrRegistroUsuario(){

		if(isset($_POST["registroNombre"])){

			$tabla = "usuario";

			$datos = array("nombre_usuario" => $_POST["registroUsuario"], "correo" => $_POST["registroCorreo"],"contrasena" => $_POST["registroContrasena"],"fk_tipo" => $_POST["registroTipo"]);

			$respuesta = ModeloFormularios::mdlRegistroUsuario($tabla, $datos);

			return $respuesta;

		}

	}

	//mostrar tours disponibles
	static public function ctrSeleccionarTour($item, $valor){

		$tabla = "tour_provincia";

		$respuesta = ModeloFormularios::mdlSeleccionarTour($tabla, $item, $valor);

		return $respuesta;

	}

	//iniciar sesión
	public function ctrIngreso(){

		if(isset($_POST["ingresoUsuario"])){

			$tabla = "usuario";
			$item = "nombre_usuario";
			$valor = $_POST["ingresoUsuario"];

			$respuesta = ModeloFormularios::mdlSeleccionarUsuario($tabla, $item, $valor);

			if($respuesta["nombre_usuario"] == $_POST["ingresoUsuario"] && $respuesta["contrasena"] == $_POST["ingresoContrasena"]){

				$_SESSION["validarIngreso"] = "ok";

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?pagina=tourprovincia";

				</script>';

			}else{


				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

				</script>';

				echo '<div class="alert alert-danger">Error al ingresar al sistema, el usuario o la contraseña no coinciden</div>';
			}
			
			

		}

	}


	


}