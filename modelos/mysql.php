<?php 

class Mysql{
	private $_conexion;

	public function __construct(){
		$host = "localhost";
		$user = "root";
		$pass = "nievedelimon";
		$bd = "cencel";
		$port = "3306";
		$this->_conexion = mysqli_connect(
			$host,
			$user,
			$pass,
			$bd,
			$port);
	}

	public function query($sql){
		$result = mysqli_query($this->_conexion, $sql);
		return $result;
	}
}

 ?>