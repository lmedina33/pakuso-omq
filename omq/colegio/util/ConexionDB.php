<?php 
class ConexionDB{
	public function conectarBD(){    
	$link = mysql_connect("localhost", "root", "");    
	mysql_select_db("omq", $link);    
	return $link; }
}
?>
