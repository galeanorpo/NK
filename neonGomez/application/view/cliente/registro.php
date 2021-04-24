<div class="container card mt-2" style="width: 68rem;">
    <h1 class="text-center">Registro de clientes</h1>
    <hr>

    <form action="<?php echo URL; ?>cliente/guardar" method="POST" id="formularioClientes"> 
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="ID">Documento</label>            
                <input type="number" class="form-control" id="documento" name="documento" >
            </div>

            <div class="form-group col-4">
                <label for="Nombre">Nombre </label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>

            <div class="form-group col-4">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>

            
        </div>

        <div class="form-row">
            <div class="form-group col-4">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" >
            </div>

            <div class="form-group col-md-4">
                <label for="contraseña">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
            </div>

            <div class="form-group col-md-4">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono">
            </div>    
        </div>        

        <div class="form-row">            
            <div class="form-group col-md-4">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control" >
                    <option value="">Seleccione</option>
                    <option  value="Activo">Activo</option>
                    <option  value="Inactivo">Inactivo</option>
                </select>
            </div>
        </div>
        <div class="mb-4">
            <input type="submit" name="agregarcliente" class="btn btn-info" value="Registrar "/>         
            <a class="btn btn-secondary" href="<?php echo URL; ?>cliente/index"> Cancelar</a>
        </div>

    </form>
</div>  


