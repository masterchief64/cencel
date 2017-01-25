<?php 
require_once("mysql.php");
	class Almacen extends Mysql{
		public function get_almacenes(){
			echo $sql = "SELECT almacen from almacenes";
			return $this->query($sql);
		}
	}	
 ?>
