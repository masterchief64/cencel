<?php 
require_once("mysql.php");

class Cliente extends Mysql{
	public function add($datos)
     {
     echo $sql = "INSERT INTO cencel.usuarios "
                . "(nombre, direccion, poblacion, codigo_postal, telefono1, telefono2, email, rfc, login, pass, perfil, precio_asignado, almacen, tipo_cliente)" 
                . " VALUES ("
                . "'{$datos['nombre']}',"
                . " '{$datos['direccion']}',"
                . " '{$datos['poblacion']}',"
                . " '{$datos['codigo_postal']}',"
                . " '{$datos['telefono1']}',"
                . " '{$datos['telefono2']}',"
                . " '{$datos['email']}',"
                . " '{$datos['rfc']}',"
                . " '{$datos['login']}',"
                . " '{$datos['pass']}',"
                . " '{$datos['perfil']}',"
                . " '{$datos['precio_asignado']}',"
                . " '{$datos['almacen']}',"
                . " '{$datos['tipo_cliente']}');";
        $this->query($sql);
     }

    public function get_users(){
    	echo $sql = "SELECT email from usuarios";
    	return $this->query($sql);
    }
}
?>