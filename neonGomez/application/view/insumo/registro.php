<div class="container card mt-3"style="width: 68rem;">
    <h1 class="text-center mt-4">Registro de Insumos</h1>
    <hr>

    <form action="<?php echo URL; ?>insumo/guardar" method="POST" > 
        <div class="form-row mt-3">
            <div class="form-group col-md-4">
                <label for="codigo">Nombre</label>            
                <input type="text" class="form-control" id="codigo" required name="nombre" >
            </div>

            <div class="form-group col-4">
                <label for="Nombre">Cantidad </label>
                <input type="text" class="form-control" id="nombre" required name="cantidad">
            </div>

            <div class="form-group  col-md-4">
                <label for>Estado</label>
                <select name="estado" class="form-control">
                    <option>Seleccione</option>
                    <option  value="Activo">Activo</option>
                    <option  value="Inactivo">Inactivo</option>
                </select>
            </div>
        </div>

        



        <input type="submit" name="agregarInsumo" class="btn btn-info mt-3 mb-3" value="Registrar "/>         
        <a class="btn btn-secondary mt-3 mb-3" href="<?php echo URL; ?>insumo/index"> Cancelar</a>
    </form>
</div> 