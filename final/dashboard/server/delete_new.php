<?php
require "./auth.php";

$id = $_GET['id'];



$consulta = "DELETE FROM new WHERE id = $id";

$resultado = mysqli_query($conn, $consulta);
if ($resultado) {
    header("Location: ../new.php");
} else {
    echo "Error al eliminar";
}
?>