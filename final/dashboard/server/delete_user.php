<?php
require "./auth.php";
$id = $_GET['id'];
echo $id;
$consulta = "DELETE FROM user WHERE id = $id";
$resultado = mysqli_query($conn, $consulta);
if ($resultado) {
  header("Location: ../user.php");
} else {
  echo "Error al eliminar";
}
mysqli_close($conn);
?>

?>