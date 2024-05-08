<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$host = "localhost";
$usuario = "root";
$contrasena = "admin1234";
$basedatos = "form-user";

$conn = mysqli_connect($host, $usuario, $contrasena, $basedatos);

if (!$conn) {
  echo "No se pudo conectar con el servidor";
}
