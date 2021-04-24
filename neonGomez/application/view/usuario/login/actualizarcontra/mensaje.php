
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Actualizar datos</title>
        
            <link rel="stylesheet" href="<?= URL ?>public/css/cssrecuperar/estilos.css">
            <link rel="stylesheet" href="<?= URL ?>public/css/cssrecuperar/font-awesome.css">
        
            <script src="<?= URL ?>public/js/jsrecuperar/jquery-3.2.1.js"></script>
            <script src="<?= URL ?>public/js/jsrecuperar/script.js"></script>
        </head>
        
        <body>
        
            <section class="form_wrap">

              

               <?php  if ( $_SESSION['valida']->Estado=="Activo") {?>

                <section class="cantact_info">
                    <section class="info_title">
                        <span class="fa fa-user-circle"></span>
                        <h2>INFORMACIÓN<br>DE </h2>
                        <h2 class="text-center"> <?= $usuario->Nombre?><?php echo" "?><?= $usuario->Apellido?></h2>
                        
                    </section>
                    <section class="info_items">
                        <p><span class="fa fa-envelope"></span> <?= $usuario->Correo?> </p>
                        <p><span class="fa fa-mobile"></span> <?= $usuario->Telefono?> </p>
                    </section>
                </section>

               <?php } ?>
               <?php if ( $_SESSION['valida']->Estado=="Inactivo") {?>

                <section class="cantact_info">
                    <section class="info_title">
                        <span class="fa fa-user-circle"></span>
                        <h2>USUARIO INACTIVO <br> :(</h2>
                        
        
                    </section>
                    <section class="info_items">
                        <p><span class="fa fa-envelope"></span> <?= $usuario->Correo?> </p>
                        <p><span class="fa fa-mobile"></span> <?= $usuario->Telefono?> </p>
                   </section>
                </section>

                <?php } ?>

                <?php if ($_SESSION['valida']->Estado=="Activo"){ ?>
        
                <form action="<?php echo URL?>Recuperar/actualizarcontra" method="post" class="form_contact">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($usuario->IDUsuario, ENT_QUOTES, 'UTF-8'); ?>" />
                    <input type="hidden" name="correo" value="<?php echo htmlspecialchars($usuario->Correo, ENT_QUOTES, 'UTF-8'); ?>" />
                    <h2>Actualiza tus datos <?= $usuario->Nombre?> </h2>
                    <div class="user_info">

                        <label for="names">Su Rol</label>
                        <input type="text" id="correo" name="rol" disabled="" value="<?php echo htmlspecialchars($usuario->Rol, ENT_QUOTES, 'UTF-8'); ?>"  required>

                        <label for="names">Su documento</label>
                        <input type="text" id="documento" name="documento" disabled="" value="<?php echo htmlspecialchars($usuario->Documento, ENT_QUOTES, 'UTF-8'); ?>" required>
                    
                        <label for="names">Su estado</label>
                        <input type="text" id="estado" name="estado" disabled="" value="<?php echo htmlspecialchars($usuario->Estado, ENT_QUOTES, 'UTF-8'); ?>" required>

                        <label for="names">Ingrese su nueva contraseña</label>
                        <input type="text" id="contra1" name="contra1" value="" required>

                        <label for="names">Confirme su contraseña</label>
                        <input type="text" id="contra2" name="contra2" value="" required>
        
                        <input type="submit" value="Actualizar" id="btnSend">
                        
                    </div>
                    
                </form>

                <?php } ?>


                <?php if ($_SESSION['valida']->Estado=="Inactivo"){ ?>
        
                <form action="#" method="post" class="form_contact">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($usuario->IDUsuario, ENT_QUOTES, 'UTF-8'); ?>" />
                    <input type="hidden" name="correo" value="<?php echo htmlspecialchars($usuario->Correo, ENT_QUOTES, 'UTF-8'); ?>" />
                    <h2>No puedes actualizar tu contraseña <?= $usuario->Nombre?> :(</h2>
                    <div class="user_info">

                        <label for="names">Su Rol</label>
                        <input type="text" id="correo" name="rol" disabled="" value="<?php echo htmlspecialchars($usuario->Rol, ENT_QUOTES, 'UTF-8'); ?>"  required>

                        <label for="names">Su documento</label>
                        <input type="text" id="documento" name="documento" disabled="" value="<?php echo htmlspecialchars($usuario->Documento, ENT_QUOTES, 'UTF-8'); ?>" required>
            
                        <label for="names">Su estado</label>
                        <input type="text" id="estado" name="estado" disabled="" value="<?php echo htmlspecialchars($usuario->Estado, ENT_QUOTES, 'UTF-8'); ?>" required>

                        <div>
                            <span data-key="usu" class="badge badge-danger text-center" >Lo sentimos los usuarios inactivos son ignorados por el sistema </span>
                        </div>
                        <div>
                            <span data-key="usu" class="badge badge-danger text-center" >Cumuniquese con el administrador </span>
                        </div>

                
                    </div>
            
                </form>

               <?php } ?>
            
            </section>
        
        </body>

        
            <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script> 
     
    
        <script>
           <?php if($_SESSION['nula'] != null){?>

           swal({
              icon: "error",    
              title: "La contraseña ya está habil como tu contraseña",
            }).then(function (result) {
  
             
  
            })

            <?php $_SESSION['nula'] = null; }?>
        </script>
    
        

        
            <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script> 
     
    
        <script>
           <?php if($_SESSION['nula1'] != null){?>

           swal({
              icon: "error",
              title: "La contraseñas no coinciden :)",
  
            }).then(function (result) {
  
             
  
            })
            <?php $_SESSION['nula1'] = null; }?>

        </script>

        
        
        
        </html>

