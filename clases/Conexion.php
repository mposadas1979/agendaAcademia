
<?php 
	
	class Conexion {

		public function conectar() {
			$servidor = "172.30.240.10";
			$usuario = "sistemas";
			$password = "M@cha1206";
			$bd = "bd_mapr";

			$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

			return $conexion;
		}
	}

 ?>