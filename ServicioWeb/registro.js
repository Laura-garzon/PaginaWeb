document.getElementById('registro').addEventListener('submit', function(event) {
  event.preventDefault(); // Evita que se envíe el formulario
  
    // Obtener los valores de los campos del formulario
    var nombre = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    var password = document.getElementById('password').value;
    var tipoUsuario = document.getElementById('tipoUsuario').value;
  
  // Crea un objeto con la información del registro
  var registro = {
    nombre: nombre,
    correo: correo,
    password: password,
    tipoUsuario: tipoUsuario
  };
  
  // Envía la información al archivo PHP
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'registro.php', true);
  xhr.setRequestHeader('Content-type', 'application/json');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText); // Muestra la respuesta en la consola
    }
  };
  xhr.send(JSON.stringify(registro));
});