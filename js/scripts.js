// Add Your Scripts here
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Seleccionar el formulario para validar
      var forms = document.getElementsByClassName('needs-validation');
      // Validar cada campo y prevenir que se envie
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();            
          }else{
            // tener valor4ewss del formulario
            var nombre = document.getElementById('nommbre').Value,
                email = document.getElementById('email').Value,
                mensaje = document.getElementById('mensaje').Value;
            // ejecutar ajax
            var xhr = new XMLHttpRequest();

            //abrir la conexion
            xhr.open('POST', 'http://localhost/panpaulamacul/inc/enviar.php', true);

            //se debe agregar un header
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            //revisar el estado
            xhr.onload =function(){
                if(xhr.status === 200){
                  var respuesta =JSON.parse(xhr.responseText);
                  console.log(respuesta);
                  if(respuesta.respuesta === true) {
                    var div = document.createElement('div');
                    div.appendChild(document.createTextNode('Se envio correctamente'));
                    div.classList.add('alert', 'alert-success', 'mt-4', 'text-center');
                    document.querySelector('form').appendChild(div);
                    setTimeout(function() {
                        document.querySelector('.alert').remove();
                    }, 3000);                   
                  }
                }
            }
            // Enviat el request
            xhr.send('nombre='+nombre+'&email='+email+'&mensaje='+mensaje);

          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();