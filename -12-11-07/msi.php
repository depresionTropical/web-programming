<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['peso']) && isset($_POST['altura'])) {
    $weight = floatval($_POST['peso']);
    $height = floatval($_POST['altura']);
    
    if ($height > 0) {
      $bmi = $weight / ($height * $height);
      echo 'Your BMI is: ' . htmlspecialchars($bmi);
    } else {
      echo 'Height must be greater than zero.';
    }
  } else {
    echo 'Please provide both weight and height.';
  }
} else {
  echo 'No data has been sent via POST.';
}
?>