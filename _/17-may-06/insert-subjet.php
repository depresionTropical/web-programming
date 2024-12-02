<?php


require 'conexion.php';

$carrera = $_POST['carrera'];
$semestre = $_POST['semestre'];
$materia = $_POST['materia'];

$sql = "INSERT INTO subjets (carreer, ingreso, subject) VALUES ('$carrera', '$semestre', '$materia')";



if (mysqli_query($conn, $sql)) {
  echo '
  <script>
    alert("Materia guardada");
    window.location = "page.php";
  </script>';
} else {
  echo '
  <script>
    alert("Error al guardar la materia");
    window.location = "page.php";
  </script>';
}

