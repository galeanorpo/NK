<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Confirmation</title>
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

</html>