<div class="container card mt-2 " style="width: 68rem;">
    <h1 class="text-center">Registro de productos</h1>
    <hr>

    <form action="<?php echo URL; ?>producto/guardar" method="POST" id="formularioproductos" enctype="multipart/form-data">

    <div class="form-row">    
            <div class="form-group col-4">
                <label for="nombre">Nombre </label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>

            <div class="form-group col-4">
            <label for="cantidad">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad">
            </div>   

            <div class="form-group col-4">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio">
            </div>         
        </div>    

        <div class="form-row">             
            <div class="form-group col-md-4">
                <label for>Tipo De Aviso</label>
                <select name="tipo" class="form-control" id="tipo">
                    <option value="">Seleccione</option>
                    <option  value="Neon">Neon</option>
                    <option  value="Acrilico">Acrilico</option>
                </select>
            </div>   

            <div class="form-group col-md-4">
                    <label for>Estado</label>
                    <select name="estado" class="form-control" id="estado">
                        <option value="">Seleccione</option>
                        <option  value="Activo">Activo</option>
                        <option  value="Inactivo">Inactivo</option>
                    </select>
            </div> 

                         
        </div>
        
        <div class="mt-4">
            <label for="foto">Imagen</label>           
            <input type="file" name="foto" id="foto">            
        </div>        
      

        <div class="target mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="insumos">Insumos</label>
                    <select class="form-control"  id="id_insumo" name="id_insumo"> 
                    <option value="">Seleccione</option>                      
                    <?php foreach ($insumos0 as $datos): ?> 
                        <option value="<?= $datos->IDInsumo ?>"><?=$datos->Nombre?></option>
                    <?php endforeach  ?>
                    </select>
                    </select>                    
                </div>

                </div>
                <div class="col-md-4">
                    <div class="form-group ">
                        <label for="cantidadi">Cantidad</label>
                        <input type="number"  class="form-control" id="cant" name="cant">
                    </div>
                </div>
            </div>

            <button class="btn btn-info mb-2" type="button" onclick="agregarInsumos()">Agregar insumo</button> 


            <div class="row">
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

                                </tbody>
                            </table>   
                        </div>
                    </div> 
                </div>
            </div>        
            


        <div class="mb-4">
        <button  type="submit" class="btn btn-info">Registrar</button> 
        <a class="btn btn-secondary" href="<?php echo URL; ?>producto/index">Cancelar</a>
        </div> 
     
        </div>
        
    </form>
</div>













