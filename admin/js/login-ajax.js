$(document).ready(function() {
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
