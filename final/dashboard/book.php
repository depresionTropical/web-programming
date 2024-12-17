<?php require './server/secure.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel administrativo</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>

  <?php
  $title = ', admin';
  include 'component/header.php'; ?>
  <div class=" basic panel__container">
    <?php include './component/panel.php'; ?>
    <div class="content">
      <?php
      require './server/auth.php';

      $sql = "SELECT * FROM book";
      $result = $conn->query($sql);
      echo '<table class="table-news">
              <tr>
                <th class="table-news-th">ID</th>
                <th class="table-news-th">Nombre</th>
                <th class="table-news-th">Teléfono</th>
                <th class="table-news-th">Lugar</th>
                <th class="table-news-th">Fecha</th>
                <th class="table-news-th">Hora</th>
                <th class="table-news-th">Personas</th>
                <th class="table-news-th">Comentario</th>
                <th class="table-news-th"></th>
              </tr>';
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td class='table-news-td'>" . $row["id"]. "</td>
                        <td class='table-news-td'>" . $row["name"] . "</td>
                        <td class='table-news-td'>" . $row["phone"] . "</td>
                        <td class='table-news-td'>" . $row["place"] . "</td>
                        <td class='table-news-td'>" . $row["date"] . "</td>
                        <td class='table-news-td'>" . $row["time"] . "</td>
                        <td class='table-news-td'>" . $row["people"] . "</td>
                        <td class='table-news-td'>" . $row["coment"] . "</td>
                        <td class='table-news-td'><a href='./server/delete-book.php?id=" . $row["id"] . "'>Eliminar</a></td>
                      </tr>";
                }
              } else {
                echo '<tr><td colspan="9" class="table-news-td">No hay reservaciones</td></tr>';
              }
        
              echo "</table>";
        
              $conn->close();
              ?>
    </div>
  </div>
</body>

</html>