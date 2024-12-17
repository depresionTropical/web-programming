
<?php require './server/secure.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <?php
  $title = ', admin';
  include 'component/header.php'; ?>
  <div class=" basic panel__container">
    <?php include './component/panel.php'; ?>
    <div class="content">

      <h2>Añadir nuevo usuario</h2>

      <form action="./server/add_new.php" method="post" enctype="multipart/form-data">

        <div class="form-new-add">
          <div class="group-new-form">

            <label class="form-new-add-label" for="image">Imagen:</label>
            <input class="form-new-add-input" type="file" id="image" name="image">

            <br>
            <label class="form-new-add-label" for="title">Título del platillo:</label>
            <input class="form-new-add-input" type="text" id="title" name="title">
            <br>
          </div>
          <div class="group-new-form">
            <label class="form-new-add-label" for="price">Precio:</label>
            <input class="form-new-add-input" type="number" id="price" name="price">
            <br>
            <label class="form-new-add-label" for="description">Descripción:</label>
            <textarea  class="form-new-add-input" id="description" name="description"></textarea>
            
            <br>
          </div>
          <input class="form-new-add-submit" type="submit" value="Añadir">


          <br>
        </div>

      </form>


      <hr>

      <h2>Novedades</h2>
      <table class="table">
        <thead>
          <tr>
            <th class="table-news-th">ID</th>
            <th class="table-news-th">Platillo</th>
            <th class="table-news-th">Foto</th>
            <th class="table-news-th">descriptión</th>
            <th class="table-news-th"></th>
          </tr>
        </thead>
        <?php
        require "./server/auth.php";

        // Fetch users from the database
        $sql = "SELECT   *  FROM `new`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Output data of each row
          while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td class='table-news-td'>" . $row["id"] . "</td>
                <td>" . $row["title"] . "</td>
                <td><img src='./server/" . $row["img"] . "' alt='Imagen' width='50'></td>
                <td>" . $row["description"] . "</td>
                <td><a href='./server/delete_new.php?id=" . $row["id"] . "'>Delete</a></td>
                </tr>";
          }
        } else {
          echo "<tr><td colspan='4' class='table-news-td'>Ni novedades</td></tr>";
        }

        $conn->close();
        ?>
      </table>
    </div>
</body>

</html>