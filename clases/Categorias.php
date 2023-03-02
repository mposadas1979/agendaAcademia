<?php

    require_once "Conexion.php";

    class Categorias extends Conexion {
        public function agregarCategoria($datos) {
			$conexion = Conexion::conectar();
			$sql = "INSERT INTO tb_acategorias (nombre, descripcion) 
					VALUES (?, ?)";
			$query = $conexion->prepare($sql);
			$query->bind_param('ss', $datos['nombre'],
									 $datos['descripcion']);
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function eliminarCategoria($idCategoria){
			$conexion = Conexion::conectar();
			$sql = "DELETE FROM tb_acategorias WHERE id_acategoria = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $idCategoria);
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function obtenerDatosCategoria($idCategoria){
			$conexion = Conexion::conectar();
			$sql = "SELECT id_acategoria,
						   nombre,
						   descripcion
					FROM  tb_acategorias
					WHERE id_acategoria = '$idCategoria'";
			$result = mysqli_query($conexion, $sql);
			$categoria = mysqli_fetch_array($result);

			$datos = array(
				"idCategoria" => $categoria['id_acategoria'],
				"nombre" => $categoria['nombre'],
				"descripcion" => $categoria['descripcion']
			);


			return $datos;
		}


		public function actualizarCategoria($datos) {
			$conexion = Conexion::conectar();

			$sql = "UPDATE tb_acategorias SET nombre = ?,
											  descripcion = ?
					WHERE id_acategoria = ?";
			
			$query = $conexion->prepare($sql);
			$query->bind_param('ssi', $datos['nombre'],
									  $datos['descripcion'],
									  $datos['idCategoria']);
			
			$respuesta = $query->execute();
			return $respuesta;
		}
  
    }

?>