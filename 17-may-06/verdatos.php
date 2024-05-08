<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EJEMPLO DE BASE DE DATOS</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="estilos.css">

</head>

<body>
  <div class="contenedor_arriba ancho">
    <br>
    <h2>INSTITUTO TECNOLOGICO DE MERIDA</h2>
    <img class="logotec" src="imagenes/logoTEC.gif">
  </div>

  <div class="contenedor">
    <table>
      <tr>
        <th>Carrera</th>
        <th>Semestre</th>
        <th>Materia</th>
        <th>Comentarios</th>
      </tr>
      <?php
        require 'conexion.php';
        $sql = "SELECT * FROM registros ORDER BY id ASC";
        $resultado = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($resultado)){
          echo "<tr>";
          echo "<td>".$row['carreras']."</td>";
          echo "<td>".$row['semestre']."</td>";
          echo "<td>".$row['materias']."</td>";
          echo "<td>".$row['comentarios']."</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </div>
  </div>
  </center>
</body>

</html>