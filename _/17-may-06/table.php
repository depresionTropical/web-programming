<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/style_tabla.css">
  <link rel="stylesheet" href="./assets/style.css">
  <script>
    function validar(url) {
      if (confirm("¿Estás seguro de eliminar la materia?")) {
        window.location=url;

      }
    }
  </script>
</head>
<body>
  <div class="basic">
  
  <table>
    <tr>
      <td>ID</td>
      <th>Carrera</th>
      <th>Semestre</th>
      <th>Materia</th>
      <th><a href="page.php">regresar</a></th>
    </tr>
    <?php
      require 'conexion.php';
      $sql = "SELECT * FROM subjets ORDER BY carreer ASC";
      $result = mysqli_query($conn, $sql);
      while ($mostrar = mysqli_fetch_array($result)) {
    ?>
    <tr>
    <td><?php echo $mostrar['id'] ?></td>
      <td><?php echo $mostrar['carreer'] ?></td>
      <td><?php echo $mostrar['ingreso'] ?></td>
      <td><?php echo $mostrar['subject'] ?></td>
      <td><a href="#" onclick="validar('delete.php?id=<?php echo $mostrar['id'] ?>')">Eliminar</a></td>
    </tr>
    <?php
      }
    ?>
  </table>
  </div>
</body>
</html>