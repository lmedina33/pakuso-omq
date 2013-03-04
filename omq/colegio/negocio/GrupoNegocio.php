<?php
require_once '../dao/GrupoDAO.php';
require_once '../modelo/Grupo.php';

class GrupoNegocio{
        
        public function insertar ($id_grupo, $nombre){
                
                $modelo = new Grupo();
                $modelo->setId_grupo($id_grupo);
                $modelo->setNombre($nombre);
                
                $dao = new GrupoDAO();
                $dao->insertar($modelo);
        }

        public function listar(){
                $dao = new GrupoDAO();            
                return $dao->listar();
        }
        
        public function obtener($id_grupo){
                
                $modelo = new Grupo();
                $modelo->setId_grupo($id_grupo);
                
                $dao = new GrupoDAO();
                return $dao->obtener($modelo);
        }
        
        public function modificar($id_grupo, $nombre){
                
                $modelo = new Grupo();
                $modelo->setId_grupo($id_grupo);
                $modelo->setNombre($nombre);
                
                $dao = new GrupoDAO();
                $dao->modificar($modelo);
        }
        
        public function eliminar($id_grupo){
                
                $modelo = new Grupo();
                $modelo->setId_grupo($id_grupo);
                
                $dao = new GrupoDAO();
                $dao->eliminar($modelo);
        }
}
?>
