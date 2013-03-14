<?php
ini_set('include_path', '.;c:\wamp\www\omq');
require_once 'colegio/dao/FraseDAO.php';
require_once 'colegio/modelo/Frase.php';

class FraseNegocio{
        
        public function insertar ($id_frase, $fecha, $id_usuario){
                
                $modelo = new Frase();
                $modelo->setId_frase($id_frase);
                $modelo->setFecha($fecha);
                $modelo->setFecha($id_usuario);
                
                $dao = new FraseDAO();
                $dao->insertar($modelo);
        } 

        public function listar(){
                $dao = new FraseDAO();            
                return $dao->listar();
        }
        
        public function obtener($id_frase){
                
                $modelo = new Frase();
                $modelo->setId_frase($id_frase);
                
                $dao = new FraseDAO();
                return $dao->obtener($modelo);
        }
        
        public function modificar($id_frase, $fecha){
                
                $modelo = new Frase();
                $modelo->setId_frase($id_frase);
                $modelo->setFecha($fecha);
                
                $dao = new FraseDAO();
                $dao->modificar($modelo);
        }
        
        public function eliminar($id_frase){
                
                $modelo = new Frase();
                $modelo->setId_frase($id_frase);
                
                $dao = new FraseDAO();
                $dao->eliminar($modelo);
        }
        
        public function obtenerFrases(){
        
        	$dao = new FraseDAO();
        	return $dao->obtenerFrases();
        }
        
        
}
?>
