<?php

require_once('../server/auth.php');

$sql = "SELECT * FROM course ORDER BY id ASC";

$result = mysqli_query($conn, $sql);

while( $row = mysqli_fetch_assoc($result) ) {
  $typeUser = "Administrador";
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['courseName']."</td>";
  echo "<td>".$row['professor']."</td>";
  echo "<td>".$row['courseDuration']."</td>";
  echo "<td>".$row['schedule']."</td>";
  echo "<td>".$row['days']."</td>";
  echo "<td>".$row['courseDescription']."</td>";
  echo "<td><a class='btn-blue' href='../server/deleteCourse.php?id=".$row['id']."'>eliminar</a></td>";
  // echo "<td><a class='btn-blue' href='#'>eliminar</a></td>";
}