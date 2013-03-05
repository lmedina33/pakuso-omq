<?php
require_once '../dao/RolDAO.php';
require_once '../modelo/Rol.php';

class RolNegocio{
	
	public function insertar ($rol_nombre,$descripcion){
		
		$modelo = new Rol();
		$modelo->setRol_nombre($rol_nombre);
		$modelo->setDescripcion($descripcion);
		
		$dao = new RolDAO();
		$dao->insertar($modelo);
	}

	public function listar(){
		$dao = new RolDAO();		
		return $dao->listar();
	}
	
	public function obtener($rol_nombre){
		
		$modelo = new Rol();
		$modelo->setRol_nombre($rol_nombre);
		
		$dao = new RolDAO();
		return $dao->obtener($modelo);
	}
	
	public function modificar($rol_nombre, $descripcion){
		
		$modelo = new Rol();
		$modelo->setRol_nombre($rol_nombre);
		$modelo->setDescripcion($descripcion);
		
		$dao = new RolDAO();
		$dao->modificar($modelo);
	}
	
	public function eliminar($rol_nombre){
		
		$modelo = new Rol();
		$modelo->setRol_nombre($rol_nombre);
		
		$dao = new RolDAO();
		$dao->eliminar($modelo);
	}
}
?>