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
</body>
</html>