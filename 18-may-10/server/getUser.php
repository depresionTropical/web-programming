<?php

require_once('../server/auth.php');

$sql = "SELECT * FROM user ORDER BY id ASC";

$result = mysqli_query($conn, $sql);

while( $row = mysqli_fetch_assoc($result) ) {
  $typeUser = "Administrador";
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['user']."</td>";
  echo "<td>".$row['password']."</td>";
  if($row['type'] == 2){
    $typeUser = "Usuario";
  }
  echo "<td>".$typeUser."</td>";
  echo "<td><a href='#'>Eliminar</a></td>";
}