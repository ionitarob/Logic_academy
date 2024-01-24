<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$usuario' AND contrasena = '$contrasena'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        echo "Inicio de sesión exitoso";
    } else {
        echo "Inicio de sesión fallido. Verifica tu nombre de usuario y contraseña.";
    }
} else {
    echo "Acceso no autorizado.";
}

$conn->close();
?>

