<?php


class Salon{

	private $id_salon;
	private $id_usuario;
	private $id_grupo;
	private $id_cursos;

	public function getId_salon() {return $this->id_salon;}
	public function setId_salon($id_salon){		$this->id_salon = $id_salon;}
	
	public function getId_usuario() {return $this->id_usuario;}
	public function setId_usuario($id_usuario){		$this->id_usuario = $id_usuario;}
	
	public function getId_grupo() {return $this->id_grupo;}
	public function setId_grupo($id_grupo){		$this->id_grupo = $id_grupo;}
	
	public function getId_cursos() {return $this->id_cursos;}
	public function setId_cursos($cursos){		$this->id_cursos = $id_cursos;}
	

}

?>