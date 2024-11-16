<?php
// Conexión a la base de datos
include 'conexion.php';

// Obtener datos del formulario
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];

// Consulta SQL para actualizar datos
$sql = "UPDATE datos SET nombre='$nombre', email='$email' WHERE id=$id";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
  header("Location: index.php");
  exit;
} else {
  echo "Error al actualizar los datos: " . $conn->error;
  header("Location: editar.php?id=$id");
  exit;
}

// Cerrar la conexión
$conn->close();
?>