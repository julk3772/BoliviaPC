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
    });
    //Eliminar un registro
    $('.borrar_registro').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        var tipo = $(this).attr('data-tipo');
        swal({
            title:'Estas seguro?',
            text: "Se borrara el siguiente registro",
            type:'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, borralo!',
            cancelButtonText: 'Cancelar'
        }).then(function () {
                $.ajax({
                    type:'post',
                    data: {
                        'id': id,
                        'registro' : 'eliminar'
                    },
                    url: 'modelo-'+tipo+'.php',
                    success:function(data) {
                        var resultado = JSON.parse(data);
                        if(resultado.respuesta == 'exito') {
                            swal(
                                'Eliminado!',
                                'Registro Eliminado.',
                                'success'
                            )
                            jQuery('[data-id="'+ resultado.id_eliminado +'"]').parents('tr').remove();
                        } else {
                            swal(
                                'Error!',
                                'No se pudo eliminar',
                                'error'
                            )
                        }                        
                    }
        });
    });
    
});