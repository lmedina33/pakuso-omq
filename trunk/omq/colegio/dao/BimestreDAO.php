<?php
require_once '../util/ConexionDB.php';
require_once '../modelo/Bimestre.php';

class CursosDAO{
                
        public function insertar (Bimestre $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "INSERT INTO bimestre (id_bimestre, nombre, grado) VALUES 
                                ('".$modelo->getId_bimestre()."','".$modelo->getNombre().
                                "','".$modelo->getGrado()."')";
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);
        }
        
        public function listar(){

                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "SELECT id_bimestre, nombre, grado FROM bimestre";
                $result = mysql_query($query, $link); 
                mysql_close($link);

                return $result;
        }
        
        public function obtener(Bimestre $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "SELECT id_bimestre, nombre, grado FROM bimestre WHERE id_bimestre = ".$modelo->getId_bimestre();
                $result = mysql_query($query, $link);
                mysql_close($link);
                
                return $result;
                
        }
        
        public function modificar(Bimestre $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "UPDATE bimestre SET nombre='".$modelo->getNombre()."' WHERE id_bimestre=".$modelo->getId_bimestre();
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);     
        }

        public function eliminar(Bimestre $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "DELETE FROM bimestre WHERE id_bimestre=".$modelo->getId_bimestre();
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);
                
        }
        
}

?>
