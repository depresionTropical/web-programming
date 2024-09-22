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
<body>
  <?php
    $title = 'PANEL ADMINISTRATIVO';
    include '../components/header.php';
  ?>

  <div class=" basic container">
    <?php include '../components/panel.php'; ?>
    <div class="content">
      <?php 
      $titleUser = 'VER CURSOS';
      include '../components/title.php'; 
      ?>
      <table class="table-user">
          <tr>
            <th>Id</th>
            <th>Nombre de curso</th>
            <th>Nombre del docente</th>
            <th>Horas</th>
            <th>Horario del curso</th>
            <th>Días del curso</th>
            <th>Objetivo del curso</th>
            <th>Eliminar</th>
          </tr>
          <?php
            require '../server/getCourse.php';
          ?>
  
      </table>
    </div>
  </div>

</body>
</html>