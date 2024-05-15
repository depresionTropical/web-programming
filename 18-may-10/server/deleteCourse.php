<?php
require_once('./secure.php');
require_once('./auth.php');

$id = $_GET['id'];

$sql = "DELETE FROM course WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  echo "
  <script>
    alert('Usuario eliminado correctamente');
    window.location.href = '../panel/getCourse.php';
    </script>
    ";
} else {
  echo "
  <script>
    alert('Error al eliminar el usuario');
    window.location.href = '../panel/getCoure.php';
    </script>
    ";
}
?>