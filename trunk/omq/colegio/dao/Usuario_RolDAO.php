<?php
require_once '../util/ConexionDB.php';
require_once '../modelo/Usuario_Rol.php';

class Usuario_RolDAO{
		
	public function insertar (Usuario_Rol $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "INSERT INTO Usuario_Rol (rol_nombre, id_usuario) VALUES 
				('".$modelo->getRol_nombre()."','".$modelo->getId_usuario()."')";
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
	}
	
	public function listar(){

		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT rol_nombre, id_usuario FROM Usuario_Rol";
		$result = mysql_query($query, $link); 
		mysql_close($link);

		return $result;
	}
	
	public function obtener(Usuario_Rol $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT rol_nombre, id_usuario FROM Usuario_Rol WHERE id_usuario = ".$modelo->getId_Usuario();
		$result = mysql_query($query, $link);
		mysql_close($link);
		
		return $result;
		
	}
	
	public function modificar(Usuario_Rol $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "UPDATE Usuario_Rol SET rol_nombre='".$modelo->getRol_nombre()."' WHERE id_usuario=".$modelo->getId_usuario();
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);	
	}

	public function eliminar(Usuario_Rol $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "DELETE FROM Usuario_Rol WHERE Id_usuario=".$modelo->getId_usuario();
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
		
	}
	
}

?>