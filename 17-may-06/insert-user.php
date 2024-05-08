<?php

require 'conexion.php';

$name = $_POST['name'];
$email = $_POST['email'];
$user = $_POST['user'];
$password = $_POST['password'];

$compare = "SELECT * FROM user WHERE user = '$user'";

$result = mysqli_query($conn, $compare);

if(mysqli_num_rows($result) > 0){
  echo'
  <script>
    alert("El usuario ya existe");
    window.location = "register-user.php";
    
  </script>';
  exit;
};

include 'save.php';





