<?php
class Cursos{
        
        private $id_cursos;
        private $nombre;
        previte $detalle;
        
        /** getter / setter */
        public function getId_cursos() {return $this->id_cursos;}
        public function setId_cursos($id_cursos){$this->id_cursos = $id_cursos;}
        
        public function getNombre() {return $this->nombre;}
        public function setNombre($nombre){$this->nombre = $nombre;}
        
        public function getDetalle() {return $this->detalle;}
        public function setDetalle($detalle){$this->detalle = $detalle;}
}
?>