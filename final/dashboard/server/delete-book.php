<?php
require "./auth.php";

$id = $_GET['id'];



$consulta = "DELETE FROM book WHERE id = $id";

$resultado = mysqli_query($conn, $consulta);
if ($resultado) {
    header("Location: ../book.php");
} else {
    echo "Error al eliminar";
}
?>