<?php 

namespace Mini\Controller;

use Mini\Model\Venta;
use Mini\Model\Cliente;
use Mini\Model\Producto;
use Mini\Model\Insumo;


class Ventacontroller{

    public function index(){

        $venta = new Venta();
        $ventas = $venta->listarVentas();
        
        $objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 

        require APP . 'view/_templates/header.php';
        require APP . 'view/venta/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registro()
    {
        $cliente = new Cliente();
        $producto = new Producto();

        $productos = $producto->listaractivos();
        $clientes = $cliente->listaractivos();

        $objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 


        require APP . 'view/_templates/header.php';
        require APP . 'view/venta/registro.php';
        require APP . 'view/_templates/footer.php';
    }

    public function guardar()
    {   
        if (isset($_POST["nuevaVenta"])) {
            
            
            $venta = new Venta();
            $venta->__SET("Fecha", $_POST["fecha"]);
            $venta->__SET("IDCliente", $_POST["cliente"]);
            $venta->__SET("Estado", $_POST["estado"]);

            $respuesta = $venta->registrar();

            if ($respuesta != false) {

                $ultimo = $respuesta->id;
                
        
                foreach($_POST["id_producto"] as $key => $value){
        
                    $detalle = new Venta();
                    $detalle->__SET("IDVenta",$ultimo);
                    $detalle->__SET("IDProducto", $value);
                    $detalle->__SET("Precio", $_POST["precio"][$key]);  
                    $detalle->__SET("Cantida", $_POST["canti"][$key]);                      
                    $detalle->__SET("Subtotal", $_POST['SubTotal'][$key]);
                    $detalle->__SET("ValorTotal", $value, $_POST['total'][$key]);
                    
                    $detalle->registrarDetalle();
                }
            }


         
        }    
        header('location: ' . URL . 'venta  /index');
    }

    public function buscar($IDVenta)
    {        
        if (isset($IDVenta)) {
            
            $venta = new Venta(); 
            $producto = new Producto();
            $cliente = new Cliente();           
            $ventas = $venta->obtenerVenta($IDVenta);
            $ventasdetalle = $venta->obtenerDetalleVenta($IDVenta);

            $productos = $producto->listaractivos();
            $clientes = $cliente->listaractivos();

            $objeto = new Insumo();
            $insumos = $objeto->listadoInsumosS(); 

            

           
           
            require APP . 'view/_templates/header.php';
            require APP . 'view/venta/editar.php';
            require APP . 'view/_templates/footer.php';

        } else {
            
            header('location: ' . URL . 'cliente/index');
        }
    }

    public function eliminarDetalle($iddetalle)
    {
       $detalle = new Venta();
       $detalle = $detalle->eliminarDetalle($iddetalle);

    }

    public function actualizar()
    {
        if (isset($_POST["nuevaVenta"])) {
            
            
            $venta = new Venta();
            $venta->__SET("Fecha", $_POST["fecha"]);
            $venta->__SET("IDCliente", $_POST["cliente"]);
            $venta->__SET("Estado", $_POST["estado"]);
            $venta->__SET("IDVenta", $_POST["idventa"]);

            $venta->actualizar();

                
        
                foreach($_POST["id_producto"] as $key => $value){
        
                    $detalle = new Venta();
                    $detalle->__SET("IDVenta", $_POST['idventa']);
                    $detalle->__SET("IDProducto", $value);
                    $detalle->__SET("Precio", $_POST["precio"][$key]);  
                    $detalle->__SET("Cantida", $_POST["canti"][$key]);                      
                    $detalle->__SET("Subtotal", $_POST['SubTotal'][$key]);
                    $detalle->__SET("ValorTotal", $_POST['total'][$key]);
                    
                    $detalle->registrarDetalle();
                }
            


         
        }    
        header('location: ' . URL . 'venta  /index');
    }
}

?>