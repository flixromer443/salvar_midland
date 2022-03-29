$(function () {
    $.validator.setDefaults({
      
    });
    $('#form1').validate({
      rules: {
         name:{
             required:true,
             minlength:3
         },
         material:{
            required:true,
            minlength:5
        },
        url:{
            required:true,
            minlength:10
        }
      },
      messages: {
        name:{
            required:'Este campo es obligatorio',
            minlength:'El nombre ingresado no es valido'
        },
        material:{
            required:'Este campo es obligatorio',
            minlength:'El apellido ingresado no es valido'
        },
        url:{
            required:'Este campo es obligatorio',
            minlength:'La URL ingresada no es valida'
        },
        
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        $(element).addClass('is-valid')
      }
    });
  });