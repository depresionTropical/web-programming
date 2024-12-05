<?php

include './auth.php';

$name_image = $_FILES['image']['name'];
$type_image = $_FILES['image']['type'];
$size_image = $_FILES['image']['size'];
$path_tmp_image = $_FILES['image']['tmp_name'];

echo "path_tmp_image: $path_tmp_image <br>";
$description_product = $_POST['description'];

// echo "nameImage: $name_image <br>";
// echo "descriptionProduct: $description_product <br>";
// echo "typeImage: $type_image <br>";
// echo "sizeImage: $size_image <br>";

$path_to_upload = './uploads/';
$upload = $path_to_upload . basename($name_image);
// echo "upload: $upload <br>";

// save image in the server
move_uploaded_file($path_tmp_image, $upload);

// save image in the database
$sql = "INSERT INTO products (product, path) VALUES ('$description_product', '$upload')";
if (mysqli_query($conn, $sql)) {
  echo "alert('Imagen subida correctamente')";
  header('Location: ./');
} else {
  echo "alert('Error al subir la imagen')";
  header('Location: ./');
}



?>