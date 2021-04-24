<div class="container card mt-3" style="width: 68rem">
<h1 class="text-center " >Editar usuario <?= $usuarios->Nombre?></h1>

    <hr>  
    <form action="<?php echo URL; ?>usuario/actualizar" method="POST" > 
    <input type="hidden" name="idusuario" value="<?php echo htmlspecialchars($usuarios->IDUsuario, ENT_QUOTES, 'UTF-8'); ?>" />
        <div class="form-row mt-3">
            <div class="form-group col-md-4">
                <label for="ID">Documento</label>            
                <input type="text" class="form-control" id="ID" name="documento" value="<?php echo htmlspecialchars($usuarios->Documento, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group col-4">
                <label for="Nombre">Nombre </label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($usuarios->Nombre, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group col-4">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo htmlspecialchars($usuarios->Apellido, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-4">
                <label for="correo">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" value="<?php echo htmlspecialchars($usuarios->Correo, ENT_QUOTES, 'UTF-8'); ?>">
            </div>    

            <div class="form-group col-md-4">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo htmlspecialchars($usuarios->Telefono, ENT_QUOTES, 'UTF-8'); ?>">
            </div> 

            <div class="form-group col-md-4">
                <label for>Rol</label>
                <select name="rol" class="form-control">
                    <option><?php echo htmlspecialchars($usuarios->Rol, ENT_QUOTES, 'UTF-8'); ?></option>
                    <option  value="Administrador">Administrador</option>
                    <option  value="Empleado">Empleado</option>
                </select>
            </div>    
        </div>

        <div class="form-row mt-3"> 
            <div class="form-group col-md-4">
                    <label for>Estado</label>
                    <select name="estado" class="form-control">
                        <option><?php echo htmlspecialchars($usuarios->Estado, ENT_QUOTES, 'UTF-8'); ?></option>
                        <option  value="Activo">Activo</option>
                        <option  value="Inactivo">Inactivo</option>
                    </select>
            </div>    
        </div>
            

        <input type="submit" name="editarusuario" class="btn btn-info mt-3 mb-3" value="Guardar "/>        
        <a class="btn btn-secondary mt-3 mb-3" href="<?php echo URL; ?>usuario/index"> Cancelar</a>

    </form>
</div> 