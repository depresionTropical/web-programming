<?php
  require '../server/secure.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel Administrativo</title>
  <link rel="stylesheet" href="../asset/style.css">
  <link rel="stylesheet" href="../asset/panel.css">
  <link rel="stylesheet" href="../asset/user.css">
</head>
<script>
    function validateForm() {
        var selectedType = document.getElementById("type").value;
        if (selectedType === "0") {
            alert("Por favor, selecciona un tipo de usuario");
            return false;
        }
        return true; 
    }
</script>

<body>
  <?php
  $title = 'PANEL ADMINISTRATIVO';
  include '../components/header.php';
  ?>

  <div class=" basic container">
    <?php include '../components/panel.php'; ?>
    <div class="content">
      <?php
      $titleUser = 'AlTA USUARIOS';
      include '../components/title.php';
      ?>
      <div class="form">
        <form action="../server/setUser.php" method="POST" onsubmit="return validateForm()">
          <input class="input-user" type="text" name="user" id="user" placeholder="Nombre de usuario">
          <input class="input-user" type="password" name="password" id="password" placeholder="Contraseña">
          <select class="input-user" name="type" id="type" value="">
            <option value="0" selected disabled hidden>Selecciona tipo</option>
            <option value="1">Administrador</option>
            <option value="2">Usuario</option>
          </select>
          <input class="btn-ginda input-user" type="submit" value="Guardar usuario">
        </form>
      </div>

    </div>
  </div>

</body>

</html>