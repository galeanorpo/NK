

<?php

  


$errores = [];

if(!empty($_POST)){
 
    //nombre

    if (empty($_POST['usuario'])) {
        $errores['usu']='El Usuario es requerido';
        
    }
    elseif (strlen($_POST['usuario'])<5) {
        $errores['usu']='El Usuario debe Contener minimo 5 caracteres';
    }

    if (empty($_POST['contra'])) {
        $errores['contra']='La contraseña Es Requerida';

    }
    elseif (strlen($_POST['contra'])<6) {
        $errores['contra']='La Contraseña debe contener Minimo 6 caracteres';

    }
   

    

}


echo json_encode([
    'respuesta'=>count($errores)===0,
    'error'=>$errores
]);



?>