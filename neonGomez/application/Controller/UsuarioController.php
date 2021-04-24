<?php 

namespace Mini\Controller;

use Mini\Model\Usuario;
use Mini\Model\Insumo;
use sweetalert2;

class Usuariocontroller{


    public function login()
    {
        
        require APP . 'view/home/login.php'; 
    }
    public function Recuperar()
    {
        
        require APP . 'view/usuario/login/recuperarcontra/recuperar.php'; 
    }
   
    public function validarLogin()  
    {
        

        session_start();

        if (!empty($_POST["usuario"]) || !empty($_SESSION['contra'])) {

            $correo=$_POST['usuario'];
            $contra=$_POST['contra'];

            $usuario = new Usuario();     
                   
            $usuarios = $usuario->obtenerUsuariologin($correo);
            $_SESSION['valor']=$usuarios;

            if ($_SESSION['valor']!=null) {
                $encriptada = password_verify($contra, $usuarios->Contrasena);

                if($encriptada != true){

                    $_SESSION['error']="falso"; 
                    require APP . 'view/home/prueba.php';
    
                }
                else if($_SESSION['valor']->Estado=="Inactivo"){
    
                    $_SESSION['error']="Inactivo";
                    require APP . 'view/home/prueba.php';
                }
                else{
                    
                    $objeto = new Insumo();
                    $insumos = $objeto->listadoInsumosS(); 

                    require APP . 'view/_templates/header.php';
                    require APP . 'view/home/index.php';
                    require APP . 'view/_templates/footer.php';
                   
                }
                
            }else{

                $_SESSION['error']="no";
                require APP . 'view/home/prueba.php';
                
            }
            
  
                       
        }
        
         
    }

    public function Email()
    { 
        $correo = $_POST["Correo"];
        
        $objeto = new Usuario();
        $correo = $objeto->traerCorreo($correo);
        if($correo == null){


            $_SESSION['nel']="no";
            require APP . 'view/usuario/login/recuperarcontra/validation.php';

        }
        elseif($correo->Estado=="Inactivo"){

            $_SESSION['nel']="ina";
            require APP . 'view/usuario/login/recuperarcontra/validation.php';

        }
        else{

            require APP . 'view/usuario/login/recuperarcontra/enviar.php';
            
        }  
       
      
    }

    public function validationExito(){

        $_SESSION['lleva']="exito";

        require APP . 'view/usuario/login/recuperarcontra/validation.php';

    }

    public function validationFailed(){

        $_SESSION['lleva']="failed";

        require APP . 'view/usuario/login/recuperarcontra/validation.php';

    }

    public function  salir (){
        $objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 

        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function perfil(){
   
        
        $usuario = new Usuario();
        $usuarios = $usuario->listarUsuario();
        
        require APP . 'view/usuario/perfil.php';
       
    }

    public function CerrarSesion(){
        session_start();
        
        unset($_SESSION['valor']);
        header('location: ' . URL . 'home/index');
    }

    public function index(){

        $usuario = new Usuario();
        $usuarios = $usuario->listarUsuario();
        
        $objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 

        require APP . 'view/_templates/header.php';
        require APP . 'view/usuario/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registro()
    {
        $objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 

        require APP . 'view/_templates/header.php';
        require APP . 'view/usuario/registro.php';
        require APP . 'view/_templates/footer.php';
    }

    public function guardar()
    {
        if (isset($_POST["agregarusuario"])) {
           

            //encriptar la contraseña
            $contra = $_POST["contra"];
            $contrasena = password_hash($contra, PASSWORD_DEFAULT);
            
            $usuario = new Usuario();
            $usuario->registrar($_POST["documento"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["rol"],$_POST["telefono"],$_POST["estado"],$contrasena);
        }
                
        header('location: ' . URL . 'usuario/index');
    }

    public function editar($idusuario)
    {        
        if (isset($idusuario)) {
            
            $usuario = new Usuario();            
            $usuarios = $usuario->obtenerUsuarios($idusuario);

            $objeto = new Insumo();
            $insumos = $objeto->listadoInsumosS(); 
           
            require APP . 'view/_templates/header.php';
            require APP . 'view/usuario/editar.php';
            require APP . 'view/_templates/footer.php';
        } else {
            
            header('location: ' . URL . 'usuario/index');
        }
    }

    public function actualizar()
    {
        
        if (isset($_POST["editarusuario"])) {
            
            $usuario = new Usuario();
            $usuario->actualizar($_POST["documento"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["rol"],$_POST["estado"],$_POST["idusuario"]);
        }
     
        // where to go after song has been added
        header('location: ' . URL . 'usuario/index');
    }

    public function agregarFoto(){

        
       $_SESSION['foto']=$_FILES["foto"]["tmp_name"];
         
        if($_SESSION['foto']==null){

            echo '<script>alert("Seleccione su futo de perfil (Click en el boton seleccionar archivo) ")</script>';

            echo"<script>setTimeout(\"location.href='http://localhost/neonGomez/usuario/perfil'\",100)</script>";
        }    
        else {

           $foto = file_get_contents($_FILES["foto"]["tmp_name"]);
           $id = $_POST['id'];
           $usuario = new Usuario();
           $usuario->actualizarFoto($foto, $id);

           
           echo '<script>alert("Su foto de perfil se actualizó con exito\nPara notar el cambio inicie sesión de nuevo")</script>';
           echo"<script>setTimeout(\"location.href='http://localhost/neonGomez/usuario/perfil'\",100)</script>";
        }
        

    } 

    public function cambiodeClave(){
        
      

        if ($_POST["contra1"]==$_POST['contra2']) {

            $id=$_POST['id'];
            $contra2 = $_POST['contra2'];

            $recupera = new Usuario();
            $_SESSION['valida']=$usuario = $recupera->obtenerUsuarios($id);

            $encriptada = password_verify($contra2,  $_SESSION['valida']->Contrasena);

            if ($encriptada != true) {

                $contra = $_POST['contra2'];
                $contrasena = password_hash($contra, PASSWORD_DEFAULT);
           
            
            
                $usuario = new Usuario();
                $usuario->actualizarClave($contrasena,$id);

                unset($_SESSION['valida']);

                echo '<script>alert("cambio exitoso")</script>';
                echo"<script>setTimeout(\"location.href='http://localhost/neonGomez/usuario/perfil'\",100)</script>";
                
            }
            else{
                   
                echo '<script>alert("la contraseña ingresada ya está habil como tu contraseña")</script>';
                echo"<script>setTimeout(\"location.href='http://localhost/neonGomez/usuario/perfil'\",100)</script>";

            }
            
            

           
        }
        else{

            echo '<script>alert("las contraseñas ingresadas no coinciden ")</script>';
            echo"<script>setTimeout(\"location.href='http://localhost/neonGomez/usuario/perfil'\",100)</script>";
            

        }



    }


}