<?php

require 'conexion.php';

$name = $_POST['name'];
$email = $_POST['email'];
$user = $_POST['user'];
$password = $_POST['password'];

$sql = "INSERT INTO user (name, email, user, password) VALUES ('$name', '$email', '$user', '$password')";

$query = mysqli_query($conn, $sql);

if ($query) {
  echo '
  <script>
    alert("Usuario registrado correctamente");
    window.location = "register-user.php";
  </script>';
} else {
  echo '
  <script>
    alert("Error al registrar usuario");
    window.location = "register-user.php";
  </script>';
}