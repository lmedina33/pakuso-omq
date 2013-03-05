<?php
require_once '../dao/NotasDAO.php';
require_once '../modelo/Notas.php';

class NotasNegocio{
	
	public function insertar ($id_cursos, $id_usuario, $id_bimestre, $cuaderno, $oral){
		
		$modelo = new Notas();
		$modelo->setId_cursos($id_cursos);
		$modelo->setId_usuario($id_usuario);
		$modelo->setId_bimestre($id_bimestre);
		$modelo->setCuaderno($cuaderno);
		$modelo->setOral($oral);

		$dao = new NotasDAO();
		$dao->insertar($modelo);
	}

	public function listar(){
		$dao = new NotasDAO();		
		return $dao->listar();
	}
	
	public function obtener($id_cursos, $id_usuario, $id_bimestre){
		
		$modelo = new Notas();
		$modelo->setId_cursos($id_cursos);
		$modelo->setId_usuario($id_usuario);
		$modelo->setId_bimestre($id_bimestre);
		
		$dao = new NotasDAO();
		return $dao->obtener($modelo);
	}
	
	public function modificar($id_cursos, $id_usuario, $id_bimestre,$ex_mensual){
		
		$modelo = new Notas();
		$modelo->setId_cursos($id_cursos);
		$modelo->setId_usuario($id_usuario);
		$modelo->setId_bimestre($id_bimestre);
		$modelo->setEx_mensual($ex_mensual);
		
		$dao = new NotasDAO();
		$dao->modificar($modelo);
	}
	
	public function eliminar($id_cursos, $id_usuario, $id_bimestre){
		
		$modelo = new Notas();
		$modelo->setId_usuario($id_usuario);
		$modelo->setId_cursos($id_cursos);
		$modelo->setId_usuario($id_usuario);
		$modelo->setId_bimestre($id_bimestre);
		
		$dao = new NotasDAO();
		$dao->eliminar($modelo);
	}
}
?>