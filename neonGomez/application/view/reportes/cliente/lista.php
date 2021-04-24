<style>  

table{
    width: 100%;
    border: 2px;
}

td{
    border: -1px;
}


</style>

    

<h1>Lista de clientes</h1>

<table>
    <thead >
        <tr>
            <td>Documento</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>Estado</td>             
        </tr>
    </thead>    
    <tbody>    
        <?php foreach ($clientes as $cliente) { ?>
            <tr>                
                <td><?php echo ($cliente->Documento); ?></td>
                <td><?php echo ($cliente->Nombre); ?></td>
                <td><?php echo ($cliente->Apellido); ?></td>
                <td><?php echo ($cliente->Correo); ?></td>
                <td><?php echo ($cliente->Direccion); ?></td>
                <td><?php echo ($cliente->Telefono); ?></td>
                <td><?php echo ($cliente->Estado); ?></td>
                      
            
            </tr>
            <?php } ?>
        </tbody>
</table>        










