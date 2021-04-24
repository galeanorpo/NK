<?php 

namespace Mini\Controller;

use Mini\Model\Recuperar;

class Recuperarcontroller{

    public function index()
    {
        
        require APP . 'view/usuario/login/actualizarcontra/index.php'; 
    }

    
    public function Buscar()
    {
        session_start();
        if(isset($_POST['correo'])){

            $correo=$_POST['correo'];

            $recupera = new Recuperar();
            $_SESSION['valida']=$usuario = $recupera->obtenerUsuario1($correo);

            if($_SESSION['valida']==null){
                 
                $_SESSION['errores']="noexiste";
                require APP . 'view/usuario/login/actualizarcontra/validation.php';
            }
            $_SESSION['errores']="siexiste";
            require APP . 'view/usuario/login/actualizarcontra/preguntas.php';

        }
        else{

            require APP . 'view/usuario/login/actualizarcontra/index.php';
        }
       
    }

    public function traer(){

        $correo=$_POST['correo'];
        $docu=$_POST['docu'];
        $apellido=$_POST['apellido'];
        $tel=$_POST['tel'];
         
        $recupera = new Recuperar();
        $_SESSION['valida']=$usuario = $recupera->obtenerUsuario1($correo);
        
        if ($docu==$_SESSION['valida']->Documento && $apellido==$_SESSION['valida']->Apellido && $tel==$_SESSION['valida']->Telefono) {

            require APP . 'view/usuario/login/actualizarcontra/mensaje.php';
            
        }
        else{
            $_SESSION['lol']="no";

            require APP . 'view/usuario/login/actualizarcontra/validationp.php';
        }

    }

    public function actualizarcontra()
    {
            $id = $_POST['id'];

            $recupera = new Recuperar();
            $_SESSION['valida']=$usuario = $recupera->obtenerUsuario($id);
        
        // if we have POST data to create a new song entry
        if ($_POST["contra1"]==$_POST['contra2']) {

            $correo=$_POST['correo'];
            $id = $_POST['id'];

            $recupera = new Recuperar();
            $_SESSION['valida']=$usuario = $recupera->obtenerUsuario($id);

            $contra2 = $_POST['contra2'];
            $encriptada = password_verify($contra2, $usuario->Contrasena);

            if ($encriptada != true) {

                $contra = $_POST['contra2'];
                $contrasena = password_hash($contra, PASSWORD_DEFAULT);
               
           
            
            
                $usuario = new Recuperar();
                $usuario->actualizar($contrasena,$id);

                unset($_SESSION['valida']);

                require APP . 'view/usuario/login/recuperarcontra/notificaciones.php'; 
                
            }
            else{
                $_SESSION['nula']="no";
                   
               
                require APP . 'view/usuario/login/actualizarcontra/mensaje.php'; 

            }
            
            

           
        }
        else{

            $_SESSION['nula1']="noc";

            
            require APP . 'view/usuario/login/actualizarcontra/mensaje.php'; 

        }

       
    }


}