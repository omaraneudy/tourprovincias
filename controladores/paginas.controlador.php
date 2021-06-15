<?php

class ControladorPaginas{


	static public function ctrRegistroCliente(){

		if(isset($_POST["registroNombre"])){

			$tabla = "cliente";

			$datos = array("nombre" => $_POST["registroNombre"], "correo" => $_POST["registroCorreo"],"contrasena" => $_POST["registroContrasena"],"cedula" => $_POST["registroCedula"], "fecha_nacimiento" => $_POST["registroFecha"],"celular" => $_POST["registroCelular"],"telefono" => $_POST["registroTelefono"], "apellido" => $_POST["registroApellido"]);

			$respuesta = ModeloPaginas::mdlRegistroCliente($tabla, $datos);

			return $respuesta;

		}

	}

	static public function ctrRegistroUsuario(){

		if(isset($_POST["registroUsuario"]) && isset($_POST["registroCorreo"])){

			$tabla = "usuario";

			$datos = array("nombre_usuario" => $_POST["registroUsuario"], "correo" => $_POST["registroCorreo"],"contrasena" => $_POST["registroContrasena"],"fk_tipo" => $_POST["registroTipoC"]);

			$respuesta = ModeloPaginas::mdlRegistroUsuario($tabla, $datos);

			return $respuesta;

		}

	}

	static public function ctrReservacionCliente(){

		if(isset($_POST["idTour"])){

			$tabla = "reservacion_cliente";

			$datos = array("id_tour_provincia" => $_POST["idTour"], "id_cliente" => $_SESSION["idCliente"]);

			$respuesta = ModeloPaginas::mdlReservacionCliente($tabla, $datos);

			return $respuesta;

		}

	}

	//mostrar tours disponibles
	static public function ctrSeleccionarTour($item, $valor){

		$tabla = "tour_provincia";

		$respuesta = ModeloPaginas::mdlSeleccionarTour($tabla, $item, $valor);

		return $respuesta;

	}

	static public function ctrSeleccionarTipoUsuario($item, $valor){

		$tabla = "tipo_usuario";

		$respuesta = ModeloPaginas::mdlSeleccionarTipoUsuario($tabla, $item, $valor);

		return $respuesta;

	}



	static public function ctrSeleccionarEmpleado($item, $valor){

		$tabla = "empleado";

		$respuesta = ModeloPaginas::mdlSeleccionarEmpleado($tabla, $item, $valor);

		return $respuesta;

	}


	//iniciar sesión
	public function ctrIngreso(){

		if(isset($_POST["ingresoUsuario"]) && $_POST["ingresoUsuario"]!= null && $_POST["ingresoContrasena"]!= null){

			$tabla = "usuario";
			$item = "nombre_usuario";
			$valor = $_POST["ingresoUsuario"];

			$respuesta = ModeloPaginas::mdlSeleccionarUsuario($tabla, $item, $valor);

			if($respuesta["nombre_usuario"] == $_POST["ingresoUsuario"] && $respuesta["contrasena"] == $_POST["ingresoContrasena"]){

				$_SESSION["validarIngreso"] = "ok";
				$_SESSION["idCliente"] = $respuesta["pk_id_cliente"];
				$_SESSION["nombreCliente"] = $respuesta["nombre"];

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

				echo '<div class="alert alert-danger">Error al iniciar sesión, el usuario o la contraseña no coinciden</div>';
			}
			
			

		}

	}


	


}