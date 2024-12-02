<?php
 include 'secure.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body >
  <h1>Holaaa estas dentro</h1>

  <a href="out.php">Cerrar sesión</a>
  <form action="insert-subjet.php" method="post">
     <label for="carrera">Carrera</label>
    <select name="carrera">
      <option value="civil">Civil</option>
      <option value="mécanica">Mécanica</option>
      <option value="sistemas">Sistemas</option>
      <option value="Electronica">Electrónica</option>
      <option value="Industrial">Industrial</option>
      <option value="Buiquimica">Bioquímica</option>
      <option value="Ambiental">Ambiental</option>
      
    </select>
    <label for="semestre">Semestre</label>
    <select name="semestre">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
    <label for="materia">Materia</label>
    <input type="text" name="materia" placeholder="Materia">
    <button type="submit">Guardar</button>
  </form>

  <a href="table.php">ver solo datos</a>
</body>
</html>