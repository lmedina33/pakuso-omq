<?php
require_once '../util/ConexionDB.php';
require_once '../modelo/Grupo.php';

class CursosDAO{
                
        public function insertar (Grupo $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "INSERT INTO grupo (id_grupo, nombre) VALUES 
                                ('".$modelo->getId_grupo()."','".$modelo->getNombre().
                                "')";
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);
        }
        
        public function listar(){

                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "SELECT * FROM grupo";
                $result = mysql_query($query, $link); 
                mysql_close($link);

                return $result;
        }
        
        public function obtener(Grupo $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "SELECT * FROM grupo WHERE id_grupo = ".$modelo->getId_grupo();
                $result = mysql_query($query, $link);
                mysql_close($link);
                
                return $result;
                
        }
        
        public function modificar(Grupo $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "UPDATE grupo SET nombre='".$modelo->getNombre()."' WHERE id_grupo=".$modelo->getId_grupo();
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);     
        }

        public function eliminar(Grupo $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "DELETE FROM grupo WHERE id_grupo=".$modelo->getId_grupo();
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);
                
        }
        
}

?>
