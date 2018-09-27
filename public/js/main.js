$("#form-contacto").on('submit', function(evt) {
    evt.preventDefault();
    
    let nombre = $('#nombre').val();
    let email = $('#email').val();
    let compania = $('#compania').val();
    let mensaje = $('#mensaje').val();
    let data =  {
        nombre: nombre,
        email: email,
        compania: compania,
        mensaje: mensaje
    };
    console.log(data);
    $.ajax({
        type: "POST",
        url: './api/mensaje',
        data: data,
        success: function(data, status) {
            console.log(data);
        },
        error: function(err) {

        }
    });
});