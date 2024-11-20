<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>servicios</title>
  <link rel="stylesheet" href="./asset/style.css">
</head>

<body>
  <?php include './head.php' ?>

  <div class="basic">
    <div class="btn-container">
      <a class="btn-blue-2 btn-general" href="./">Regresar</a>
    </div>
    <div class="description">
      <?php
      include './auth.php';
      $sql = "SELECT * FROM form";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
          echo "
          <div class='info'>
          <p> <span class='blue-leter'> Nombre: </span> " . $row["name"] . " 
          <p><span class='blue-leter'> Email: </span> " . $row["email"] . "</p>
          <p><span class='blue-leter'> Telefono de oficina: </span> " . $row["phone"] . "</p>
          </div>";
          echo "
          <div class='info'>
          <p> <span class='blue-leter'> Dirección de orgien: </span> " . $row["from"] . " 
          <p><span class='blue-leter'> Dirección destino : </span> " . $row["to"] . "</p>
          <p><span class='blue-leter'> Valor aproximado: </span> " . $row["value-max"] . "</p>
          <p><span class='blue-leter'> ¿Qué objetos quiere llevar?: </span> " . $row["type"] . "</p>
          </div>
          <hr>
          ";
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>

    </div>
  </div>

  <?php include './footer.php' ?>
</body>

</html>