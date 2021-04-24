<div class="container card mt-2" style="width: 68rem;">
    <h1 class="text-center mt-4">Registro de compras</h1>
    <hr>

    <form action="<?php echo URL; ?>compra/guardar" method="POST"  enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-4">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
            </div>

            <!--Proveedore-->
            <div class="form-group col-4">
            <label for="idproveedor">Proveedor</label>
            <select class="form-control"  id="idproveedor" name="idproveedor">
                    <option>Seleccione</option>
                    <?php foreach ($proveedores as $datos): ?>
                        <option value="<?= $datos->IDProveedor ?>"><?=$datos->Nombre?></option>
                    <?php endforeach  ?>
                    </select>
                    </select>
            </div>

            <div class="form-group col-md-4">
                <label for>Estado</label>
                <select name="estado" class="form-control" id="estado">
                    <option>Seleccione</option>
                    <option  value="Activo">Activo</option>
                    <option  value="Inactivo">Inactivo</option>
                </select>
            </div>
        </div>        
        <!-- <button class="btn btn-info" type="button" onclick="agregarInsumos()">+</button> -->

        <!-- Insumos -->
        <div class="target mt-3">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="insumos">Insumos</label>
                    <select class="form-control"  id="id_insumo" name="id_insumo">
                    <option>Seleccione</option>
                    <?php foreach ($insumos3 as $datos): ?>
                        <option value="<?= $datos->IDInsumo ?>"><?=$datos->Nombre?></option>
                    <?php endforeach  ?>
                    </select>
                    </select>
                </div>

            </div>
                        
                <div class="form-group col-md-4">
                <label for="cant">Cantidad</label>
                <input type="number" class="form-control" id="cant" name="cant">
                </div>

                <div class="form-group col-md-4">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio">
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
