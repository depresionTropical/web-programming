<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>respuesta IMC</title>
  <link rel="stylesheet" href="asset/style.css">
</head>

<body>
  <?php
  error_reporting(E_ALL);

  $peso=$_POST['peso'];
  $altura=$_POST['altura'];
  echo "$peso <br>";
  echo "$altura <br>";

  $imc = $peso / ($altura * $altura);

  // echo "<h1 class= awser>IMC: $imc</h1>";

  if ($imc >0 && $imc < 18.5) {
    echo "<h1 class= awser>IMC: $imc</h1>";
    echo "<h2 class= awser>Delgadez</h2>";
  } elseif ($imc >= 18.5 && $imc < 24.9) {
    echo "<h1 class= awser>IMC: $imc</h1>";
    echo "<h2 class= awser>Normal</h2>";
  } elseif ($imc >= 25 && $imc < 29.9) {
    echo "<h1 class= awser>IMC: $imc</h1>";
    echo "<h2 class= awser>Sobrepeso</h2>";
  } elseif ($imc >= 30 && $imc < 34.9) {
    echo "<h1 class= awser>IMC: $imc</h1>";
    echo "<h2 class= awser>Obesidad I</h2>";
  } elseif ($imc >= 35 && $imc < 39.9) {
    echo "<h1 class= awser>IMC: $imc</h1>";
    echo "<h2 class= awser>Obesidad II</h2>";
  } elseif ($imc >= 40) {
    echo "<h1 class= awser>IMC: $imc</h1>";
    echo "<h2 class= awser>Obesidad III</h2>";
  }elseif ($imc == 0) {
    echo "<h1 class= awser>IMC: $imc</h1>";
    echo "<h2 class= awser>Por favor ingrese los datos</h2>";
  }

  ?>
</body>

</html>