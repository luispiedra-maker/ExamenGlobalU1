<?php 
	require_once("conexion.php");
	class Usuario extends Conexion{

		/*function comprobar($usuario,$password){
			$this->sentencia="SELECT nombre_u FROM user WHERE nombre_u='$usuario' AND psswd='$password'";
			$resultado=$this->obtenerSentencia();
			if($resultado->num_rows==1){
				//Si encontrĂ³ al usuario y nos manda a Home
				header("Location: uhome.php");
			}else{
				//No se encontrĂ³ el usuario 
				header("Location: login.php?error=si");
			}
		}*/
		public function consultar(){
			$this->sentencia = "SELECT * FROM persona";
			$res = $this->obtenerSentencia();
			$personas = array();
			while($fila = $res->fetch_assoc()){
				$personas["personas"][] = $fila;

			}
			$this->cerrarConexion();
			return $personas;
		}

	}
 ?>