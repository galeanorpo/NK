<?php 

namespace Mini\Model;

use Mini\Core\Model;
use Mini\Libs\Helper;

class Insumo extends Model
{
    private $IDInsumo;
    private $Nombre;
    private $Cantidad;
    private $Estado;

    
    public function __SET($attr,$val)
    {
        $this->$attr = $val;
    }

    public function __GET($attr)
    {
        return $this->$attr;
    }

    public function listadoInsumos()
    {
        $sql = "SELECT * FROM insumo WHERE Estado = 'Activo'";
        $stm= $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetchAll();

    }

    public function listadoInsumosS()
    {
        $sql = "SELECT * FROM insumo WHERE Cantidad <= 1";
        $stm= $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetchAll();

    }

    public function listadoInsumos2()
    {
        $sql = "SELECT * FROM insumo";
        $stm= $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetchAll();

    }

    public function AgregarInsumo($nombre, $cantidad, $estado){

        $sql = "INSERT INTO insumo (Nombre, Cantidad, Estado) VALUES (:Nombre, :Cantidad, :Estado)";
        $query = $this->db->prepare($sql);
        $parameters = array(':Nombre' => $nombre, ':Cantidad' => $cantidad, ':Estado' => $estado);        
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }

    public function obtenerInsumo($id){

        $sql = "SELECT * FROM insumo WHERE IDInsumo = :IDInsumo LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':IDInsumo' => $id);
        $query->execute($parameters);
        return $query->fetch();
        
    }

    public function actualizar($nombre, $cantidad, $estado, $idinsumo)
    {
        $sql = "UPDATE insumo SET Nombre = :Nombre, Cantidad = :Cantidad, Estado = :Estado
         WHERE IDInsumo = :IDInsumo";
        $query = $this->db->prepare($sql);
        $parameters = array(':Nombre' => $nombre, ':Cantidad' => $cantidad, ':Estado' => $estado, ':IDInsumo' => $idinsumo);
                
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }


    public function descontar($ins,$cantidad)
    {
        $sql = "UPDATE insumo SET Cantidad = Cantidad - $cantidad WHERE IDInsumo = $ins";
        $stm= $this->db->prepare($sql);
        $stm->execute();       
    
    }
}


?>  