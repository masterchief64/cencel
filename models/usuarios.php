<?php 
require_once("mysql.php");

class Usuario extends Mysql{
	public function add_user($datos)
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
     public function update_user($datos,$id_user){
        echo $sql = "UPDATE cencel.usuarios"
                . " set "
                . "nombre = '{$datos['nombre']}', "
                . "direccion = '{$datos['direccion']}', "
                . "poblacion = '{$datos['poblacion']}', "
                . "codigo_postal = '{$datos['codigo_postal']}', "
                . "telefono1 = '{$datos['telefono1']}', "
                . "telefono2 = '{$datos['telefono2']}', "
                . "email = '{$datos['email']}', "
                . "rfc = '{$datos['rfc']}', "
                . "precio_asignado = '{$datos['precio_asignado']}', "
                . "almacen = '{$datos['almacen']}', "
                . "tipo_cliente = '{$datos['tipo_cliente']}' "
                . "where id_usuario = {$id_user}; ";
        return $this->query($sql);
     }
     public function update_login($datos, $id_user){
        echo $sql = "UPDATE cencel.usuarios"
                    . " set "
                    ."login = '{$datos['login']}', "
                    ."pass = '{$datos['pass']}', "
                    ."perfil = '{$datos['perfil']}'"
                    ."where id_usuario = {$id_user}; ";
        return $this->query($sql);

     }

    public function get_users(){
    	echo $sql = "SELECT * from usuarios";
    	return $this->query($sql);
    }

    public function get_by_id($id){
        $sql = "SELECT * from usuarios "
                . "where id_usuario = {$id};";
        return $this->query($sql);
    }

    public function search($data){
           echo $sql = "select * from cencel.usuarios where nombre like '%{$data}%';";
        return $this->query($sql);
    }
}
?>