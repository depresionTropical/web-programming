<?php

require './auth.php';
  $name = $_POST['name'] ?? '';
  $phone = $_POST['phone'] ?? '';
  $place = $_POST['ubicacion'] ?? '';
  $date = $_POST['date'] ;
  $time = $_POST['time'] ?? '';
  $people = $_POST['people'] ?? '';
  $comment = $_POST['comments'] ;


// mandar datos a la base de datos

$sql = "INSERT INTO book (name, phone, place, date, time, people, coment) VALUES ('$name', '$phone', '$place', '$date', '$time', '$people', '$comment')";


if (mysqli_query($conn, $sql)) {
  echo "<script>
    alert('Reserva realizada correctamente');
    window.location.href = '../../';
    </script>";
} else {
  echo "<script>
    alert('Error al realizar la reserva');
    window.location.href = '../../';
    </script>";

}
