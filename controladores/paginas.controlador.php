<?php

class ControladorPaginas{


	static public function ctrRegistroCliente(){

		if(isset($_POST["registroNombre"])){

			$tabla = "cliente";

			$datos = array("nombre" => $_POST["registroNombre"], "correo" => $_POST["registroCorreo"],"contrasena" => $_POST["registroContrasena"],"cedula" => $_POST["registroCedula"], "fecha_nacimiento" => date("Y-m-d",strtotime($_POST["registroFecha"])),"celular" => $_POST["registroCelular"],"telefono" => $_POST["registroTelefono"], "apellido" => $_POST["registroApellido"]);

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

	static public function ctrRegistroTour(){

		if(isset($_POST["insertarProvincia"]) && isset($_POST["insertarPrecio"])){

			$tabla = "tour_provincia";

			$datos = array("fk_provincia" => $_POST["insertarProvincia"], "descripcion" => $_POST["insertarDescripcion"],"fecha_inicio" => date("Y-m-d",strtotime($_POST["insertarInicio"])),"fecha_fin" => date("Y-m-d",strtotime($_POST["insertarFin"])), "precio" => $_POST["insertarPrecio"],"ruta_imagen" => "images/".$_POST["insertarImagen"],"detalle_tour" => $_POST["insertarDetalle"], "fk_estado_tour" => 2);

			$respuesta = ModeloPaginas::mdlRegistroTour($tabla, $datos);

			return $respuesta;

		}

	}

	static public function ctrEditarTour(){

		if(isset($_POST["actualizarProvincia"]) && isset($_POST["actualizarPrecio"]) && isset($_POST["idTourEditar"])){

			if($_POST["actualizarInicio"] != ""){			

				$inicio = $_POST["actualizarInicio"];

			}else{

				$inicio = $_POST["inicioActual"];
			}
			if($_POST["actualizarFin"] != ""){			

				$fin = $_POST["actualizarFin"];

			}else{

				$fin = $_POST["finActual"];
			}
			if($_POST["actualizarImagen"] != ""){			

				$imagen = $_POST["actualizarImagen"];

			}else{

				$imagen = $_POST["imagenActual"];
			}
			if($_POST["actualizarEstado"] != ""){			

				$estado = $_POST["actualizarEstado"];

			}else{

				$estado = $_POST["estadoActual"];
			}
			$tabla = "tour_provincia";

			$datos = array("ideditar" => $_POST["idTourEditar"], "fk_provincia" => $_POST["actualizarProvincia"], "descripcion" => $_POST["actualizarDescripcion"],"fecha_inicio" => date("Y-m-d",strtotime($inicio)),"fecha_fin" => date("Y-m-d",strtotime($fin)), "precio" => $_POST["actualizarPrecio"],"ruta_imagen" => "images/".$imagen,"detalle_tour" => $_POST["actualizarDetalle"], "fk_estado_tour" => $estado);

			$respuesta = ModeloPaginas::mdlEditarTour($tabla, $datos);

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

	static public function ctrEstadoReservacion(){

		if(isset($_POST["cancelarReservacion"]) && isset($_POST["can"])){

			$tabla = "reservacion_cliente";

			$datos = array("id_reservacion" => $_POST["cancelarReservacion"],"fk_estado_pago" => $_POST["can"]);

			$respuesta = ModeloPaginas::mdlEstadoReservacion($tabla, $datos);

			return $respuesta;

		}
	}
	static public function ctrEstadoTour(){

		if(isset($_POST["idTour"]) && isset($_POST["estadoTour"])){

			$tabla = "tour_provincia";

			$datos = array("id_tour" => $_POST["idTour"],"fk_estado_tour" => $_POST["estadoTour"]);

			$respuesta = ModeloPaginas::mdlEstadotour($tabla, $datos);

			return $respuesta;

		}
	}




	//mostrar tours disponibles
	static public function ctrSeleccionarTour($item, $valor){

		$tabla = "tour_provincia";

		$respuesta = ModeloPaginas::mdlSeleccionarTour($tabla, $item, $valor);

		return $respuesta;

	}

	static public function ctrConsultaClienteReservacion($item, $valor){

		$tabla = "reservacion_cliente";
		$idcliente = $_SESSION["idCliente"];

		$respuesta = ModeloPaginas::mdlConsultaClienteReservacion($tabla, $item, $valor, $idcliente);

		return $respuesta;



	}


	static public function ctrConsultaReservacion($item, $valor){

		$tabla = "reservacion_cliente";
		
		$respuesta = ModeloPaginas::mdlConsultaReservacion($tabla, $item, $valor);

		return $respuesta;

	}

	static public function ctrConsultaCliente($item, $valor){

		$tabla = "cliente";

		$respuesta = ModeloPaginas::mdlConsultaCliente($tabla, $item, $valor);

		return $respuesta;

	}

	static public function ctrSeleccionarTipoUsuario($item, $valor){

		$tabla = "tipo_usuario";

		$respuesta = ModeloPaginas::mdlSeleccionarTipoUsuario($tabla, $item, $valor);

		return $respuesta;

	}

	static public function ctrListarProvincia($item, $valor){

		$tabla = "provincia";

		$respuesta = ModeloPaginas::mdlListarProvincia($tabla, $item, $valor);

		return $respuesta;

	}

	static public function ctrSeleccionarEmpleado($item, $valor){

		$tabla = "empleado";

		$respuesta = ModeloPaginas::mdlSeleccionarEmpleado($tabla, $item, $valor);

		return $respuesta;

	}


	//iniciar sesión
	public function ctrIngreso(){

		if(isset($_POST["ingresoUsuario"]) && $_POST["ingresoUsuario"]!= null && isset($_POST["ingresoContrasena"]) && $_POST["ingresoContrasena"]!= null){

			$tabla = "usuario";
			$item = "nombre_usuario";
			$valor = $_POST["ingresoUsuario"];

			$respuesta = ModeloPaginas::mdlSeleccionarUsuario($tabla, $item, $valor);

			if($respuesta["nombre_usuario"] == $_POST["ingresoUsuario"] && $respuesta["contrasena"] == $_POST["ingresoContrasena"]){

				$_SESSION["validarIngreso"] = "ok";
				$_SESSION["idCliente"] = $respuesta["pk_id_cliente"];
				$_SESSION["nombreCliente"] = $respuesta["nombre"];
				$_SESSION["privilegio"] = $respuesta["fk_tipo"];

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?pagina=principal";

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