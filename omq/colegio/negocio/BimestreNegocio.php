<?php
require_once '../dao/BimestreDAO.php';
require_once '../modelo/Bimestre.php';

class BimestreNegocio{
        
        public function insertar ($id_bimestre, $nombre){
                
                $modelo = new Bimestre();
                $modelo->setId_bimestre($id_bimestre);
                $modelo->setNombre($nombre);
                
                $dao = new BimestreDAO();
                $dao->insertar($modelo);
        } 

        public function listar(){
                $dao = new BimestreDAO();            
                return $dao->listar();
        }
        
        public function obtener($id_bimestre){
                
                $modelo = new Bimestre();
                $modelo->setId_bimestre($id_bimestre);
                
                $dao = new BimestreDAO();
                return $dao->obtener($modelo);
        }
        
        public function modificar($id_bimestre, $nombre){
                
                $modelo = new Bimestre();
                $modelo->setId_bimestre($id_bimestre);
                $modelo->setNombre($nombre);
                
                $dao = new BimestreDAO();
                $dao->modificar($modelo);
        }
        
        public function eliminar($id_bimestre){
                
                $modelo = new Bimestre();
                $modelo->setId_bimestre($id_bimestre);
                
                $dao = new BimestreDAO();
                $dao->eliminar($modelo);
        }
}
?>
