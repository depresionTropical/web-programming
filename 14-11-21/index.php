<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>validacion</title>
  <link rel="stylesheet" href="./asset/style.css">  
</head>
<body>
  <h1>Ejercicio 1</h1>
  <form action="validacion.php" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido">
    <label for="edad">Edad</label>
    <input type="number" name="edad" id="edad">
    <input type="submit" value="Enviar">
  </form>
</body>
</html>