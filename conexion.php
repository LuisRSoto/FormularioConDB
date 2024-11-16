<?php
// Credenciales de la base de datos
$servername = "fdb1028.awardspace.net:3306";
$username = "4552110_data";
$password = "MuaPLxDVkcP68HB";
$dbname = "4552110_data";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>