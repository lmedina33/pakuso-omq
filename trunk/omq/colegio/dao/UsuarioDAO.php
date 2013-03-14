<?php    

require_once 'colegio/util/ConexionDB.php';
require_once 'colegio/modelo/Usuario.php';

class UsuarioDAO{

	public function insertar (Usuario $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "INSERT INTO usuario (id_usuario,clave, nombre1, paterno,
				materno, fecha_nacimiento,dni) VALUES ('".$modelo->getId_usuario()."','".$modelo->getClave()."','".$modelo->getNombre1()."','".$modelo->getPaterno()."',
				'".$modelo->getMaterno()."','".$modelo->getFecha_nacimiento()."','".$modelo->getDni()."')";
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
	
	public function obtener(Usuario $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT id_usuario, nombre1 FROM usuario WHERE id_usuario = ".$modelo->getId_usuario();
		$result = mysql_query($query, $link);
		mysql_close($link);
		
		return $result;
		
	}
	
	public function modificar(Usuario $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "UPDATE usuario SET nombre1='".$modelo->getNombre1()."' WHERE id_usuario=".$modelo->getId_usuario();
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);	
	}

	public function eliminar(Usuario $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "DELETE FROM usuario WHERE id_usuario=".$modelo->getId_usuario();
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
		
	}
	

}



?>
