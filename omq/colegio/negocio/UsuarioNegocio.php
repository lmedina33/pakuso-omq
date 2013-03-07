<?php
require_once '../dao/UsuarioDAO.php';
require_once '../modelo/Usuario.php';

class UsuarioNegocio{
	
	public function insertar ($id_usuario,$clave, $nombre1, $paterno, $materno, $fecha, $dni){
		
		$modelo = new Usuario();
		$modelo->setId_usuario($id_usuario);
		$modelo->setClave($clave);
		$modelo->setNombre1($nombre1);
		$modelo->setPaterno($paterno);
		$modelo->setMaterno($paterno);
		$modelo->setFecha_nacimiento($fecha);
		$modelo->setDni($dni);

		$dao = new UsuarioDAO();
		$dao->insertar($modelo);
	}

	public function listar(){
		$dao = new UsuarioDAO();		
		return $dao->listar();
	}
	
	public function obtener($id_usuario){
		
		$modelo = new Usuario();
		$modelo->setId_usuario($id_usuario);
		
		$dao = new UsuarioDAO();
		return $dao->obtener($modelo);
	}
	
	public function modificar($id_usuario, $nombre1){
		
		$modelo = new Usuario();
		$modelo->setId_usuario($id_usuario);
		$modelo->setNombre1($nombre1);
		
		$dao = new UsuarioDAO();
		$dao->modificar($modelo);
	}
	
	public function eliminar($id_usuario){
		
		$modelo = new Usuario();
		$modelo->setId_usuario($id_usuario);
		
		$dao = new UsuarioDAO();
		$dao->eliminar($modelo);
	}
}
?>