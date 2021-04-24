<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Panel</title>
        <link rel="icon" type="image/x-icon" href="<?= URL ?>public/img/login/logo.png" />
        <link href="<?= URL ?>public/css/plantilla/estilos.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>plugins/sweetalert2/dist/sweetalert2.min.css">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
     <?php session_start(); ?> 

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">NEÓN GÓMEZ<img class="mr-5" height=50  src="<?= URL ?>public/img/login/logo.png" > </a>
            
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                    <div class="input-group-append">
                        
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            
            <?php $i=0; foreach($insumos  as $insumo){?>
                           
                <?php if ($insumo->Cantidad <=1) {?>

                   <?php $i++ ?>

                <?php }?>
                

             <?php } ?>
                <?php if($i != 0){?> <font  color=""><h6><span class="badge badge-success"><?php echo($i);?></span></h6></font><?php } ?>
                <?php if($i == 0){?> <font  color="Yellow"><h1>.</h1></font><?php } ?>
            <ul class="navbar-nav ml-auto ml-md-0 mr-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                   
                       <?php if($insumos == null){?>
                            <a class="dropdown-item" href="#">Actualmente no hay notificaciones</a>
                            

                        <?php } ?>

                     <?php if ($insumos!= null) {?>

                       <?php foreach($insumos  as $insumo){?>
                           
                           

                            <?php if ($insumo->Cantidad > 1) {?>

                            <?php $hay = 1; ?>
                     
                               

                            <?php }?>

                            <?php if ($insumo->Cantidad <=1) {?>
                     
                              <a class="dropdown-item" href="<?php echo URL . 'insumo/buscar/' . ($insumo->IDInsumo); ?>"><font color="Black">El insumo <?php  echo($insumo->Nombre); ?>, solo tiene  <?php  echo($insumo->Cantidad); ?> unidad(es) en stock<font></a>
                              <div class="dropdown-divider"></div>

                              <?php $hay = 0; ?>


                            <?php }?>


                        <?php } ?>

                        <font  color="Teal"><h6 class="text-center"> !Ojo¡, las unidades se escasean abastecete :(</h6></font>

                     <?php }?>

                  
                       
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto ml-md-0">
            <font  color="Lime"><h1>.</h1></font>
                <li class="nav-item dropdown mr-2">
                
                    <a class="nav-link dropdown-toggle text-white" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i><img   
                    
                    <?php if($_SESSION['valor']->Foto!=null){?>

                        class="img-fluid img-profile rounded-circle mx-auto " width="60" height="20"  src="data:image/jpeg;base64,<?php echo base64_encode($_SESSION['valor']->Foto);?>" alt="" 

                    <?php } ?>

                    <?php if($_SESSION['valor']->Foto==null){?>
                         
                        class="img-fluid img-profile rounded-circle mx-auto " width="48" height="456"  src="<?= URL ?>public/img/perfil/nulo.jpg" alt="" 

                    <?php } ?>
                    />

                   </i><?php  echo($_SESSION['valor']->Nombre." ".$_SESSION['valor']->Apellido);?></a> 
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        
                        <a class="dropdown-item" href="<?= URL ?>usuario/perfil">Perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo URL ?>usuario/CerrarSesion">Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </nav>

        

        <?php 
        
        
        if($_SESSION['valor']->Rol=="Administrador"){?>

        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                 
                            <a class="nav-link mt-5 " href="<?= URL ?>usuario/index">
                               <div class="sb-nav-link-icon"><i class="fas fa-user"></i> </div>
                                Usuarios
                            </a>

                            <a class="nav-link mt-2" href="<?= URL ?>proveedor/index">
                               <div class="sb-nav-link-icon"><i class="fas fa-truck-loading"></i></div>
                                Proveedores
                           </a>

                            <a class="nav-link mt-2" href="<?= URL ?>insumo/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                                Insumos
                            </a>

                            <a class="nav-link mt-2" href="<?= URL ?>Compra/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Compras
                            </a>

                            <a class="nav-link mt-2" href="<?= URL ?>cliente/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Clientes
                            </a>     

                            <a class="nav-link mt-2" href="<?= URL ?>producto/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-th"></i></div>
                                Producto terminado
                           </a>
                            
                            <a class="nav-link mt-2" href="<?= URL ?>venta/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-tags"></i></div>
                                Ventas
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"></div>
                        
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>

                

        <?php } ?> 

        <?php  //validación de menú según el rol del usuario?>
        <?php
        if($_SESSION['valor']->Rol=="Empleado"){?>




        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            

                       

                           <a class="nav-link mt-5" href="<?= URL ?>proveedor/index">
                              <div class="sb-nav-link-icon"><i class="fas fa-truck-loading"></i></div>
                                  Proveedores
                           </a>

                           <a class="nav-link mt-2" href="<?= URL ?>insumo/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                                 Insumos
                           </a>

                           <a class="nav-link mt-2" href="<?= URL ?>compra/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                 Compras
                           </a>

                           <a class="nav-link mt-2" href="<?= URL ?>cliente/index">
                                  <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                               Clientes
                            </a>     

                            <a class="nav-link mt-2" href="<?= URL ?>producto/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-th"></i></div>
                               Producto terminado
                            </a>
                            
                            <a class="nav-link mt-2 " href="<?= URL ?>venta/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-tags"></i></div>
                                 Ventas
                            </a>

                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"></div>
                        
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>

        <?php } ?>   

        
          