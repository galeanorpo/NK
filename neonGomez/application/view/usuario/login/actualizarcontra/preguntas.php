



    <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Preguntas</title>
    <link rel="icon" type="image/x-icon" href="<?= URL ?>public/img/login/logo.png" />


    <link rel="stylesheet" href="<?= URL ?>public/css/cssrecuperar/estilos.css">
    <link rel="stylesheet" href="public/css/cssrecuperar/font-awesome.css">

    <script src="<?= URL ?>public/js/jsrecuperar/jquery-3.2.1.js"></script>
    <script src="<?= URL ?>public/js/jsrecuperar/script.js"></script>
   
</head>
<body>

    <section class="form_wrap">

        <section class="cantact_info">
        
            <section class="info_title">
                
                
                <br>
                
                <img width="200" height="160" class=" img-profile rounded-circle" 
                
                
                
                  <?php if($usuario->Foto!=null){ ?>
                
                   height="160" width="200" src="data:image/jpeg;base64,<?php  echo base64_encode($usuario->Foto);?>"

                  <?php } ?> 
            
                  <?php if($usuario->Foto==null){?>

                  height="160" width="200" src="<?= URL ?>public/img/perfil/nulo.jpg"
            
                  <?php } ?> 
                
                
                
                
                />

            </section>
        </section>

        <form action="<?php echo URL ?>Recuperar/traer" method="POST" class="form_contact">
            <h2 style="text-transform: uppercase;" ><?= $usuario->Nombre?><?php echo""?>, Confirmanos tus datos</h2>
            <div class="user_info">
                
                <input type="hidden" name="correo" value="<?= $usuario->Correo?>"/>

                <label for="email">¿Cuál es tu numero de documento?</label>
                <input type="text" id="nel" id="correo" name="docu" required>

                <label for="email">¿Cuál es tu apellido?</label>
                <input type="text" id="nel" id="correo" name="apellido" required>

                <label for="email">¿Cuál es tu numero de telefono?</label>
                <input type="text" id="nel" id="correo" name="tel" required>


                <input type="submit" value="Responder" id="btnSend">
            </div>
        </form>

    </section>

</body>

    
         </html>


  
        
        
       



