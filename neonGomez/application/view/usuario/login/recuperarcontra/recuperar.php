<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar</title>
    <link rel="icon" type="image/x-icon" href="<?= URL ?>public/img/login/logo.png" />
    <link rel="stylesheet" type="text/css" href="<?= URL?>public/css/login/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    
</head>
<body>
    <img class="wave" src="<?= URL ?>public/img/login/wave.png">
    
    <div class="container">
        <div class="img">
      
            <img src="<?= URL ?>public/img/login/logo.png">
           
        </div>
        
        <div class="login-container">
        
            <form action="<?php echo URL ?>usuario/Email" id="formulario" method="POST">
                <img height=100 width=100  class="avatar" src="<?= URL ?>public/img/login/avatar_male.svg">
                <h2>¿recuperamos ?</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Usuario</h5>
                        <input class="input" type="text" id="usuario" name="Correo"  >
                    </div>
                
                </div>
                <div>
                    <p type="text" id="p2"></p>
                </div>
             
                <a href="<?= URL?>usuario/Login">Regresar</a>
                <input type="submit" name="recuperarusuario" class="btn btn-success" value="Enviar "/>
            </form>
        </div>
        
    </div>
    
    <script type="text/javascript" src="<?= URL?>public/js/login/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script> 
    
    
        <script>
           

            $(document).ready(function(){


            var form = $("#formulario");


            form.submit(function(){

                var usuario = ($("#usuario").val());
                
                var falsa="";
                

                if (usuario=="") {
                    falsa=false;

                    $("#p2").text("completa el campo correo y sin espacios");
            
                    $("#usuario").focus();
        
                }
                if (usuario!="") {
                    
                    if (usuario.length<17) {
                        falsa=false;
                       
                        $("#p2").text("El correo requiere minimo 17 caracteres");
            
                        $("#usuario").focus();
                    
                    }
                
                    
                }

                
                
 
   

                return falsa ;

            });


            });

        </script>
    
   
</body>
</html>