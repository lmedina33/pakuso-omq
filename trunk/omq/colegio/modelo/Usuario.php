<?php
	class Usuario{
		
		private $id_usuario;
		private $clave;
		private $nombre1;
		private $nombre2;
		private $paterno;
		private $materno;
		private $correo;
		private $fecha_nacimiento;
		private $dni;
		private $direccion;
		private $telefono;
		private $estado_pago;
		
	/** getter / setter */
		public function getId_usuario() {return $this->id_usuario;}
		public function setId_usuario($id_usuario){$this->id_usuario = $id_usuario;}
		
		public function getClave(){return $this->clave;}
		public function setClave($clave){$this->clave = $clave;}
		
		public function getNombre1(){return $this->nombre1;}
		public function setNombre1($nombre1){$this->nombre1 = $nombre1;}
		
		public function getNombre2(){return $this->nombre2;}
		public function setNombre2($nombre2){$this->nombre2 = $nombre2;}
		
		public function getPaterno(){return $this->paterno;}
		public function setPaterno($paterno){$this->paterno = $paterno;}
		
		public function getMaterno(){return $this->paterno;}
		public function setMaterno($paterno){$this->paterno = $paterno;}
		
		public function getCorreo(){return $this->correo;}
		public function setCorreo($correo){$this->correo = $correo;}
		
		public function getFecha_nacimiento(){return $this->fecha_nacimiento;}
		public function setFecha_nacimiento($fecha_nacimiento){$this->fecha_nacimiento = $fecha_nacimiento;}
		
		public function getDni(){return $this->dni;}
		public function setDni($dni){$this->dni = $dni;}
		
		public function getDireccion(){return $this->direccion;}
		public function setDireccion($direccion){$this->direccion = $direccion;}
		
		public function getTelefono(){return $this->telefono;}
		public function setTelefono($telefono){$this->telefono = $telefono;}
		
		public function getEstado_pago(){return $this->estado_pago;}
		public function setEstado_pago($estado_pago){$this->estado_pago = $estado_pago;}
		
		
	}
?>