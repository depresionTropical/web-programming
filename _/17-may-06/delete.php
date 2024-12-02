<?php

include 'conexion.php';

$id = $_GET['id'];

// echo $id;
// exit();

$sql = "DELETE FROM subjets WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
  echo '
  <script>
    alert("Materia eliminada");
    window.location = "table.php";
  </script>';
} else {
  echo '
  <script>
    alert("Error al eliminar la materia");
    window.location = "table.php";
  </script>';
}