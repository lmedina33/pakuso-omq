<?php
class Rol{
	
	private $rol_nombre;
	private $descripcion;
	
	/** getter / setter */
	public function getRol_nombre() {return $this->rol_nombre;}
	public function setRol_nombre($rol_nombre){$this->rol_nombre = $rol_nombre;}
	
	public function getDescripcion() {return $this->descripcion;}
	public function setDescripcion($descripcion){$this->descripcion = $descripcion;}
}
?>