<?php    

require_once '../util/ConexionDB.php';
require_once '../modelo/Matricula.php';

class MatriculaDAO{

	public function insertar (Matricula $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "INSERT INTO matricula (fecha_pago, id_usuario, id_grado)
				 VALUES ('".$modelo->getFecha_pago()."','".$modelo->getId_usuario()."',
				 '".$modelo->getId_grado()."')";
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
	}
	
	public function listar(){

		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT * FROM matricula";
		$result = mysql_query($query, $link); 
		mysql_close($link);

		return $result;
	}
	
	public function obtener(Matricula $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT id_usuario, fecha_pago FROM matricula WHERE id_matricula = ".$modelo->getId_matricula();
		$result = mysql_query($query, $link);
		mysql_close($link);
		
		return $result;
		
	}
	
	public function modificar(Matricula $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "UPDATE matricula SET fecha_pago='".$modelo->getFecha_pago()."' WHERE id_matricula=".$modelo->getId_matricula();
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);	
	}

	public function eliminar(Matricula $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "DELETE FROM matricula WHERE id_matricula=".$modelo->getId_matricula();
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
		
	}
}

?>
