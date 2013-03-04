<?php
class Grupo{
        
        private $id_grupo;
        private $nombre;
        
        /** getter / setter */
        public function getId_grupo() {return $this->id_grupo;}
        public function setId_grupo($id_grupo){$this->id_grupo = $id_grupo;}
        
        public function getNombre() {return $this->nombre;}
        public function setNombre($nombre){$this->nombre = $nombre;}
     
}
?>