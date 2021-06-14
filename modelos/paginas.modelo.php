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

	static public function mdlSeleccionarTour($tabla, $item, $valor){

		if($item == null && $valor == null){

			$stmt = Conexion::conectar()->prepare("SELECT DATEDIFF(t.fecha_fin, t.fecha_inicio) As duracion, t.pk_tour_provincia, t.descripcion, t.fecha_inicio, t.fecha_fin, p.nombre_provincia, t.precio, t.ruta_imagen FROM $tabla t inner join provincia p on t.fk_provincia = p.pk_id_provincia ORDER BY t.pk_tour_provincia DESC");
			
			$stmt->execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT DATEDIFF(t.fecha_fin, t.fecha_inicio) As duracion, t.pk_tour_provincia, t.descripcion, t.fecha_inicio, t.fecha_fin, p.nombre_provincia, t.precio, t.ruta_imagen, t.detalle_tour  FROM $tabla t inner join provincia p on t.fk_provincia = p.pk_id_provincia WHERE $item = :$item ORDER BY t.pk_tour_provincia DESC");
			
			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt -> fetch();
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

			$stmt = Conexion::conectar()->prepare("SELECT e.pk_id_empleado, e.nombre, e.apellido, e.fk_cargo, c.nombre AS nombre_cargo, e.correo, u.correo FROM $tabla e INNER JOIN cargo c ON e.fk_cargo = c.pk_id_cargo INNER JOIN usuario u ON e.correo = u.correo WHERE $item = :$item");
			
			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt -> fetch();
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

			$stmt = Conexion::conectar()->prepare("SELECT $item FROM $tabla WHERE $item = :$item");
			
			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt -> fetch();
		}

		$stmt->close();

		$stmt = null;	

	}

	static public function mdlSeleccionarUsuario($tabla, $item, $valor){

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

	




}