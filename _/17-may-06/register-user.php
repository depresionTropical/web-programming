<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Registrar Usuario</title>
</head>
<body>
  <div class="register-user basic">
    <h1>Registrar Usuario</h1>
    <form action="insert-user.php" method="post">
      <label for="name">Escribe tu nombre completo:</label>
      <input type="text" name="name" id="name">
      <br>
      <label for="email">Escribe tu correo:</label>
      <input type="text" name="email" id="email">
      <br>
      <label for="user">Nombre de usuario:</label>
      <input type="user" name="user" id="user">
      <br>
      <label for="password">Contraseña:</label>
      <input type="password" name="password" id="password">
      <br>
      <button type="submit">Registrar</button>
    </form>
  </div>
</body>
</html>