<?php


class Notas{

	private $id_cursos;
	private $id_usuario;
	private $id_bimestre;
	private $id_grado;
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
	
	public function getId_grado() {return $this->id_grado;}
	public function setId_grado($id_grado){		$this->id_grado = $id_grado;}
	
	public function getcuaderno() {return $this->cuaderno;}
	public function setcuaderno($cuaderno){		$this->cuaderno = $cuaderno;}
	
	public function getoral() {return $this->oral;}
	public function setoral($oral){		$this->oral = $oral;}
	
	public function getcomportamiento() {return $this->comportamiento;}
	public function setcomportamiento($comportamiento){		$this->comportamiento = $comportamiento;}
	
	public function getex_mensual() {return $this->ex_mensual;}
	public function setex_mensual($ex_mensual){		$this->ex_mensual = $ex_mensual;}
	
	public function getex_bimestral() {return $this->ex_bimestral;}
	public function setex_bimestral($ex_bimestral){		$this->ex_bimestral = $ex_bimestral;}
	
	public function getexposicion() {return $this->exposicion;}
	public function setexposicion($exposicion){		$this->exposicion = $exposicion;}
	
	public function getnota_final() {return $this->nota_final;}
	public function setnota_final($nota_final){		$this->nota_final = $nota_final;}

}

?>