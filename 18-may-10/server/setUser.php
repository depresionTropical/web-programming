<?php

require_once "./auth.php";

$user = $_POST['user'];
$password = $_POST['password'];
$type = $_POST['type'];


$compare = "SELECT * FROM user WHERE user = '$user'";
$result = mysqli_query($conn, $compare);

if(mysqli_num_rows($result) > 0){
  echo'
  <script>
    alert("El nombre de usuario ya existe\nIntente con otro nombre de usuario");
    window.location = "../panel/setUser.php";
    
  </script>';
  exit;
};

$sql = "INSERT INTO user (user, password, type) VALUES ('$user', '$password', '$type')";


if (mysqli_query($conn, $sql)) {
  echo "<script>
    alert('Usuario creado correctamente');
    
    window.location.href = '../panel/setUser.php';
    </script>";
} else {
  echo "<script>
    alert('Error al crear el usuario');
    window.location.href = '../panel/setUser.php';
    </script>";

}
