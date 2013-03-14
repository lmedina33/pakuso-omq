<?php    
ini_set('include_path', '.;c:\wamp\www\omq');
require_once 'colegio/util/ConexionDB.php';
require_once 'colegio/modelo/Boletin.php';

class BoletinDAO{

	public function insertar (Boletin $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "INSERT INTO boletin (titulo, comentario, imagen)
				 VALUES ('".$modelo->getTitulo()."','".$modelo->getComentario()."','".$modelo->getImagen()."')";	
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
	}
	
	public function listar(){

		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT * FROM boletin";
		$result = mysql_query($query, $link); 
		mysql_close($link);

		return $result;
	}
	
	public function obtener(Boletin $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "SELECT titulo , comentario, imagen FROM boletin WHERE id_boletin = ".$modelo->getId_boletin();
		$result = mysql_query($query, $link);
		mysql_close($link);
		
		return $result;
		
	}
	
	public function modificar(Boletin $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "UPDATE boletin SET titulo='".$modelo->getTitulo()."' WHERE id_boletin=".$modelo->getId_boletin();
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);	
	}

	public function eliminar(Boletin $modelo){
		$con = new ConexionDB();
		$link = $con->conectarBD();
		$query = "DELETE FROM boletin WHERE id_boletin=".$modelo->getId_boletin();
		$result = mysql_query($query, $link) or die(mysql_error($link));
		mysql_close($link);
		
	}
}

?>
