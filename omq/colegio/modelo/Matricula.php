<?php


class Matricula{

	private $id_matricula;
	private $fecha_pago;
	private $id_usuario;
	private $id_grado;
	private $id_grupo;

	public function getId_Matricula() {return $this->id_matricula;}
	public function setId_Matricula($id_matricula){		$this->id_matricula = $id_matricula;}
	
	public function getId_usuario() {return $this->id_usuario;}
	public function setId_usuario($id_usuario){		$this->id_usuario = $id_usuario;}
	
	public function getId_grado() {return $this->id_grado;}
	public function setId_grado($id_grado){		$this->id_grado = $id_grado;}
	
	public function getFecha_pago() {return $this->fecha_pago;}
	public function setFecha_pago($fecha_pago){		$this->fecha_pago = $fecha_pago;}
	
	public function getId_grupo() {return $this->id_grupo;}
	public function setId_grupo($id_grupo){		$this->id_grupo = $id_grupo;}

}

?>