
<?php  if ($_SESSION['errores']=="noexiste"){?>

    <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Recuperar</title>
    

    <link rel="stylesheet" href="<?= URL ?>public/css/cssrecuperar/estilos.css">
    <link rel="stylesheet" href="public/css/cssrecuperar/font-awesome.css">

    <script src="<?= URL ?>public/js/jsrecuperar/jquery-3.2.1.js"></script>
    <script src="<?= URL ?>public/js/jsrecuperar/script.js"></script>
   
</head>
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                
                <h2>NEÓN GÓMEZ</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
            </section>
        </section>

        <form action="<?php echo URL ?>Recuperar/Buscar" method="POST" class="form_contact">
            <h2 style="text-transform: uppercase;" >Confirme su correo o usuario de inicio </h2>
            <div class="user_info">
                

                <label for="email">Correo electronico *</label>
                <input type="text" id="nel" id="correo" name="correo" required>


                <input type="submit" value="Envíar" id="btnSend">
            </div>
        </form>

    </section>

</body>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script> 
     
    
        <script>
           

           swal({
              icon: "warning",
              title: "Usuario no registrado en el sistema :(",
  
            }).then(function (result) {
  
              window.location = "http://localhost/neonGomez/Recuperar/Buscar";
  
            })


        </script>

</html>

    
  



<?php }?>






