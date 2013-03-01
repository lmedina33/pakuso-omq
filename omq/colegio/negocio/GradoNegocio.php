<?php
require_once '../dao/GradoDAO.php';
require_once '../modelo/Grado.php';

class UsuarioNegocio{
	
	public function insertar ($id_grado,$nombre,$precio){
		
		$modelo = new Grado();
		$modelo->setId_grado($id_grado);
		$modelo->setNombre($nombre);
		$modelo->setPrecio($precio);
		
		$dao = new GradoDAO();
		$dao->insertar($modelo);
	}

	public function listar(){
		$dao = new GradoDAO();		
		return $dao->listar();
	}
	
	public function obtener($id_grado){
		
		$modelo = new Grado();
		$modelo->setId_grado($id_grado);
		
		$dao = new GradoDAO();
		return $dao->obtener($modelo);
	}
	
	public function modificar($id_grado, $nombre){
		
		$modelo = new Grado();
		$modelo->setId_grado($id_grado);
		$modelo->setNombre($nombre);
		
		$dao = new GradoDAO();
		$dao->modificar($modelo);
	}
	
	public function eliminar($id_grado){
		
		$modelo = new Grado();
		$modelo->setId_grado($id_grado);
		
		$dao = new GradoDAO();
		$dao->eliminar($modelo);
	}
}
?>