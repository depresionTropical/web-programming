<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMC</title>
  <link rel="stylesheet" href="asset/style.css">
</head>
<body>
  <div class="basic">
    <h1>Calculadora de IMC</h1>
    <div class="form-container">
    <form action="imc.php" method="post">
      <label for="peso">Peso (kg):</label>
      <input type="text" name="peso" id="peso" required>
      <label for="altura">Altura (m):</label>
      <input type="text" name="altura" id="altura" required>
      <input type="submit" value="calcular">
    </form>
    </div>
  </div>
  <?php
  $env = parse_ini_file('.env');
  $DB_HOST = $env['DB_HOST'];
  $DB_USER = $env['DB_USER'];
  $DB_PASS = $env['DB_PASS'];
  $DB_NAME = $env['DB_NAME'];

  echo "DB_HOST: $DB_HOST <br>";
  echo "DB_USER: $DB_USER <br>";
  echo "DB_PASS: $DB_PASS <br>";
  echo "DB_NAME: $DB_NAME <br>";
  
  ?>
</body>
</html>