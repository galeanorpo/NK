<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="icon" type="image/x-icon" href="<?= URL ?>public/img/login/logo.png" />
    <link rel="stylesheet" type="text/css" href="<?= URL ?>public/css/login/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="https://code.jquery.com/jquery-1.19.3.min.js"></script>
    <script src="<?= URL ?>"></script>
    
</head>
<body>
    <img class="wave" src="<?= URL ?>public/img/login/wave.png">
    <div class="container">
        <div class="img">
            <img src="<?= URL ?>public/img/login/logo.png">
        </div>
        <div class="login-container">
            <form action="<?php echo URL ?>usuario/validarLogin" method="POST" id="formulario" >
                <img class="avatar" src="<?= URL ?>public/img/login/avatar_male.svg">
                <h2>Bienvenido</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Usuario</h5>
                        <input class="input" type="text" name="usuario" id="usuario" >
                        
                    </div>
                   
                </div>
                <div>
                <p id="p1"></p>
                </div>

                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Contraseña</h5>
                        <input class="input" type="password" name="contra" id="contra" >
                        
                    </div>
                </div>
                <div>       
                <p id="p2"></p>
                
                
                </div>
                
                <input type="submit" name="entrar" class="btn btn-success" value="Iniciar "/>
                <a href="<?php echo URL?>usuario/recuperar">¿Olvidaste la contraseña?</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?= URL ?>public/js/login/main.js"></script>
    




<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script> 
<script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script> 

<!--
validacion para mostrar las diferentes alertas para cada error
-->   

<?php if($_SESSION['error']=="falso") {?>
<script>

swal({
  icon: "warning",
  title: "Contraseña incorrecta",
  
}).then(function (result) {
  
    window.location = "http://localhost/neonGomez";
  
})

     
</script>
<?php }?>

<?php if($_SESSION['error']=="Inactivo") {?>
<script>

swal({
  icon: "warning",
  title: "El usuario se encuentra inactivo",
  
}).then(function (result) {
  
    window.location = "http://localhost/neonGomez";
  
})

     
</script>
<?php }?>

<?php if($_SESSION['error']=="no") {?>
<script>

swal({
  icon: "warning",
  title: "Usuario no registrado",
  
}).then(function (result) {
  
    window.location = "http://localhost/neonGomez";
  
})

     
</script>
<?php }?>

</body>
</html>


