<?php
require_once '../dao/Usuario_RolDAO.php';
require_once '../modelo/Usuario_Rol.php';

class Usuario_RolNegocio{
        
        public function insertar ($rol_nombre,$id_usuario){
                
                $modelo = new Usuario_Rol();
                $modelo->setRol_nombre($rol_nombre);
                $modelo->setId_usuario($id_usuario);
                
                $dao = new Usuario_RolDAO();
                $dao->insertar($modelo);
        }

        public function listar(){
                $dao = new Usuario_RolDAO();            
                return $dao->listar();
        }
        
        public function obtener($id_usuario){
                
                $modelo = new Usuario_Rol();
                $modelo->setId_usuario($id_usuario);
                
                $dao = new Usuario_RolDAO();
                return $dao->obtener($modelo);
        }
        
        public function modificar($rol_nombre, $id_usuario){
                
                $modelo = new Usuario_Rol();
                $modelo->setRol_nombre($rol_nombre);
                $modelo->setId_usuario($id_usuario);
                
                $dao = new Usuario_RolDAO();
                $dao->modificar($modelo);
        }
        
        public function eliminar($id_usuario){
                
                $modelo = new Usuario_Rol();
                $modelo->setId_usuario($id_usuario);
                
                $dao = new Usuario_RolDAO();
                $dao->eliminar($modelo);
        }
}
?>