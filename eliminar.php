<?php
// Conexión a la base de datos
include 'conexion.php';

// Obtener ID del usuario a eliminar
$id = $_GET["id"];

// Consulta SQL para eliminar datos
$sql = "DELETE FROM datos WHERE id=$id";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
  header("Location: index.php");
  exit;
} else {
  echo "Error al eliminar los datos: " . $conn->error;
  header("Location: index.php");
  exit;
}

// Cerrar la conexión
$conn->close();
?>