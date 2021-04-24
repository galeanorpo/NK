<?php 

namespace Mini\Controller;

use Mini\Model\Producto;
use Mini\Model\Insumo;

class Productocontroller
{
    public function index()
    {
        $producto = new Producto();
        $productos = $producto->listarProductos();  

        $objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS();      

        require APP . 'view/_templates/header.php';
        require APP . 'view/producto/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registro()
    {   
        $objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 

        $insumo = new Insumo();
        $insumos0 = $insumo->listadoInsumos();
        require APP . 'view/_templates/header.php';
        require APP . 'view/producto/registro.php';
        require APP . 'view/_templates/footer.php';
    }   
  
    public function guardar()
    {
        session_start();
        $producto = new Producto();
        $producto->__SET("Nombre", $_POST["nombre"]);
        $producto->__SET("Cantidad", $_POST["cantidad"]);
        $producto->__SET("Precio", $_POST["precio"]);
        $producto->__SET("Tipo", $_POST["tipo"]);
        $producto->__SET("Estado", $_POST["estado"]);
        $producto->__SET("Foto", file_get_contents($_FILES["foto"]["tmp_name"]));
        
        $respuesta = $producto->registrar();
        
        if($respuesta != false){
            $ultimo = $respuesta->id;
            
            foreach($_POST["id_insumo"] as $key => $value){
               
                $detalle = new Producto();
                $detalle->__SET("IDProducto",$ultimo);
                $detalle->__SET("IDInsumo", $value);
                $detalle->__SET("Cantidadi", $_POST["cant"][$key]);

                $respuesta = $detalle->registrarDetalle();  

                //descontar insumos
                $ins = $value;
                $cantidad = $_POST["cant"][$key];
                $insumo = new Insumo();
                $insumo->descontar($ins, $cantidad);              
                  
                try{
                    if($respuesta = true){
                        $_SESSION["registro"] = "Registro exitoso";
                    }else{
                      $_SESSION["registro"] = "Error de registro";
                    }
                }catch(\Excepetion $e){
                    $_SESSION["registro"] = $e->getMessage();
                }   
            }
            
        }

        
        header('location: ' . URL . 'producto/index');
    }     

    public function editar($idproducto)
    {
        if (isset($idproducto)) {
            
            $insumo = new Insumo();            
            $producto = new Producto(); 
            $lista = new Producto();  
                  
            $producto = $producto->obtenerProducto($idproducto);
            $lista = $lista->obtenerInsumos($idproducto);                
            $insumosx = $insumo->listadoInsumos();

            $objeto = new Insumo();
            $insumos = $objeto->listadoInsumosS(); 
           
            require APP . 'view/_templates/header.php';
            require APP . 'view/producto/editar.php';
            require APP . 'view/_templates/footer.php';
        } else {
            
            header('location: ' . URL . 'producto/index');
        }
    }   
   

    public function eliminarDetalle($iddetalle)
    {
       $detalle = new Producto();
       $detalle = $detalle->eliminarDetalle($iddetalle);

    }

    public function actualizar()
    {   
        session_start();
        $foto = $_FILES['foto']["tmp_name"];
        if($foto != null){
            $producto = new Producto();
            $producto->__SET("Nombre", $_POST["nombre"]);
            $producto->__SET("Cantidad", $_POST["cantidad"]);
            $producto->__SET("Precio", $_POST["precio"]);
            $producto->__SET("Tipo", $_POST["tipo"]);
            $producto->__SET("Estado", $_POST["estado"]);
            $producto->__SET("Foto", file_get_contents($_FILES["foto"]["tmp_name"]));
            $producto->__SET("IDProducto", $_POST["idproducto"]);        
            $producto->actualizar(); 

        } else{
            $producto = new Producto();
            $producto->__SET("Nombre", $_POST["nombre"]);
            $producto->__SET("Cantidad", $_POST["cantidad"]);
            $producto->__SET("Precio", $_POST["precio"]);
            $producto->__SET("Tipo", $_POST["tipo"]);
            $producto->__SET("Estado", $_POST["estado"]);        
            $producto->__SET("IDProducto", $_POST["idproducto"]);        
            $producto->actualizarF(); 
        }
            
        foreach($_POST["id_insumo"] as $key => $value){
            
            $detalle = new Producto();
            $detalle->__SET("IDProducto",$_POST["idproducto"]);
            $detalle->__SET("IDInsumo", $value);
            $detalle->__SET("Cantidadi", $_POST["cant"][$key]);
            
            $respuesta = $detalle->registrarDetalle();

            //descontar insumos
            /*$ins = $value;
            $cantidad = $_POST["cant"][$key];
            $insumo = new Insumo();
            $insumo->descontar($ins, $cantidad);    */ 
        }

        try{
            if($respuesta = true){
                $_SESSION["editar"] = "Datos actualizados correctamente";
            }else{
              $_SESSION["editar"] = "Error de de actualizacion";
            }
        }catch(\Excepetion $e){
            $_SESSION["editar"] = $e->getMessage();
        }

   
        header('location: ' . URL . 'producto/index');
    }
  
}


  
