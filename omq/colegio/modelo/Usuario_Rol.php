<?php

require_once 'Usuario.php';

class Usuario_Rol{

	private $rol_nombre;
	private $id_usuario;

	public function getrol_nombre() {	return $this->rol_nombre;}
	public function setrol_nombre($rol_nombre){		$this->rol_nombre;}

	public function getId_usuario() {return $this->id_usuario;}
	public function setId_usuario($id_usuario){		$this->id_usuario = $id_usuario;}

}

?>