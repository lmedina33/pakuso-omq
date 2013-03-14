<?php
ini_set('include_path', '.;c:\wamp\www\omq');
require_once 'colegio/util/ConexionDB.php';
require_once 'colegio/modelo/Frase.php';

class FraseDAO{
                
        public function insertar (Frase $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "INSERT INTO frase ( frase, fecha,  id_usuario) VALUES 
                                ('".$modelo->getFrase()."', current_timestamp,'".$modelo->getId_usuario().
                                "')";
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);
        }
        
        public function listar(){

                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "SELECT frase, id_usuario FROM frase";
                $result = mysql_query($query, $link); 
                mysql_close($link);

                return $result;
        }
        
        public function obtener(Frase $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "SELECT * FROM frase WHERE id_frase = ".$modelo->getId_frase();
                $result = mysql_query($query, $link);
                mysql_close($link);
                
                return $result;
                
        }
        
        public function modificar(Frase $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "UPDATE frase SET frase='".$modelo->getFrase()."' WHERE id_frase=".$modelo->getId_frase();
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);     
        }

        public function eliminar(Frase $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "DELETE FROM frase WHERE id_frase=".$modelo->getId_frase();
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);
                
        }
        
        public function obtenerFrases(){
        	$con = new ConexionDB();
        	$link = $con->conectarBD();
        	$query = "SELECT frase, nombre1, paterno, rol_nombre
			FROM  `frase` ,  `usuario` ,  `usuario_rol`
			WHERE frase.id_usuario = usuario.id_usuario
			AND frase.id_usuario = usuario_rol.id_usuario";
        
        	$result = mysql_query($query, $link);
        	mysql_close($link);
        
        	return $result;
        
        }
        
}

?>
