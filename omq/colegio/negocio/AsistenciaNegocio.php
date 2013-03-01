<?php
require_once '../dao/AsistenciaDAO.php';
require_once '../modelo/Asistencia.php';

class AsistenciaNegocio{
	
	public function insertar ($fecha, $estado, $id_usuario, $id_bimestre, $id_grado){
		
		$modelo = new Asistencia();
		$modelo->setFecha($fecha);
		$modelo->setEstado($estado);
		$modelo->setId_usuario($id_usuario);
		$modelo->setId_bimestre($id_bimestre);
		$modelo->setId_grado($id_grado);
		
		$dao = new AsistenciaDAO();
		$dao->insertar($modelo);
	}

	public function listar(){
		$dao = new AsistenciaDAO();		
		return $dao->listar();
	}
	
	public function obtener($id_asistencia){
		
		$modelo = new Asistencia();
		$modelo->setId_asistencia($id_asistencia);
		
		$dao = new AsistenciaDAO();
		return $dao->obtener($modelo);
	}
	
	public function modificar($id_asistencia, $estado){
		
		$modelo = new Asistencia();
		$modelo->setId_asistencia($id_asistencia);
		$modelo->setEstado($estado);
		
		$dao = new AsistenciaDAO();
		$dao->modificar($modelo);
	}
	
	public function eliminar($id_asistencia){
		
		$modelo = new Asistencia();
		$modelo->setId_asistencia($id_asistencia);
		
		$dao = new AsistenciaDAO();
		$dao->eliminar($modelo);
	}
}
?>