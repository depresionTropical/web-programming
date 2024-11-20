<?php
require "auth.php";

$name = $_GET['name'];
$mobile = $_GET['mobile'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$from = $_GET['from'];
$to = $_GET['to'];
$type = $_GET['type'];
$value_max = $_GET['value-max'];

// echo "name: $name <br>";
// echo "mobile: $mobile <br>";
// echo "email: $email <br>";
// echo "phone: $phone <br>";
// echo "from: $from <br>";
// echo "to: $to <br>";
// echo "type: $type <br>";
// echo "value_max: $value_max <br>";


$sql = "INSERT INTO `form` (`name`, `mobile`, `email`, `phone`, `from`, `to`, `type`, `value-max`) VALUES ('$name', '$mobile', '$email', '$phone', '$from', '$to', '$type', '$value_max')";

if (mysqli_query($conn, $sql)) {
  echo "
  <script>
    alert('Formulario enviado correctamente');
    window.location.href = 'index.php';
  </script>
  ";
} else {
  echo "
  <script>
    alert('Error al enviar el formulario');
    window.location.href = 'index.php';
    </script>";
}
?>