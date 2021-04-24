<div class="container card mt-3" style="width: 68rem">
<h1 class="text-center mt-3">Editar proveedor <?= $proveedor->Nombre?></h1>
    <hr>  
    <form action="<?php echo URL; ?>proveedor/actualizar" method="POST" > 
    <input type="hidden" name="idproveedor" value="<?php echo htmlspecialchars($proveedor->IDProveedor, ENT_QUOTES, 'UTF-8'); ?>" />
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="codigo">Codigo</label>            
                <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo htmlspecialchars($proveedor->Codigo, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group col-4">
                <label for="nombre">Nombre </label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($proveedor->Nombre, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group col-4">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo htmlspecialchars($proveedor->Telefono, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
        </div>
        

        <div class="form-row">
            <div class="form-group col-4">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo htmlspecialchars($proveedor->Direccion, ENT_QUOTES, 'UTF-8'); ?>">
            </div> 

            <div class="form-group col-md-4">
                    <label for="correo">Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo" value="<?php echo htmlspecialchars($proveedor->Correo, ENT_QUOTES, 'UTF-8'); ?>">
            </div> 

            <div class="form-group col-md-4">
                <label for>Estado</label>
                <select name="estado" class="form-control">
                    <option><?php echo htmlspecialchars($proveedor->Estado, ENT_QUOTES, 'UTF-8'); ?></option>
                    <option  value="Activo">Activo</option>
                    <option  value="Inactivo">Inactivo</option>
                </select>
            </div>
        </div>
        <div class="mb-4">
        <input type="submit" name="editarProveedor" class="btn btn-info mt-3" value="Guardar "/>        
        <a class="btn btn-secondary mt-3" href="<?php echo URL; ?>proveedor/index"> Cancelar</a>
        </div>
    </form>
</div>  
