<?php
require_once '../dao/UsuarioDAO.php';
require_once '../modelo/Notas.php';

class NotasNegocio{
	
	public function insertar ($id_cursos, $id_usuario, $id_bimestre, $id_grado, $cuaderno, $oral){
		
		$modelo = new Notas();
		$modelo->setId_cursos($id_cursos);
		$modelo->setId_usuario($id_usuario);
		$modelo->setId_bimestre($id_bimestre);
		$modelo->setId_grado($id_grado);
		$modelo->setCuaderno($cuaderno);
		$modelo->setOral($oral);

		$dao = new NotasDAO();
		$dao->insertar($modelo);
	}

	public function listar(){
		$dao = new NotasDAO();		
		return $dao->listar();
	}
	
	public function obtener($id_usuario){
		
		$modelo = new Notas();
		$modelo->setId_cursos($id_cursos);
		$modelo->setId_usuario($id_usuario);
		$modelo->setId_bimestre($id_bimestre);
		$modelo->setId_grado($id_grado);
		
		$dao = new NotasDAO();
		return $dao->obtener($modelo);
	}
	
	public function modificar($id_cursos, $id_usuario, $id_bimestre, $id_grado, $ex_mensual){
		
		$modelo = new Notas();
		$modelo->setId_cursos($id_cursos);
		$modelo->setId_usuario($id_usuario);
		$modelo->setId_bimestre($id_bimestre);
		$modelo->setId_grado($id_grado);
		$modelo->setEx_mensual($ex_mensual);
		
		$dao = new NotasDAO();
		$dao->modificar($modelo);
	}
	
	public function eliminar($id_usuario){
		
		$modelo = new Notas();
		$modelo->setId_usuario($id_usuario);
		
		$dao = new NotasDAO();
		$dao->eliminar($modelo);
	}
}
?>