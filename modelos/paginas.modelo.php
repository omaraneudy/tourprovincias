<?php

require_once "conexion.php";

class ModeloPaginas{



	static public function mdlRegistroCliente($tabla, $datos){

		
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, apellido, fecha_nacimiento, cedula, correo, celular, telefono) VALUES (:nombre, :apellido, :fecha, :cedula, :correo, :celular, :telefono)");

		
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha_nacimiento"], PDO::PARAM_STR);
		$stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":celular", $datos["celular"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		


		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}

	static public function mdlRegistroUsuario($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_usuario, contrasena, correo, fk_tipo) VALUES (:usuario, :contrasena, :correo, :tipo)");

		$stmt->bindParam(":usuario", $datos["nombre_usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":contrasena", $datos["contrasena"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo", $datos["fk_tipo"], PDO::PARAM_STR);
		


		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}


	static public function mdlRegistroEmpleado($tabla, $datos){

		
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, apellido, fk_cargo, correo) VALUES (:nombre, :apellido, :cargo, :correo)");

		
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":cargo", $datos["cargo"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}

	static public function mdlRegistroTour($tabla, $datos){

		
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(fk_provincia, descripcion, fecha_inicio, fecha_fin, precio, ruta_imagen, detalle_tour, fk_estado_tour) VALUES (:fk_provincia, :descripcion, :fecha_inicio, :fecha_fin, :precio, :ruta_imagen, :detalle_tour, :fk_estado_tour)");

		
		$stmt->bindParam(":fk_provincia", $datos["fk_provincia"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_inicio", $datos["fecha_inicio"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_fin", $datos["fecha_fin"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$stmt->bindParam(":ruta_imagen", $datos["ruta_imagen"], PDO::PARAM_STR);
		$stmt->bindParam(":detalle_tour", $datos["detalle_tour"], PDO::PARAM_STR);
		$stmt->bindParam(":fk_estado_tour", $datos["fk_estado_tour"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}
	static public function mdlRegistroTour($tabla, $datos){

		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla set fk_provincia = :fk_provincia descripcion, fecha_inicio, fecha_fin, precio, ruta_imagen, detalle_tour, fk_estado_tour) VALUES (:fk_provincia, :descripcion, :fecha_inicio, :fecha_fin, :precio, :ruta_imagen, :detalle_tour, :fk_estado_tour)");

		
		$stmt->bindParam(":fk_provincia", $datos["fk_provincia"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_inicio", $datos["fecha_inicio"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_fin", $datos["fecha_fin"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$stmt->bindParam(":ruta_imagen", $datos["ruta_imagen"], PDO::PARAM_STR);
		$stmt->bindParam(":detalle_tour", $datos["detalle_tour"], PDO::PARAM_STR);
		$stmt->bindParam(":fk_estado_tour", $datos["fk_estado_tour"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}

	static public function mdlReservacionCliente($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(fk_tour_provincia, fk_cliente, fk_estado_pago) VALUES (:id_tour_provincia, :id_cliente, '2')");

		$stmt->bindParam(":id_tour_provincia", $datos["id_tour_provincia"]);
		$stmt->bindParam(":id_cliente", $datos["id_cliente"]);
		


		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}

	static public function mdlConsultaClienteReservacion($tabla, $item, $valor, $idcliente){

		if($item == null && $valor == null){

			$stmt = Conexion::conectar()->prepare("SELECT r.*, DATE_FORMAT(t.fecha_inicio,'%d-%m-%Y') as fecha_inicio, DATE_FORMAT(t.fecha_fin,'%d-%m-%Y') as fecha_fin, DATE_FORMAT(r.fecha_reservacion,'%d-%m-%Y') as fecha_reservacion, e.estado, p.nombre_provincia, t.precio FROM $tabla r INNER JOIN tour_provincia t on r.fk_tour_provincia = t.pk_tour_provincia INNER JOIN estado_pago e on r.fk_estado_pago = e.pk_id_estado inner join provincia p on t.fk_provincia = p.pk_id_provincia WHERE fk_cliente = $idcliente");
			
			$stmt->execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT r.*, DATE_FORMAT(t.fecha_inicio,'%d-%m-%Y') as fecha_inicio, DATE_FORMAT(t.fecha_fin,'%d-%m-%Y') as fecha_fin, r.fk_tour_provincia, t.fk_provincia, p.nombre_provincia, e.estado FROM $tabla r INNER JOIN tour_provincia t on r.fk_tour_provincia = t.pk_tour_provincia INNER JOIN estado_pago e on r.fk_estado_pago = e.pk_id_estado inner join provincia p on t.fk_provincia = p.pk_id_provincia WHERE fk_cliente = $idcliente AND $item = :$item");
			
			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt -> fetchAll();
		}

		$stmt->close();

		$stmt = null;

	}

	static public function mdlEstadoReservacion($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET fk_estado_pago = :estado_pago WHERE pk_id_reservacion = :id");

		$stmt->bindParam(":estado_pago", $datos["fk_estado_pago"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id_reservacion"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}

	static public function mdlSeleccionarTour($tabla, $item, $valor){

		if($item == null && $valor == null){

			$stmt = Conexion::conectar()->prepare("SELECT DATEDIFF(t.fecha_fin, t.fecha_inicio) As duracion, t.pk_tour_provincia, t.descripcion, DATE_FORMAT(t.fecha_inicio,'%d-%m-%Y') as fecha_inicio, DATE_FORMAT(t.fecha_fin,'%d-%m-%Y') as fecha_fin, p.nombre_provincia, t.precio, t.ruta_imagen, e.estado_tour FROM $tabla t inner join provincia p on t.fk_provincia = p.pk_id_provincia inner join estado_tour e on fk_estado_tour = pk_estado_tour ORDER BY t.pk_tour_provincia DESC");
			
			$stmt->execute();

			return $stmt -> fetchAll();

		}else{
			if($_GET["pagina"] == "tour")
			{
				$stmt = Conexion::conectar()->prepare("SELECT DATEDIFF(t.fecha_fin, t.fecha_inicio) As duracion, t.pk_tour_provincia, t.descripcion, DATE_FORMAT(t.fecha_inicio,'%d-%m-%Y') as fecha_inicio, DATE_FORMAT(t.fecha_fin,'%d-%m-%Y') as fecha_fin, t.fk_estado_tour, p.nombre_provincia, e.estado_tour, t.precio, t.ruta_imagen, t.detalle_tour  FROM $tabla t inner join provincia p on t.fk_provincia = p.pk_id_provincia inner join estado_tour e on fk_estado_tour = pk_estado_tour WHERE $item = :$item");
			
				$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt->execute();

				return $stmt -> fetchAll();
			}
			else{
				$stmt = Conexion::conectar()->prepare("SELECT DATEDIFF(t.fecha_fin, t.fecha_inicio) As duracion, t.pk_tour_provincia,t.fk_provincia, t.descripcion, DATE_FORMAT(t.fecha_inicio,'%d-%m-%Y') as fecha_inicio, DATE_FORMAT(t.fecha_fin,'%d-%m-%Y') as fecha_fin, t.fk_estado_tour, p.nombre_provincia, e.estado_tour, t.precio, t.ruta_imagen, t.detalle_tour  FROM $tabla t inner join provincia p on t.fk_provincia = p.pk_id_provincia inner join estado_tour e on fk_estado_tour = pk_estado_tour WHERE $item = :$item");
			
				$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt->execute();

				return $stmt -> fetch();

			}
		
		}

		$stmt->close();

		$stmt = null;	

	}

	static public function mdlSeleccionarEmpleado($tabla, $item, $valor){

		if($item == null && $valor == null){

			$stmt = Conexion::conectar()->prepare("SELECT e.pk_id_empleado, e.nombre, e.apellido, e.fk_cargo, c.nombre AS nombre_cargo, e.correo, u.correo, u.nombre_usuario FROM $tabla e INNER JOIN cargo c ON e.fk_cargo = c.pk_id_cargo INNER JOIN usuario u ON e.correo = u.correo");
			
			$stmt->execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT e.pk_id_empleado, e.nombre, e.apellido, e.fk_cargo, c.nombre AS nombre_cargo, e.correo, u.correo, u.nombre_usuario FROM $tabla e INNER JOIN cargo c ON e.fk_cargo = c.pk_id_cargo INNER JOIN usuario u ON e.correo = u.correo WHERE e.$item = :$item");
			
			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt -> fetchAll();
		}

		$stmt->close();

		$stmt = null;	

	}


	static public function mdlSeleccionarTipoUsuario($tabla, $item, $valor){

		if($item == null && $valor == null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			
			$stmt->execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			
			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt -> fetchAll();
		}

		$stmt->close();

		$stmt = null;	

	}

	static public function mdlListarProvincia($tabla, $item, $valor){

		if($item == null && $valor == null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			
			$stmt->execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			
			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt -> fetch();
		}

		$stmt->close();

		$stmt = null;	

	}

	static public function mdlSeleccionarUsuario($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT u.*,  c.pk_id_cliente, c.nombre FROM $tabla u inner join cliente c on u.correo = c.correo WHERE $item = :$item");
		
		$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

		if($stmt->execute()){

			return $stmt -> fetch();

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}



}