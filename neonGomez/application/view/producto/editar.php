<div class="container card mt-2 " style="width: 68rem;">
    <h1 class="text-center">Editar producto <?= $producto->Nombre?></h1>
    <hr>

    <form action="<?= URL ?>producto/actualizar" method="POST"  id="editarproductos" enctype="multipart/form-data">
    <input type="hidden" name="idproducto" value="<?php echo ($producto->IDProducto); ?>" />
        <div class="form-row">    
            <div class="form-group col-4">
                <label for="nombre">Nombre </label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo ($producto->Nombre); ?>">
            </div>

            <div class="form-group col-4">
            <label for="apellido">Cantidad</label>
            <input type="number" class="form-control" id="apellido" name="cantidad" value="<?php echo ($producto->Cantidad); ?>">
            </div> 

            <div class="form-group col-4">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" value="<?php echo ($producto->Precio); ?>">
            </div>             
        </div>    

        <div class="form-row">                
            <div class="form-group col-md-4">
                <label for="tipo">Tipo De Aviso</label>
                <select name="tipo" class="form-control">
                    <option><?php echo ($producto->Tipo); ?></option>
                    <option  value="Neon">Neon</option>
                    <option  value="Acrilico">Acrilico</option>
                </select>
            </div>  

            <div class="form-group col-md-4">
                    <label for>Estado</label>
                    <select name="estado" class="form-control">
                        <option><?php echo ($producto->Estado); ?></option>
                        <option  value="Activo">Activo</option>
                        <option  value="Inactivo">Inactivo</option>
                    </select>
            </div>       
        </div>        

        <div class="mt-4">
            <label for="foto">Imagen</label>           
            <input type="file" name="foto"  value="<img width="80" src="data:image/jpeg;base64,<?php echo base64_encode($producto->Foto);?>"> 
            <!-- <td><img width="30" src="data:image/jpeg;base64,<?php echo base64_encode($producto->Foto);?>"</td>  -->
            <img width="30" src="data:image/jpeg;base64,<?php echo base64_encode($producto->Foto);?>">        
        </div>         

        <!-- insumos -->
        <div class="mt-3 target">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="insumos">Insumos</label>
                    <select class="form-control"  id="id_insumo" name="id_insumo"> 
                    <option value="">Seleccione</option>                      
                    <?php foreach ($insumosx as $datos): ?> 
                        <option value="<?= $datos->IDInsumo ?>"><?=$datos->Nombre?></option>
                    <?php endforeach  ?>
                    </select>
                    </select>                    
                </div>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cantidadi">Cantidad</label>
                        <input type="number"  class="form-control" id="cant" name="cant">                    
                    </div>
                </div>

                <!-- <div>
                <button class="btn btn-info boton" type="button" onclick="agregarInsumos()">Agregar insumo</button>
                </div> -->

            </div>

            <button class="btn btn-info boton" type="button" onclick="agregarInsumos()">Agregar insumo</button>


            <div class="row ">
                <div class="col-md-4 mt-4 ml-2 mb-2 card">
                    <div class="widget">
                        <div class="widget-content">
                            <table id="tabla_insumos" class="table ">
                                <thead>
                                    <tr>
                                        <th>Insumo</th>
                                        <th>Cantidad</th>
                                        <th>Opciones</th>                                      
                                    </tr>
                                </thead>
                                <tbody>                              
                                <tr>
                                    <?php foreach ($lista as $datos){ ?>
                                        <tr id=<?= $datos->IDDetalle ?>>                
                                            <td><?= $datos->Nombre ?> </td>                                        
                                            <td><?= $datos->Cantidadi ?></td>                                         
                                            
                                            <td><input class="btn btn-danger" value="Eliminar" type="button" onclick='eliminarDetalle("<?php echo ($datos->IDDetalle); ?>")'></td>
                                        </tr>
                                    <?php } ?>   
                                </tr>                                  
                                    
                                </tbody>
                            </table>   
                        </div>
                    </div> 
                </div>
            </div>        
            
            <div class="mb-4">
                <button  type="submit" class="btn btn-info">Guardar</button> 
                <a class="btn btn-secondary" href="<?php echo URL; ?>producto/index">Cancelar</a>
            </div>  
        </div>
        

    </form>
</div >