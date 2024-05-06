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


$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
  echo "Connected successfully <br>";
}


