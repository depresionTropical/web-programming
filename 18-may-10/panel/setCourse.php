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
    var courseName = document.getElementById("courseName").value;
    var professor = document.getElementById("professor").value;
    var courseDuration = document.getElementById("courseDuration").value;
    var schedule = document.getElementById("schedule").value;
    var days = document.querySelector('input[name="days"]:checked');
    var courseDescription = document.getElementById("courseDescription").value;

    if (courseName === "" || professor === "" || courseDuration === "0" || schedule === "0" || days === null || courseDescription === "") {
      alert("Por favor, llena todos los campos");
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
      $titleUser = 'ALTA CURSOS';
      include '../components/title.php';
      ?>
      <div class="form">
        <form action="../server/setCourse.php" method="GET" onsubmit="return validateForm()">
          <input class="input-user" type="text" name="courseName" id="courseName" placeholder="Nombre de curso">
          <input class="input-user" type="text" name="professor" id="professor" placeholder="Nombre docente">
          <select class="input-user" name="courseDuration" id="courseDuration" value="0">
            <option value="0" selected disabled hidden>Número de horas</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
            <option value="60">60</option>
          </select>

          <select class="input-user" name="schedule" id="schedule" value="0">
            <option value="0" selected disabled hidden>Horario del curso</option>
            <option value="Matutino">Matutino (8:00 - 13:00 hrs.)</option>
            <option value="Vespertino">Vespertino (14:00 - 20:00 hrs.)</option>
            <option value="Nocturno">Nocturno (17:00 - 22:00 hrs.)</option>
          </select>

          <h3 class="days-course">Días del curso</h3>
          <div class="days-container">
            <div class="days">
              <input type="radio" name="days" id="one" value="Lunes, Miércoles y Viernes">
              <label for="one">Lunes, Miércoles y Viernes</label>
            </div>
            <div class="days">
              <input type="radio" name="days" id="two" value="Martes, Jueves y Sábado">
              <label for="two">Martes, Jueves y Sábado</label>
            </div>
            <div class="days">
              <input type="radio" name="days" id="three" value="Sólo Sábados">
              <label for="three">Sólo Sábados</label>
            </div>
          </div>
          <textarea class="input-user" type="text" name="courseDescription" id="courseDescription" placeholder="Objetivo del curso"></textarea>
          <input class="btn-ginda input-user" type="submit" value="Guardar usuario">
        </form>
      </div>
    </div>
  </div>
</body>
</html>