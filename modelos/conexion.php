<?php 

class Conexion{

	static public function conectar(){

		$conex = new PDO("mysql:host=localhost;dbname=agenciatour", "root", "");

		$conex->exec("set names utf8");

		return $conex;

	}

}
