<?php
ini_set('include_path', '.;c:\wamp\www\omq');
require_once 'colegio/modelo/Boletin.php';
require_once 'colegio/dao/BoletinDAO.php';

class BoletinNegocio{
	
	public function insertar ($titulo,$comentario,$imagen){
		
		$modelo = new Boletin();
		$modelo->setTitulo($titulo);
		$modelo->setComentario($comentario);
		$modelo->setImagen($imagen);
		
		$dao = new BoletinDAO();
		$dao->insertar($modelo);
	}

	public function listar(){
		$dao = new BoletinDAO();		
		return $dao->listar();
	}
	
	public function obtener($id_boletin){
		
		$modelo = new Boletin();
		$modelo->setId_boletin($id_boletin);
		
		$dao = new BoletinDAO();
		return $dao->obtener($modelo);
	}
	
	public function modificar($id_boletin, $titulo){
		
		$modelo = new Boletin();
		$modelo->setId_boletin($id_boletin);
		$modelo->setTitulo($titulo);
			
		$dao = new BoletinDAO();
		$dao->modificar($modelo);
	}
	
	public function eliminar($id_boletin){
		
		$modelo = new Boletin();
		$modelo->setId_boletin($id_boletin);
		
		$dao = new BoletinDAO();
		$dao->eliminar($modelo);
	}
}
?>