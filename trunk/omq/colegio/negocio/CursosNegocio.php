<?php
require_once '../dao/CursosDAO.php';
require_once '../modelo/Cursos.php';

class CursosNegocio{
        
        public function insertar ($id_cursos, $nombre, $detalle, $id_grado){
                
                $modelo = new Cursos();
                $modelo->setId_cursos($id_cursos);
                $modelo->setNombre($nombre);
                $modelo->setDetalle($detalle); 
                $modelo->setId_grado($id_grado);
                
                $dao = new CursosDAO();
                $dao->insertar($modelo);
        }

        public function listar(){
                $dao = new CursosDAO();            
                return $dao->listar();
        }
        
        public function obtener($id_cursos){
                
                $modelo = new Cursos();
                $modelo->setId_cursos($id_cursos);
                
                $dao = new CursosDAO();
                return $dao->obtener($modelo);
        }
        
        public function modificar($id_cursos, $nombre){
                
                $modelo = new Cursos();
                $modelo->setId_cursos($id_cursos);
                $modelo->setNombre($nombre);
                
                $dao = new CursosDAO();
                $dao->modificar($modelo);
        }
        
        public function eliminar($id_cursos){
                
                $modelo = new Cursos();
                $modelo->setId_cursos($id_cursos);
                
                $dao = new CursosDAO();
                $dao->eliminar($modelo);
        }
}
?>