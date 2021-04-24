<?php 

namespace Mini\Model;

use Mini\Core\Model;
use Mini\Libs\Helper;

class Producto extends Model
{
    private $IDProducto;
    private $Nombre;
    private $Cantidad;
    private $Precio;
    private $Tipo;
    private $Estado;
    private $Foto;
    private $IDDetalle;
    private $IDInsumo;
    private $Cantidadi;    

    
    public function __SET($attr,$val)
    {
        $this->$attr = $val;
    }

    public function __GET($attr)
    {
        return $this->$attr;
    }

    public function listarProductos()
    {
        $sql = "SELECT * FROM producto_terminado";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetchAll();
    }   


    public function listaractivos()
    {
        $sql = "SELECT * FROM producto_terminado WHERE Estado = 'Activo'";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetchAll();
    }   

    public function listadoProductos()
    {  
        $sql = "SELECT * FROM producto_terminado WHERE Estado = 'Activo' ORDER by IDProducto DESC";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetchAll();
    }
        
    public function ultimo()
    {    
        $sql = "SELECT max(IDProducto) as id FROM producto_terminado";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetch();

    }

    public function registrar()
    {
        $sql = "INSERT INTO producto_terminado (Nombre, Cantidad, Precio, Tipo, Estado, Foto) VALUES (?,?,?,?,?,?)";
        $stm = $this->db->prepare($sql);        
        $stm->bindParam(1, $this->Nombre);
        $stm->bindParam(2, $this->Cantidad);
        $stm->bindParam(3, $this->Precio);
        $stm->bindParam(4, $this->Tipo);
        $stm->bindParam(5, $this->Estado);
        $stm->bindParam(6, $this->Foto);        
        
        if($stm->execute()){
            return $this->ultimo(); 
        }else{
            return false;
        }
    }  
   

    public function registrarDetalle()
    {
        $sql = "INSERT INTO detalle_producto (IDProducto, IDInsumo, Cantidadi) VALUES (?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->IDProducto);
        $stm->bindParam(2, $this->IDInsumo);
        $stm->bindParam(3, $this->Cantidadi);      
        $stm->execute();           
        
    }       

    public function obtenerProducto($idproducto)
    { 
        $sql = "SELECT * FROM producto_terminado WHERE IDProducto = $idproducto LIMIT 1";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetch();
    
    }

    public function obtenerInsumos($idproducto)
    {
        $sql = "SELECT producto_terminado.Nombre, producto_terminado.Cantidad, producto_terminado.Precio, producto_terminado.Tipo, 
        producto_terminado.Estado, producto_terminado.Foto,detalle_producto.IDDetalle,detalle_producto.IDProducto, 
        detalle_producto.IDInsumo, detalle_producto.Cantidadi, insumo.IDInsumo, insumo.Nombre 
        FROM detalle_producto 
        INNER JOIN producto_terminado ON detalle_producto.IDProducto = producto_terminado.IDProducto 
        INNER JOIN insumo ON detalle_producto.IDInsumo = insumo.IDInsumo 
        WHERE producto_terminado.IDProducto = $idproducto"; 
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetchAll();
    }
    

    public function eliminarDetalle($iddetalle)
    {
        $sql = "DELETE FROM detalle_producto WHERE IDDetalle = $iddetalle";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        
    }

    public function actualizar()
    {
        $sql = "UPDATE producto_terminado SET Nombre = ?, Cantidad = ?, Precio = ?, Tipo = ?,
        Estado = ?, Foto = ? WHERE IDProducto = ?";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->Nombre);
       $stm->bindParam(2, $this->Cantidad);
       $stm->bindParam(3, $this->Precio);
       $stm->bindParam(4, $this->Tipo);
       $stm->bindParam(5, $this->Estado);
       $stm->bindParam(6, $this->Foto);  
       $stm->bindParam(7, $this->IDProducto);     
       $stm->execute();
    }

    public function actualizarF()
    {
        $sql = "UPDATE producto_terminado SET Nombre = ?, Cantidad = ?, Precio = ?, Tipo = ?,
        Estado = ? WHERE IDProducto = ?";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->Nombre);
       $stm->bindParam(2, $this->Cantidad);
       $stm->bindParam(3, $this->Precio);
       $stm->bindParam(4, $this->Tipo);
       $stm->bindParam(5, $this->Estado);        
       $stm->bindParam(6, $this->IDProducto);     
       $stm->execute();
    }
    
}



