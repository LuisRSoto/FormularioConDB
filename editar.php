<!DOCTYPE html>
<html>
<head>
  <title>Editar Usuario</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="navbar">
    <a href="index.php">Inicio</a>
    <a href="registro.php">Registro</a>
  </div>

  <h1>Editar Usuario</h1>

  <?php
  // Conexión a la base de datos
  include 'conexion.php'; 

  // Obtener ID del usuario a editar
  $id = $_GET["id"];

  // Consulta SQL para obtener datos del usuario
  $sql = "SELECT * FROM datos WHERE id = $id";
  $result = $conn->query($sql);

  // Mostrar formulario con los datos del usuario
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  ?>

  <form action="actualizar_datos.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

    <button type="submit">Actualizar</button>
  </form>

  <?php
  } else {
    echo "Usuario no encontrado.";
  }

  // Cerrar la conexión
  $conn->close();
  ?>

</body>
</html>