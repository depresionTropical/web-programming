<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" href="./asset/style.css">
</head>

<body>
  <h1>FOTOS</h1>
  <a href="./">VOLVER</a>
  <div class="basic">
    <?php
    require './auth.php';
    $sql = "SELECT * FROM products ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='product'>";
        echo "<p>Id: " . $row['id'] . "</p>";
        echo "<img class='img-product' src='" . $row['path'] . "' alt='". $row['product'] ."'>";
        echo "<p>Producto " . $row['product'] . "</p>";
        echo "</div>";
      }
    } else {
      echo "No hay productos";
    }

    ?>
  </div>
</body>

</html>