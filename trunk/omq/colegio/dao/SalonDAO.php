<?php
require_once '../util/ConexionDB.php';
require_once '../modelo/Salon.php';

class SalonDAO{
                
        public function insertar (Salon $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "INSERT INTO salon (id_salon, id_usuario, id_grupo,id_cursos) VALUES 
                                ('".$modelo->getId_salon()."','".$modelo->getId_usuario().
                                "','".$modelo->getId_grupo()."','".$modelo->getId_cursos()."')";
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);
        }
        
        public function listar(){

                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "SELECT * FROM salon";
                $result = mysql_query($query, $link); 
                mysql_close($link);

                return $result;
        }
        
        public function obtener(Salon $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "SELECT * FROM salon WHERE id_salon = ".$modelo->getId_salon();
                $result = mysql_query($query, $link);
                mysql_close($link);
                
                return $result;
                
        }
        
        public function modificar(Salon $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "UPDATE salon SET id_grupo='".$modelo->getId_grupo()."' WHERE id_salon=".$modelo->getId_salon();
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);     
        }

        public function eliminar(Salon $modelo){
                $con = new ConexionDB();
                $link = $con->conectarBD();
                $query = "DELETE FROM salon WHERE id_salon=".$modelo->getId_salon();
                $result = mysql_query($query, $link) or die(mysql_error($link));
                mysql_close($link);
                
        }
        
}

?>