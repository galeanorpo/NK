<?php 

namespace Mini\Model;

use Mini\Core\Model;
use Mini\Libs\Helper;

class Usuario extends Model
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


    public function listarUsuario()
    {   
        $sql = "SELECT * FROM usuario";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();

    }

    public function registrar($documento,$nombre, $apellido, $correo, $rol ,$telefono ,$estado,$contra)
    {
        $sql = "INSERT INTO usuario ( Documento, Nombre, Apellido, Correo, Contrasena, 
        Telefono, Rol, Estado ) VALUES (:Documento, :Nombre, :Apellido, :Correo, :Contrasena, :Telefono, 
        :Rol, :Estado)";
        $query = $this->db->prepare($sql);
        $parameters = array(':Documento' => $documento, ':Nombre' => $nombre, ':Apellido' => $apellido,
        ':Correo' => $correo, ':Contrasena'=>$contra, ':Telefono' => $telefono, ':Rol'=>$rol,
        ':Estado' => $estado);        
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }

    public function obtenerUsuarios($idusuario)
    {
        $sql = "SELECT * FROM usuario WHERE IDUsuario = :IDUsuario LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':IDUsuario' => $idusuario);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function obtenerUsuariologin($correo)
    {
        $sql = "SELECT IDUsuario, Correo, Contrasena, Rol, Nombre, Apellido, Estado, Foto, Documento, Telefono FROM usuario WHERE Correo = :Correo LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':Correo' => $correo);
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
        return $query->fetch();
    }


    public function actualizar($documento,$nombre, $apellido, $correo, $telefono, $rol, $estado, $idusuario)
    {
        $sql = "UPDATE usuario SET Documento = :Documento, Nombre = :Nombre, Apellido = :Apellido, Correo = :Correo,
        Telefono = :Telefono, Rol = :Rol, Estado = :Estado WHERE IDUsuario = :IDUsuario";
        $query = $this->db->prepare($sql);
        $parameters = array(':Documento' => $documento, ':Nombre' => $nombre, ':Apellido' => $apellido, ':Correo' => $correo,
        ':Rol' => $rol, ':Telefono' => $telefono, ':Estado' => $estado, ':IDUsuario' => $idusuario);
                
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }
    
    public function actualizarFoto($foto, $id)
    {
        $sql = "UPDATE usuario SET Foto = :Foto WHERE IDUsuario = :IDUsuario";
        $query = $this->db->prepare($sql);
        $parameters = array(':Foto' => $foto, ':IDUsuario' => $id);
                
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    public function actualizarContra($contra, $id)
    {
        $sql = "UPDATE usuario SET  Contrasena = :Contrasena
        WHERE IDUsuario = :IDUsuario";
        $query = $this->db->prepare($sql);
        $parameters = array(':Contrasena' => $contra, ':IDUsuario' => $id);
                
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }
    public function actualizarClave($contra, $id)
    {
        $sql = "UPDATE usuario SET  Contrasena = :Contrasena
        WHERE IDUsuario = :IDUsuario";
        $query = $this->db->prepare($sql);
        $parameters = array(':Contrasena' => $contra, ':IDUsuario' => $id);
                
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    public function traerCorreo($correo){

        $sql = "SELECT * FROM usuario WHERE Correo = :Correo LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':Correo' => $correo);
        $query->execute($parameters);
        return $query->fetch();

    }
}


?>