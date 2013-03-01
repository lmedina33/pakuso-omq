<?php


class Asistencia{

	private $id_asistencia;
	private $fecha;
	private $estado;
	private $id_usuario;
	private $id_bimestre;
	private $id_grado;

	public function getId_Asistencia() {return $this->id_asistencia;}
	public function setId_Asistencia($id_asistencia){		$this->id_asistencia = $id_asistencia;}
	
	public function getId_usuario() {return $this->id_usuario;}
	public function setId_usuario($id_usuario){		$this->id_usuario = $id_usuario;}
	
	public function getId_bimestre() {return $this->id_bimestre;}
	public function setId_bimestre($id_bimestre){		$this->id_bimestre = $id_bimestre;}
	
	public function getId_grado() {return $this->id_grado;}
	public function setId_grado($id_grado){		$this->id_grado = $id_grado;}
	
	public function getFecha() {return $this->fecha;}
	public function setFecha($fecha){		$this->fecha = $fecha;}
	
	public function getEstado() {return $this->estado;}
	public function setEstado($estado){		$this->estado = $estado;}


}

?>