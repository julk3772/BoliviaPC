$(document).ready(function() {
    $('#crear_registro').attr('disabled', true);
    $('#repetir_password').on('input', function() {
        var password_nuevo = $('#password').val();
        if($(this).val() == password_nuevo) {
            $('#resultado_password').text('Correcto');
            $('#resultado_password').parents('.form-group').addClass('has-success').removeClass('has-error');
            $('input#password').parents('.form-group').addClass('has-success').removeClass('has-error');
            $('#crear_registro').attr('disabled', false);
        } else {
            $('#resultado_password').text('No son iguales!');
            $('#resultado_password').parents('.form-group').addClass('has-error').removeClass('has-success');
            $('input#password').parents('.form-group').addClass('has-error').removeClass('has-success');
        }
    });

});
