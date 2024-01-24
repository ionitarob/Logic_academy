// login.js
function iniciarSesion() {
    var usuario = document.getElementById('usuario').value;
    var contrasena = document.getElementById('contrasena').value;
  
    if (usuario && contrasena) {
      // Enviar datos a través de AJAX
      $.post("autenticar.php", { usuario: usuario, contrasena: contrasena }, function (respuesta) {
        if (respuesta === "Inicio de sesión exitoso") {
          // Redirigir a Dashboard.html si las credenciales son correctas
          window.location.href = "Dashboard.html";
        } else {
          // Mostrar alerta si las credenciales son incorrectas
          alert(respuesta);
        }
      });
    } else {
      alert("Por favor, ingrese nombre de usuario y contraseña.");
    }
  }
  
