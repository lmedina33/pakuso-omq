<?php
class Cursos{
        
        private $id_cursos;
        private $nombre;
        private $detalle;
        private $id_grado;
        
        /** getter / setter */
        public function getId_cursos() {return $this->id_cursos;}
        public function setId_cursos($id_cursos){$this->id_cursos = $id_cursos;}
        
        public function getNombre() {return $this->nombre;}
        public function setNombre($nombre){$this->nombre = $nombre;}
        
        public function getDetalle() {return $this->detalle;}
        public function setDetalle($detalle){$this->detalle = $detalle;}
        
        public function getId_grado() {return $this->id_grado;}
        public function setId_grado($id_grado){$this->id_grado = $id_grado;}
}
?>