<?php
require_once '../util/ConexionDB.php';
require_once '../modelo/Cursos.php';

class CursosDAO{
                
        public function insertar (Cursos $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "INSERT INTO cursos (id_cursos, nombre,detalle) VALUES 
                                ('".$modelo->getId_cursos()."','".$modelo->getNombre().
                                "','".$modelo->getDetalle()."')";
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);
        }
        
        public function listar(){

                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "SELECT id_cursos, nombre,detalle FROM cursos";
                $result = mysql_query($query, $link); 
                mysql_close($link);

                return $result;
        }
        
        public function obtener(Cursos $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "SELECT id_cursos, nombre,detalle FROM cursos WHERE id_cursos = ".$modelo->getId_cursos();
                $result = mysql_query($query, $link);
                mysql_close($link);
                
                return $result;
                
        }
        
        public function modificar(Cursos $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "UPDATE cursos SET nombre='".$modelo->getNombre()."' WHERE id_cursos=".$modelo->getId_cursos();
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);     
        }

        public function eliminar(Cursos $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "DELETE FROM cursos WHERE id_cursos=".$modelo->getId_cursos();
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);
                
        }
        
}

?>