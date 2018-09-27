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

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}