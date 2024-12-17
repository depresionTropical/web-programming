<?php require './server/secure.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel administrativo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <?php 
    $title = ', admin';
  include 'component/header.php'; ?>
  <div class=" basic panel__container">
    <?php include './component/panel.php'; ?>
    <div class="content">
      <h3>Página de inicio del panel</h3>
      <div class="image-div">
        <img src="../img/food.jpg" alt="Panel">
      </div>
    </div>
  </div>
</body>
</html>