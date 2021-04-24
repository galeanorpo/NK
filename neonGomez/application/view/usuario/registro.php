<div class="container card mt-3"style="width: 68rem;">
    <h1 class="text-center mt-4">Registro de Usuarios</h1>
    <hr>

    <form action="<?php echo URL; ?>usuario/guardar" method="POST" > 
        <div class="form-row ml-4 mt-3">
            <div class="form-group col-md-4">
                <label for="ID">Documento</label>            
                <input type="text" class="form-control" id="ID" name="documento" >
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

        <div class="form-row ml-4  mt-3">
            <div class="form-group col-4">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" >
            </div>
           
            <div class="form-group col-md-4">
                <label for="contraseña">Contraseña</label>
                <input type="password" class="form-control" id="contra" name="contra">
           </div>

           <div class="form-group col-md-4 ">
                <label for>Rol</label>
                <select name="rol" class="form-control">
                    <option>Seleccione</option>
                    <option  value="Administrador">Administrador</option>
                    <option  value="Empleado">Empleado</option>
                </select>
            </div>
        </div>
      


        <div class="form-row ml-4 mt-3">   
           

            <div class="form-group col-md-4">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
            </div>              

            <div class="form-group col-md-4">
                <label for>Estado</label>
                <select name="estado" class="form-control">
                    <option>Seleccione</option>
                    <option  value="Activo">Activo</option>
                    <option  value="Inactivo">Inactivo</option>
                </select>
            </div>
            </div>

        <input type="submit" name="agregarusuario" class="btn btn-info ml-4 mt-3 mb-3" value="Registrar "/>         
        <a class="btn btn-secondary mt-3 ml-3 mb-3" href="<?php echo URL; ?>usuario/index"> Cancelar</a>

    </form>
</div>  