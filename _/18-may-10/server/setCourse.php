<?php

require_once "./auth.php";

$courseName = $_GET['courseName'];
$courseDescription = $_GET['courseDescription'];
$courseDuration = $_GET['courseDuration'];
$schedule = $_GET['schedule'];
$days = $_GET['days'];
$professor = $_GET['professor'];

echo $courseName."<br>";
echo $courseDescription."<br>";
echo $courseDuration."<br>";
echo $schedule."<br>";
echo $days."<br>";
echo $professor."<br>";


$sql = "INSERT INTO course (courseName, courseDescription, courseDuration, schedule, days, professor) VALUES ('$courseName', '$courseDescription', '$courseDuration', '$schedule', '$days', '$professor')";
if (mysqli_query($conn, $sql)) {
  echo "<script>
    alert('Curso creado correctamente');
    window.location.href = '../panel/setCourse.php';
    </script>";
} else {
  echo "<script>
    alert('Error al crear el curso');
    window.location.href = '../panel/setCourse.php';
    </script>";
}
