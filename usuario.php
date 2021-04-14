<?php 
	require_once("conexion.php");
	class Usuario extends Conexion{

		/*function comprobar($usuario,$password){
			$this->sentencia="SELECT nombre_u FROM user WHERE nombre_u='$usuario' AND psswd='$password'";
			$resultado=$this->obtenerSentencia();
			if($resultado->num_rows==1){
				//Si encontró al usuario y nos manda a Home
				header("Location: uhome.php");
			}else{
				//No se encontró el usuario 
				header("Location: login.php?error=si");
			}
		}*/
		public function consultar(){
			$this->sentencia = "SELECT * FROM persona";
			$res = $this->obtenerSentencia();
			$personas = array();
			while($fila = $rex->fetch_assoc()){
				$personas["personas"][] = $fila;
			}
		}

	}
 ?>