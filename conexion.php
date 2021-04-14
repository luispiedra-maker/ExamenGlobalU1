<?php 

	class Conexion{

		public $conexion="";
		public $host="localhost";
		public $user="root";
		public $password="";
		public $base = "luispiedra";
		public $sentencia = "";

		public function abrirConexion(){
$this->conexion=new mysqli($this->host,$this->user,$this->password,$this->base);
		}

		public function cerrarConexion(){
			$this->conexion->close();
		}
		// Altas, Bajas, Modificaciones
		public function ejecutarSentencia(){
			$this->abrirConexion();
		$this->conexion->query($this->sentencia);
			$this->cerrarConexion();
		}
		// Consultar
		public function obtenerSentencia(){
			$this->abrirConexion();
			return $this->conexion->query($this->sentencia);
		}

	}

 ?>