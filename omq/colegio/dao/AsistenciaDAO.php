<?php    

require_once '../util/ConexionDB.php';
require_once '../modelo/Asistencia.php';

class AsistenciaDAO{

	public function insertar (Asistencia $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "INSERT INTO asistencia (fecha, estado, id_usuario, id_bimestre, id_grado)
				 VALUES ('".$modelo->getFecha()."','".$modelo->getEstado()."','".$modelo->getId_usuario()."',
				'".$modelo->getId_bimestre()."','".$modelo->getId_grado()."')";
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
	}
	
	public function listar(){

		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT * FROM asistencia";
		$result = mysql_query($query, $link); 
		mysql_close($link);

		return $result;
	}
	
	public function obtener(Asistencia $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT id_usuario, estado, fecha FROM asistencia WHERE id_asistencia = ".$modelo->getId_asistencia();
		$result = mysql_query($query, $link);
		mysql_close($link);
		
		return $result;
		
	}
	
	public function modificar(Asistencia $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "UPDATE asistencia SET estado='".$modelo->getEstado()."' WHERE id_asistencia=".$modelo->getId_asistencia();
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);	
	}

	public function eliminar(Asistencia $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "DELETE FROM asistencia WHERE id_asistencia=".$modelo->getId_asistencia();
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
		
	}
}

?>
