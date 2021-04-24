$("#formularioClientes").validate({  
    
    rules: {
        documento: {        
        required: true,
        minlength: 8
    },
    nombre:{
        required: true,        
        minlength: 3
    },
    apellido:{
        required: true,        
        minlength: 3
    },
    correo:{
        required: true,        
        email: true
    },
    direccion:{
        required: true,        
        minlength: 5
    },
    telefono:{
        required: true,        
        minlength: 7,
        number: true
    },
    estado:{
        required: true
    }
},
/*messages:{
    documento: {        
        
        //minlength: 'El documento minimo debe tener 8 caracteres'
    },
}*/
});



$("#formularioproductos").validate({ 

    rules: {
        nombre: {
        
        required: true,
        
    },
    cantidad:{
        required: true,        
        //minlength: 3
    },
    precio:{
        required: true,
        minlength: 4
    },
    tipo:{
        required: true,
    },
    estado:{
        required: true,
    },
    foto:{
        required: true,
    },
    id_insumo:{
        required: true,
    },
    cant:{
        required: true,
        minlength: 1
    }
}
});

$("#editarproductos").validate({ 

    rules: {
        nombre: {
        
        required: true,
        
    },
    cantidad:{
        required: true,        
        //minlength: 3
    },
    precio:{
        required: true,
        minlength: 4
    },
    tipo:{
        required: true,
    },
    estado:{
        required: true,
    },
   
   
}
});