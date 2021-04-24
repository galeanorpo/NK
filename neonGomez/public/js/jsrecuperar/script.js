$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';

        // Validado contra1 ==============================
        if( $('#contra1').val() == '' ){
            errores += '<p>Escriba una contraseña </p>';
            $('#contra1').css("border-bottom-color", "#F14B4B")
        } else{
            $('#contra1').css("border-bottom-color", "#d1d1d1")
        }

        // Validado contra2 ==============================
        if( $('#contra2').val() == '' ){
            errores += '<p>Rectifique su contraseña</p>';
            $('#contra2').css("border-bottom-color", "#F14B4B")
        } else{
            $('#contra2').css("border-bottom-color", "#d1d1d1")
        }

        // ENVIANDO MENSAJE ============================
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
