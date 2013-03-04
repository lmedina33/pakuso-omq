<?php
class Bimestre{
        
        private $id_bimestre;
        private $nombre;
        
        /** getter / setter */
        public function getId_bimestre() {return $this->id_bimestre;}
        public function setId_bimestre($id_bimestre){$this->id_bimestre = $id_bimestre;}
        
        public function getNombre() {return $this->nombre;}
        public function setNombre($nombre){$this->nombre = $nombre;}
     
}
?>