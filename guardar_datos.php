<?php
// Conexión a la base de datos
include 'conexion.php';

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];

// Consulta SQL para insertar datos
$sql = "INSERT INTO datos (nombre, email) VALUES ('$nombre', '$email')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
  // Redirigir al index si la inserción fue exitosa
  header("Location: index.php");
  exit; // Importante para evitar que se ejecute código adicional
} else {
  // Mostrar el error y redireccionar a registro si la inserción falló
  echo "Error al guardar los datos: " . $conn->error;
  header("Location: registro.php");
  exit;
}

// Cerrar la conexión
$conn->close();
?>