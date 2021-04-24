<?php 

namespace Mini\Model;

use Mini\Core\Model;
use Mini\Libs\Helper;

class Recuperar extends Model
{
    private $IDUsuario;
	private $Documento;
    private $Nombre;
    private $Apellido;
    private $Correo;
    private $Contrasena;
    private $Telefono;
    private $Rol;
    private $Estado;



    public function obtenerUsuario1($correo)
    {
        $sql = "SELECT * FROM usuario WHERE Correo = :Correo LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':Correo' => $correo);
        $query->execute($parameters);
        return $query->fetch();
    }
    public function obtenerUsuario($id)
    {
        $sql = "SELECT * FROM usuario WHERE IDUsuario= :IDUsuario LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':IDUsuario' => $id);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function actualizar($contra, $id)
    {
        $sql = "UPDATE usuario SET  Contrasena = :Contrasena
        WHERE IDUsuario = :IDUsuario";
        $query = $this->db->prepare($sql);
        $parameters = array(':Contrasena' => $contra, ':IDUsuario' => $id);
                
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }
}


?>