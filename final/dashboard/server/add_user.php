<?php

$user = $_POST['user'];
$password = $_POST['password'];

require "./auth.php";

$consulta = "INSERT INTO user (user, password) VALUES ('$user', '$password')";
$resultado = mysqli_query($conn, $consulta);

if ($resultado) {
  header("Location: ../user.php");
} else {
  echo "Error al añadir usuario";
}
mysqli_close($conn);
?>