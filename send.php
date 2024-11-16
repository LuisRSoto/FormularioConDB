<?php
// Incluir archivo de conexión
include 'conexion.php';

// Procesar datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    // Validar que los campos no estén vacíos
    if (!empty($nombre) && !empty($correo) && !empty($telefono)) {
        // Preparar e insertar datos en la base de datos
        $sql = "INSERT INTO usuarios (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";
        if ($conn->query($sql) === TRUE) {
            $responseMessage = "Registro exitoso.";
        } else {
            $responseMessage = "Error al guardar los datos: " . $conn->error;
        }
    } else {
        $responseMessage = "Por favor, completa todos los campos.";
    }

    // Cerrar conexión
    $conn->close();

    // Redirigir de vuelta a index.php con un mensaje
    header("Location: index.php?message=" . urlencode($responseMessage));
    exit();
}
?>