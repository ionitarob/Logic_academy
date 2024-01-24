<?php
$servername = "srv1304.hstgr.io";  // Puedes cambiarlo según tu configuración
$username = "u238258299_Parzivald";
$password = "Alejandro124?";
$dbname = "u238258299_LogicDB";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
echo "Conexion exitosa";

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
