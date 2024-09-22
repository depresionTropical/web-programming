<?php
$carrera = $_POST['carrera'];
$semestre = $_POST['semestre'];
$materia = $_POST['materia'];
$comentario = $_POST['comentario'];

echo "<h1>Formulario de Carreras</h1>";
echo "<p>Los datos que ingresaste son:</p>";
echo "<ul>";
echo "<li>Carrera: $carrera</li>";
echo "<li>Semestre: $semestre</li>";
echo "<li>Materia: $materia</li>";
echo "<li>Comentario: $comentario</li>";
echo "</ul>";
?>