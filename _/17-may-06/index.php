<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="basic welcome ">
  <h1>¡Bienvenido!</h1>
  <form action="verify.php" method="post">
    <label for="user">Usuario:</label>
    <input type="text" name="user" id="user">
    <br>
    <label for="contrasena">Contraseña:</label>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit">Iniciar sesión</button>
  </form>
  </div>
</body>
</html>