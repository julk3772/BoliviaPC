$(document).ready(function() {
    $('#crear_registro_admin').attr('disabled', true);
    $('#repetir_password').on('input', function() {
        var password_nuevo = $('#password').val();
        if($(this).val() == password_nuevo) {
            $('#resultado_password').text('Correcto');
            $('#resultado_password').parents('.form-group').addClass('has-success').removeClass('has-error');
            $('input#password').parents('.form-group').addClass('has-success').removeClass('has-error');
            $('#crear_registro_admin').attr('disabled', false);
        } else {
            $('#resultado_password').text('No son iguales!');
            $('#resultado_password').parents('.form-group').addClass('has-error').removeClass('has-success');
            $('input#password').parents('.form-group').addClass('has-error').removeClass('has-success');
        }
    });

});
//Date picker
$('#fecha').datepicker({
    autoclose: true
  });
//Initialize Select2 Elements
$('.seleccionar').select2() ;
 //Timepicker
 $('.timepicker').timepicker({
    showInputs: false
 });
 //Icono picker
 $('#icono').iconpicker();