<?php

namespace Mini\Controller;

use Mini\Model\Proveedor;
use Mini\Model\Insumo;

class ProveedorController{

	public function index(){

		$proveedor = new Proveedor();
		$proveedores = $proveedor->listarProveedores();

		$objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 

		 require APP . 'view/_templates/header.php';
		 require APP . 'view/proveedor/index.php';
		 require APP . 'view/_templates/footer.php';
	}

	public function registro(){

		$objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 

		 require APP . 'view/_templates/header.php';
		 require APP . 'view/proveedor/registro.php';
		 require APP . 'view/_templates/footer.php';
	}

	public function guardar()
	{
			if (isset($_POST['agregarProveedor'])) {
				$proveedor = new Proveedor();
				$proveedor->registrar($_POST['codigo'],$_POST['nombre'],$_POST['telefono'],$_POST['direccion'],$_POST['correo'],$_POST['estado']);
			}
			header('location: ' . URL . 'proveedor/index');
	}

	public function editar($idproveedor)
	{
		if (isset($idproveedor)) {
			$proveedor = new Proveedor();
			$proveedor = $proveedor->obtenerProveedor($idproveedor);

			$objeto = new Insumo();
			$insumos = $objeto->listadoInsumosS(); 

			require APP . 'view/_templates/header.php';
            require APP . 'view/proveedor/editar.php';
            require APP . 'view/_templates/footer.php';
		} else {

				header('location: ' . URL . 'proveedor/index');
			}
	}

	public function actualizar()
	{
		if (isset($_POST['editarProveedor'])) {
			$proveedor = new Proveedor();
			$proveedor->actualizar($_POST['codigo'],$_POST['nombre'],$_POST['telefono'],$_POST['direccion'],$_POST['correo'],$_POST['estado'],$_POST['idproveedor']);
		}
		header('location: ' . URL . 'proveedor/index');
	}


}


 ?>
