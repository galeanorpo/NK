<div class="container card mt-2" style="width: 68rem;">
<h1 class="text-center">Editar compra con el ID # <?= $compras->IDCompra?></h1>
    <hr>

    <form action="<?php echo URL; ?>compra/actualizar" method="POST"  enctype="multipart/form-data">
    <input type="hidden" name="idcompra" value="<?php echo ($compras->IDCompra); ?>" />
        <div class="form-row">
            <div class="form-group col-4">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo ($compras->Fecha); ?>">
            </div>

            <!--Proveedores-->
            <div class="form-group col-md-4">
                <div class="form-group">
                    <label for="idproveedor">Proveedor</label>
                    <select class="form-control"  id="idproveedor" name="idproveedor">  
                    <option value="<?php echo($compras->IDProveedor);?>"><?php echo($compras->Nombre);?></option>                   
                    <?php foreach ($proveedores as $datos): ?>
                        <option value="<?php echo $datos->IDProveedor ?>"><?=$datos->Nombre?></option>
                    <?php endforeach  ?>
                    </select>
                    </select>          
                </div>
            </div>  

            <div class="form-group col-md-4">
                <label for>Estado</label>
                <select name="estado" class="form-control">
                    <option><?php echo htmlspecialchars($compras->Estado); ?></option>
                    <option  value="Activo">Activo</option>
                    <option  value="Inactivo">Inactivo</option>
                </select>
            </div>
        </div>        

        <!--Insumos-->
        <div class="target mt-3">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="insumos">Insumos</label>
                    <select class="form-control"  id="id_insumo" name="id_insumo">
                    <option>Seleccione</option>
                    <?php foreach ($insumos as $datos): ?>
                        <option value="<?= $datos->IDInsumo ?>"><?=$datos->Nombre?></option>
                    <?php endforeach  ?>
                    </select>
                    </select>
                </div>
            </div> 

                <div class="form-group col-md-4">
                    <label for="precio">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio">
                </div>   

                <div class="form-group col-md-4">
                    <label for="cant">Cantidad</label>
                    <input type="number" class="form-control" id="cant" name="cant">
                </div>             
            </div>
                
            <button class="btn btn-info mb-2" type="button" onclick="agregarInsumosc()">Agregar Insumos</button>


            <div class="row">
                <div class="col-md-6 mt-4 ml-2 mb-2 border">
                    <div class="widget">
                        <div class="widget-content">
                            <table id="tabla_insumos" class="table ">
                                <thead>
                                    <tr>
                                        <th>Insumo</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>SubTotal</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php foreach ($lista as $datos){ ?>
                                        <tr id=<?= $datos->IDDetalle ?>>                 
                                            <td><?= $datos->Nombre ?> </td>                                     
                                            <td><?= $datos->Cantidad ?></td> 
                                            <td><?= $datos->Precio ?></td>  
                                            <td><?= $datos->Subtotal ?></td>  

                                          <td><input class="btn btn-danger" value="Eliminar" type="button" onclick='eliminarDetallec("<?php echo ($datos->IDDetalle); ?>")'></td>
                                        </tr>
                                    <?php } ?>  
                                </tr>
                                </tbody>
                            </table>
                            <p><b>Total Compra: </b><span id="valorTotal"></span></p>
                        </div>
                    </div>
                </div>
            </div>

        <div>
        <div class="mb-4">
            <button  type="submit" class="btn btn-info mt-3">Guardar</button> 
            <a class="btn btn-secondary mt-3" href="<?php echo URL; ?>compra/index"> Cancelar</a>
        </div>
        </div>
        </div>

    </form>
</div>
