<?php
require_once '../dao/CursosDAO.php';
require_once '../modelo/Cursos.php';

class UsuarioNegocio{
        
        public function insertar ($id_cursos, $nombre, $detalle){
                
                $modelo = new Cursos();
                $modelo->setId_cursos($rol_nombre);
                $modelo->setNombre($descripcion);
                $modelo->setDetalle($detalle);
                
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