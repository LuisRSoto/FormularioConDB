<!DOCTYPE html>
<html>
<head>
  <title>Inicio</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="navbar">
    <a href="index.php">Inicio</a>
    <a href="registro.php">Registro</a>
  </div>

  <h1>Datos de los Usuarios</h1>

  <?php
  // Conexión a la base de datos
  include 'conexion.php'; 

  // Consulta SQL para obtener los datos
  $sql = "SELECT * FROM datos";
  $result = $conn->query($sql);

  // Mostrar los datos en una tabla
  if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["nombre"] . "</td>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>";
      echo "<a href='editar.php?id=" . $row["id"] . "' class='btn-editar'>Editar</a>";
      echo "<a href='eliminar.php?id=" . $row["id"] . "' class='btn-eliminar'>Eliminar</a>";
      echo "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "No hay datos disponibles.";
  }

  // Cerrar la conexión
  $conn->close();
  ?>

</body>
</html>