<?php

	namespace Mini\Model;

	use Mini\Core\Model;
	use Mini\Libs\Helper;

	class Proveedor extends Model
	{

		private $IDProveedor;
		private $Codigo;
		private $Nombre;
		private $Telefono;
		private $Direccion;
		private $Correo;
		private $Estado;

		


		public function listarProveedores()
		{
			$sql = "SELECT * FROM proveedor";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}

		public function listarProveedores2()
		{
			$sql = "SELECT * FROM proveedor WHERE Estado = 'Activo'";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}

		public function registrar($codigo, $nombre, $telefono, $direccion, $correo, $estado)
		{
			$sql = "INSERT INTO proveedor ( Codigo, Nombre, Telefono, Direccion, Correo, Estado) VALUES (:Codigo, :Nombre, :Telefono, :Direccion, :Correo, :Estado )";
			$query = $this->db->prepare($sql);
			$parameters = array(':Codigo' => $codigo, ':Nombre' => $nombre, ':Telefono' => $telefono, ':Direccion' => $direccion, ':Correo' => $correo, ':Estado' => $estado);
			$query->execute($parameters);
		}

		public function obtenerProveedor($idproveedor)
		{
			$sql = "SELECT * FROM proveedor WHERE IDProveedor = :IDProveedor LIMIT 1";
			$query = $this->db->prepare($sql);
			$parameters = array(':IDProveedor' => $idproveedor);
			$query->execute($parameters);
			return $query->fetch();
		}

		public function actualizar($codigo, $nombre, $telefono, $direccion, $correo, $estado, $idproveedor)
		{
			$sql = "UPDATE proveedor SET Codigo = :Codigo, Nombre = :Nombre, Telefono = :Telefono, Direccion = :Direccion, Correo = :Correo, Estado = :Estado WHERE IDProveedor = :IDProveedor";
			$query = $this->db->prepare($sql);
			$parameters = array(':Codigo' => $codigo, ':Nombre' => $nombre, ':Telefono' => $telefono, ':Direccion' => $direccion, ':Correo' => $correo, ':Estado' => $estado, ':IDProveedor' => $idproveedor);
			$query->execute($parameters);
		}



	}


 ?>
