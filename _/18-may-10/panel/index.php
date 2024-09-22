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
</head>
<body>
  <?php
    $title = 'PANEL ADMINISTRATIVO';
    include '../components/header.php';
  ?>

  <div class=" basic container">
    <?php include '../components/panel.php'; ?>
    <div class="content">
      <h3>Página de inicio del panel</h3>
      <div class="image-div">
        <img src="../asset/img/panel.png" alt="Panel">
      </div>
    </div>
  </div>

</body>
</html>