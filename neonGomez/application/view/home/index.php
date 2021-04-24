
<?php if($_SESSION['valor']->Rol=="Administrador"){ ?>
    <div class="container">

      <h1 class="mt-1"> <p> <font  color="Gray"> NEÓN  </font> <font  color="Silver">  GOMEZ </font>  </p> </h1>
      <h3> <font color="Teal">Hola <?php echo($_SESSION['valor']->Nombre." ".$_SESSION['valor']->Apellido);?>, Neón Gómez  te da la bienvenida al portal del administrador</font> </h3>
      <hr>
    
    </div class="mb-5">
<?php } ?>

<?php if($_SESSION['valor']->Rol=="Empleado"){ ?>
    <div class="container">

      <h1 class="mt-3"> <p> <font  color="Gray"> NEÓN  </font> <font color="Silver">  GOMEZ </font>  </p> </h1>
      <h3> <font color="Teal"face="">Hola <?php echo($_SESSION['valor']->Nombre." ".$_SESSION['valor']->Apellido);?>, Neón Gómez  te da la bienvenida al portal de empleados</font> </h3>
      <hr>
    
    </div class="mb-5">
<?php } ?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" height=420 width=50 src="<?= URL ?>public/img/login/logo.png" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" height=420 width=50 src="<?= URL ?>public/img/login/logo.png" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" height=420 src="<?= URL ?>public/img/login/logo.png" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
