<h1 class="text-center mt-4">Gestión de Ventas</h1>

<div class="container">
        <a href="<?php echo URL; ?>venta/registro" class="btn btn-info mb-2">Agregar</a>
        <table class="table table-striped border tablas">
            <thead >
            <tr>
                <td>IDVenta</td>
                <td>Fecha</td>
                <td>Cliente</td>
                <td>Estado</td>
                
                <td></td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($ventas as $venta) { ?>
                <tr>                
                    <td><?php echo($venta->IDVenta); ?></td>
                    <td><?php echo($venta->Fecha); ?></td>
                    <td><?php echo($venta->Nombre." ".$venta->Apellido); ?></td>
                    <td>
                        <span data-key="usu" class="badge badge-danger"><?php if($venta->Estado=="Inactivo"){echo($venta->Estado);};?></span>
                        <span data-key="usu" class="badge badge-success"><?php if($venta->Estado=="Activo"){echo($venta->Estado);};?></span>
                    
                    </td>
                    
                    <td><a href="<?php echo URL . 'venta/buscar/' . htmlspecialchars($venta->IDVenta, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-info">Editar</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>        
        
    </div>
</div>

      

</div>