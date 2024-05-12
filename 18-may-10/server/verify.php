<?php

require './auth.php';

$user = $_POST['user'];
$password = $_POST['password'];

$compare = "SELECT * FROM user WHERE user = '$user' AND password = '$password'";
$result = mysqli_query($conn, $compare);

if(mysqli_num_rows($result) > 0){
  session_start();
  $_SESSION['user'] = '1';
  header('Location: ../panel/');



} else {
  echo'
  <script>
    alert("Usuario o contraseña incorrectos");
    window.location = "../";
  </script>';
  exit;
};