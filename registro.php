<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="navbar">
    <a href="index.php">Inicio</a>
    <a href="registro.php">Registro</a>
  </div>

  <h1>Formulario de Registro</h1>

  <form action="guardar_datos.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <button type="submit">Guardar</button>
  </form>

</body>
</html>