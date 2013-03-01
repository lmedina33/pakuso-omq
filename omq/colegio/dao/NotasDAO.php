<?php    

require_once '../util/ConexionDB.php';
require_once '../modelo/Notas.php';

class NotasDAO{

	public function insertar (Notas $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "INSERT INTO notas (id_cursos, id_usuario, id_bimestre, id_grado, cuaderno,oral) 
				VALUES ('".$modelo->getId_cursos()."','".$modelo->getId_usuario()."','".$modelo->getId_bimestre()."',
				'".$modelo->getId_grado()."','".$modelo->getCuaderno()."','".$modelo->getOral()."')";
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
	}
	
	public function listar(){

		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT * FROM notas";
		$result = mysql_query($query, $link); 
		mysql_close($link);

		return $result;
	}
	
	public function obtener(Notas $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT id_usuario, cuaderno,oral FROM notas WHERE id_usuario = ".$modelo->getId_usuario().
				" and id_cursos = ".$modelo->getId_cursos()." and id_bimestre = ".$modelo->getId_bimestre().
				" and id_grado = ".$modelo->getId_grado();
		$result = mysql_query($query, $link);
		mysql_close($link);
		
		return $result;
		
	}
	
	public function modificar(Notas $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "UPDATE notas SET ex_mensual='".$modelo->getEx_mensual()."' WHERE id_usuario=".$modelo->getId_usuario().
				" and id_cursos = ".$modelo->getId_cursos()." and id_bimestre = ".$modelo->getId_bimestre().
				" and id_grado = ".$modelo->getId_grado();
		
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);	
	}

	public function eliminar(Notas $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "DELETE FROM notas WHERE id_usuario=".$modelo->getId_usuario().
				" and id_cursos = ".$modelo->getId_cursos()." and id_bimestre = ".$modelo->getId_bimestre().
				" and id_grado = ".$modelo->getId_grado();
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
		
	}
}



?>
