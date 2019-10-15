$(document).ready(function() {
    $('#guardar-registro').on('submit', function(e){
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url:$(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                var resultado = data;
                if(resultado.respuesta == 'exito') {
                    swal(
                        'Correcto',
                        'El administrador se guardo correctamente',
                        'success'
                        )
                } else {
                    swal(
                        'Error',
                        'Hubo un error',
                        'error'
                    ) 
                }
            }
        })
    });
    //Eliminar un registro
    $('.borrar_registro').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        var tipo = $(this).attr(data-tipo);
        $.ajax({
            type:'post',
            data: {
                'id': id,
                'registro' : 'eliminar'
            },
            url: 'modelo-'+tipo+'.php',
            success:function(data) {
                console.log(data);
            }
        });
    });
    $('#login-admin').on('submit', function(e){
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url:$(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                var resultado = data;
                if(resultado.respuesta == 'exitoso') {
                    swal(
                        'Login Correcto',
                        'Bienvenid@'+resultado.usuario+'!!',
                        'success'
                        )
                } else {
                    swal(
                        'Error',
                        'Hubo un error',
                        'error'
                    ) 
                }
            }           
        })
    });
});