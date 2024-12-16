<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel Administrativo</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <?php
    // $title = ', admin';
    $title = '';
    include './component/header.php';
  ?>
  <div class="login basic">
    
      <h2>Inicio de sesión</h2>
      <div class="login-container">
      <form action="./server/verify.php" method="POST">
        <input class="input-login" type="text" name="user" id="user" placeholder="Nombre de usuario">
        <input class="input-login" type="password" name="password" id="password" placeholder="Contraseña">
        <input class="btn-red input-login" type="submit" value="Iniciar sesión">
      </form>
    </div>
  </div>
</body>
</html>