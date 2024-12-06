<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Examen</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="basic">
    <?php include "./componet/header.php"; ?>
    <div class="title-tabla">
      <img src="./img/engrane.png" alt="engrane">
      <p>VER DATOS</p>
    </div>

    <div class="tabla">
      <?php
      include "./auth.php";

      $sql = "SELECT * FROM examen.examen";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        echo "<div class='card-table'>";
        echo "<div class='row'>";
        echo "<p class='red-letter'>" . $row["nombre"] . "</p>";
        echo "<p>Matricula: <span class='red-letter'> " . $row["matricula"] . "</span></p>";
        echo "<p>Turno: <span class='red-letter'> " . $row["horario"] . "</span></p>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<p class='gold-letter'>" . $row["carrera"] . "</p>";
        echo "<p class='red-letter'>" . $row["semestre"] . "° Semestre</p>";
        echo "<p>Repetirdor: <span class='red-letter'>  " . $row["repetidor"] . "</span></p>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<p>Materia: <span class='red-letter'> " . $row["materia"] . "</span></p>";
        echo "</div>";
        echo "<a href='./delete.php?id=" . $row["id"] . "' class='btn-delete'>";
        echo "<img src='./img/icono_cerrar.jpg' alt='Eliminar' class='delete-icon'> Eliminar";
        echo "</a>";
        echo "<hr>";
        echo "</div>";

        }
      } else {
        echo "0 results";
      }
      ?>
    </div>

    <?php include "./componet/footer.php"; ?>
  </div>

</body>

</html>