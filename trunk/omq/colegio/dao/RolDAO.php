<?php
require_once '../util/ConexionDB.php';
require_once '../modelo/Rol.php';

class RolDAO{
		
	public function insertar (Rol $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "INSERT INTO rol (rol_nombre, descripcion) VALUES 
				('".$modelo->getRol_nombre()."','".$modelo->getDescripcion()."')";
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
	}
	
	public function listar(){

		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT rol_nombre, descripcion FROM rol";
		$result = mysql_query($query, $link); 
		mysql_close($link);

		return $result;
	}
	
	public function obtener(Rol $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT rol_nombre, descripcion FROM rol WHERE rol_nombre = '".$modelo->getRol_nombre()."'";
		$result = mysql_query($query, $link);
		mysql_close($link);
		
		return $result;
		
	}
	
	public function modificar(Rol $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "UPDATE rol SET descripcion= '".$modelo->getDescripcion()."' WHERE rol_nombre= '".$modelo->getRol_nombre()."'";
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);	
	}

	public function eliminar(Rol $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "DELETE FROM rol WHERE rol_nombre= '".$modelo->getRol_nombre()."'";
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
		
	}
	
}

?>