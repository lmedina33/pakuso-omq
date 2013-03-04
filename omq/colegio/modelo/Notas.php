<?php


class Notas{

	private $id_cursos;
	private $id_usuario;
	private $id_bimestre;
	private $cuaderno;
	private $oral;
	private $comportamiento;
	private	$ex_mensual;
	private $ex_bimestral;
	private $exposicion;
	private $nota_final;

	public function getId_cursos() {return $this->id_cursos;}
	public function setId_cursos($id_cursos){		$this->id_cursos = $id_cursos;}
	
	public function getId_usuario() {return $this->id_usuario;}
	public function setId_usuario($id_usuario){		$this->id_usuario = $id_usuario;}
	
	public function getId_bimestre() {return $this->id_bimestre;}
	public function setId_bimestre($id_bimestre){		$this->id_bimestre = $id_bimestre;}
	
	public function getCuaderno() {return $this->cuaderno;}
	public function setCuaderno($cuaderno){		$this->cuaderno = $cuaderno;}
	
	public function getOral() {return $this->oral;}
	public function setOral($oral){		$this->oral = $oral;}
	
	public function getComportamiento() {return $this->comportamiento;}
	public function setComportamiento($comportamiento){		$this->comportamiento = $comportamiento;}
	
	public function getEx_mensual() {return $this->ex_mensual;}
	public function setEx_mensual($ex_mensual){		$this->ex_mensual = $ex_mensual;}
	
	public function getEx_bimestral() {return $this->ex_bimestral;}
	public function setEx_bimestral($ex_bimestral){		$this->ex_bimestral = $ex_bimestral;}
	
	public function getExposicion() {return $this->exposicion;}
	public function setExposicion($exposicion){		$this->exposicion = $exposicion;}
	
	public function getNota_final() {return $this->nota_final;}
	public function setNota_final($nota_final){		$this->nota_final = $nota_final;}

}

?>