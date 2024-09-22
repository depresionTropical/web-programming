<?php
require_once('./secure.php');
require_once('./auth.php');

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  echo "
  <script>
    alert('Usuario eliminado correctamente');
    window.location.href = '../panel/getUser.php';
    </script>
    ";
} else {
  echo "
  <script>
    alert('Error al eliminar el usuario');
    window.location.href = '../panel/getUser.php';
    </script>
    ";
}
?>