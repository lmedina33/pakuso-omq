<?php
require_once '../dao/SalonDAO.php';
require_once '../modelo/Salon.php';

class SalonNegocio{
        
        public function insertar ($id_salon, $id_usuario, $id_grupo, $id_cursos){
                
                $modelo = new Salon();
                $modelo->setId_usuario($id_usuario);
                $modelo->setId_grupo($id_grupo);
                $modelo->setId_cursos($cursos);
                
                $dao = new SalonDAO();
                $dao->insertar($modelo);
        }

        public function listar(){
                $dao = new SalonDAO();            
                return $dao->listar();
        }
        
        public function obtener($id_salon){
                
                $modelo = new Salon();
                $modelo->setId_salon($id_salon);
                
                $dao = new SalonDAO();
                return $dao->obtener($modelo);
        }
        
        public function modificar($id_salon, $id_grupo){
                
                $modelo = new Salon();
                $modelo->setId_salon($id_salon);
                $modelo->setId_grupo($id_grupo);
                
                $dao = new SalonDAO();
                $dao->modificar($modelo);
        }
        
        public function eliminar($id_salon){
                
                $modelo = new Salon();
                $modelo->setId_salon($id_salon);
                
                $dao = new SalonDAO();
                $dao->eliminar($modelo);
        }
}
?>