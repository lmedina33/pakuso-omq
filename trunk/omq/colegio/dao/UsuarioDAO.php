<?php    

require_once '../util/ConexionDB.php';
require_once '../modelo/Usuario.php';

class UsuarioDAO{

	public function insertar (Usuario $usu){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "INSERT INTO usuario (nombre1, paterno,
				materno, fecha_nacimiento,dni) VALUES ('".$usu->getNombre1()."','".$usu->getPaterno()."',
				'".$usu->getMaterno()."','".$usu->getFecha_nacimiento()."','".$usu->getDni()."')";
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
	}
	
	public function listar(){

		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT id_usuario, nombre1 FROM usuario";
		$result = mysql_query($query, $link); 
		mysql_close($link);

		return $result;
	}
	
	public function obtener(){
		
	}


}



?>
