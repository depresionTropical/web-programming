<?php
require "./auth.php";

$id = $_GET['id'];

$consulta = "DELETE FROM examen.examen WHERE id = $id";

$resultado = mysqli_query($conn, $consulta);
if ($resultado) {
    header("Location: ./table.php");
} else {
    echo "Error al eliminar";
}
?>