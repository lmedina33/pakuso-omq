<?php


class Boletin{

	private $id_boletin;
	private $titulo;
	private $comentario;
	private $imagen;
	
	public function getId_Boletin() {return $this->id_boletin;}
	public function setId_Boletin($id_boletin){		$this->id_boletin = $id_boletin;}
	
	public function getTitulo() {return $this->titulo;}
	public function setTitulo($titulo){		$this->titulo = $titulo;}
	
	public function getComentario() {return $this->comentario;}
	public function setComentario($comentario){		$this->comentario = $comentario;}
	
	public function getImagen() {return $this->imagen;}
	public function setImagen($imagen){		$this->imagen = $imagen;}

}

?>