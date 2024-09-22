<?php

require "conexion.php";

$carreras = $_POST['carreras'];
$semestre = $_POST['semestre'];
$materias = $_POST['materias'];
$comentarios = $_POST['comentarios'];

// echo $carreras . "<br>";
// echo $semestre . "<br>";
// echo $materias . "<br>";
// echo $comentarios . "<br>";

$insertar = "INSERT INTO registros (carreras, semestre, materias, comentarios) VALUES ('$carreras', '$semestre','$materias','$comentarios')";


$query = mysqli_query($conectar, $insertar);


if ($query) {
  echo '
<script>
  alert("SI SE GUARDARO LOS DATOS CORRECTAMENTE");
  location.href="index.php";
</script>
';
} else {
  echo '
<script>
  alert("NO SE GUARDO EN LA BASE DE DATOS");
  location.href="registrar.php";
</script>
';
}
