<?php
class Frase{
        
        private $id_frase;
        private $nombre;
        private $fecha;
        private $id_usuario;
        
        /** getter / setter */
        public function getId_frase() {return $this->id_frase;}
        public function setId_frase($id_frase){$this->id_frase = $id_frase;}
        
        public function getFrase() {return $this->frase;}
        public function setFrase($frase){$this->frase = $frase;}
     	
        public function getFecha() {return $this->fecha;}
        public function setFecha($fecha){$this->fecha = $fecha;}
        
        public function getId_usuario() {return $this->id_usuario;}
        public function setId_usuario($id_usuario){$this->id_usuario = $id_usuario;}
}
?>