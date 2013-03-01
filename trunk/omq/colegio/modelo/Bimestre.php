<?php
class Bimestre{
        
        private $id_bimestre;
        private $nombre;
        private $descripciom;
        
        /** getter / setter */
        public function getId_bimestre() {return $this->id_bimestre;}
        public function setId_bimestre($id_bimestre){$this->id_bimestre = $id_bimestre;}
        
        public function getNombre() {return $this->nombre;}
        public function setNombre($descripcion){$this->nombre = $nombre;}
        
        public function getDescripciom() {return $this->descripciom;}
        public function setDescripciom($descripcion){$this->descripciom = $descripciom;}
}
?>