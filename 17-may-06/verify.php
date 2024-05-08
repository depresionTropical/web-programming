<?php

require 'conexion.php';

$user = $_POST['user'];
$password = $_POST['password'];

$compare = "SELECT * FROM user WHERE user = '$user' AND password = '$password'";
$result = mysqli_query($conn, $compare);

if(mysqli_num_rows($result) > 0){
  session_start();
  $_SESSION['user'] = $user;
  header('Location: ./page.php');



} else {
  echo'
  <script>
    alert("Usuario o contraseña incorrectos");
    window.location = "./register-user.php";
  </script>';
  exit;
};