<?php
session_start();

if (!isset($_SESSION['user'])) {
  header('Location: ./');
  exit;
}else{
  echo 'Bienvenido '.$_SESSION['user'];
}

?>