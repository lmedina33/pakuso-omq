<?php
require_once '../util/ConexionDB.php';
require_once '../modelo/Grado.php';

class GradoDAO{
		
	public function insertar (Grado $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "INSERT INTO rol (id_grado, nombre, precio) VALUES 
				('".$modelo->getId_grado()."','".$modelo->getNombre().
				"','".$modelo->getPrecio()."')";
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
	}
	
	public function listar(){

		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT id_grado, nombre, precio FROM grado";
		$result = mysql_query($query, $link); 
		mysql_close($link);

		return $result;
	}
	
	public function obtener(Grado $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT id_grado, nombre, precio FROM rol WHERE id_grado = ".$modelo->getId_grado();
		$result = mysql_query($query, $link);
		mysql_close($link);
		
		return $result;
		
	}
	
	public function modificar(Grado $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "UPDATE grado SET nombre='".$modelo->getNombre()."' WHERE id_grado=".$modelo->getId_grado();
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);	
	}

	public function eliminar(Grado $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "DELETE FROM grado WHERE id_grado=".$modelo->getId_grado();
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
		
	}
	
}

?>