<?php
require_once '../dao/MatriculaDAO.php';
require_once '../modelo/Matricula.php';

class MatriculaNegocio{
	
	public function insertar ( $fecha_pago, $id_usuario, $id_grado){
		
		$modelo = new Matricula();
		$modelo->setFecha($fecha_pago);
		$modelo->setId_usuario($id_usuario);
		$modelo->setId_grado($id_grado);
		
		$dao = new MatriculaDAO();
		$dao->insertar($modelo);
	}

	public function listar(){
		$dao = new MatriculaDAO();		
		return $dao->listar();
	}
	
	public function obtener($id_matricula){
		
		$modelo = new Matricula();
		$modelo->setId_matricula($id_matricula);
		
		$dao = new MatriculaDAO();
		return $dao->obtener($modelo);
	}
	
	public function modificar($id_matricula, $fecha_pago){
		
		$modelo = new Matricula();
		$modelo->setId_matricula($id_matricula);
		$modelo->setFecha_pago($fecha_pago);
		
		$dao = new MatriculaDAO();
		$dao->modificar($modelo);
	}
	
	public function eliminar($id_matricula){
		
		$modelo = new Matricula();
		$modelo->setId_matricula($id_matricula);
		
		$dao = new MatriculaDAO();
		$dao->eliminar($modelo);
	}
}
?>