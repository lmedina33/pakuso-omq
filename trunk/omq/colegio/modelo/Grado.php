<?php
class Grado{
	
	private $id_grado;
	private $nombre;
	private $precio;
	
	/** getter / setter */
	public function getId_grado() {return $this->id_grado;}
	public function setId_grado($id_grado){$this->id_grado = $id_grado;}
	
	public function getNombre() {return $this->nombre;}
	public function setNombre($nombre){$this->nombre = $nombre;}
	
	public function getPrecio() {return $this->precio;}
	public function setPrecio($precio){$this->precio = $precio;}
}
?>