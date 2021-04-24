
<div class="container card mt-2" style="width: 68rem;">
<h1 class="text-center">Editar cliente <?= $cliente->Nombre?></h1>
    <hr>  
    <form action="<?php echo URL; ?>cliente/actualizar" method="POST" id="formularioClientes"> 
    <input type="hidden" name="idcliente" value="<?php echo ($cliente->IDCliente); ?>" />
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="ID">Documento</label>            
                <input type="text" class="form-control" id="documento" name="documento" value="<?php echo ($cliente->Documento); ?>">
            </div>

            <div class="form-group col-4">
                <label for="Nombre">Nombre </label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo ($cliente->Nombre); ?>">
            </div>

            <div class="form-group col-4">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo ($cliente->Apellido); ?>">
            </div>             
        </div>

        <div class="form-row">              
        <div class="form-group col-4">
                <label for="correo">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" value="<?php echo ($cliente->Correo); ?>">
            </div> 
                  
            <div class="form-group col-md-4">
                <label for="contraseña">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo ($cliente->Direccion); ?>">
            </div>

            <div class="form-group col-md-4">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo ($cliente->Telefono); ?>">
            </div> 
        </div>        

        <div class="form-row">  
        <div class="form-group col-md-4">
                <label for>Estado</label>
                <select name="estado" class="form-control">
                    <option><?php echo ($cliente->Estado); ?></option>
                    <option  value="Activo">Activo</option>
                    <option  value="Inactivo">Inactivo</option>
                </select>
            </div>
        </div>
    <div class="mb-4">
        <input type="submit" name="editarcliente" class="btn btn-info" value="Guardar "/>        
        <a class="btn btn-secondary" href="<?php echo URL; ?>cliente/index">Cancelar</a>
    </div>
    </form>
</div>  
