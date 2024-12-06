<?php
require "./auth.php";
$nombre = $_GET['nombre'];
$repetidor = $_GET['repetidor'];
$semestre = $_GET['semestre'];
$materia = $_GET['materia'];
$matricula= $_GET['matricula'];
$horario =$_GET['horario'];
$carrera =$_GET['carrera'];

$consulta = "INSERT INTO examen.examen (nombre, repetidor, semestre, materia, matricula, horario, carrera) VALUES ('$nombre', '$repetidor', '$semestre', '$materia', '$matricula', '$horario', '$carrera')";

$resultado = mysqli_query($conn, $consulta);

if ($resultado) {
  header("Location: ./form.php");
} else {
  echo "Error al eliminar";
}


?>