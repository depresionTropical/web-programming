<?php


include './auth.php';




$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];

$name_image = $_FILES['image']['name'];
$type_image = $_FILES['image']['type'];
$size_image = $_FILES['image']['size'];
$path_tmp_image = $_FILES['image']['tmp_name'];

echo "path_tmp_image: $path_tmp_image <br>";
echo "nameImage: $name_image <br>";
echo "typeImage: $type_image <br>";
echo "sizeImage: $size_image <br>";
echo "title: $title <br>";
echo "price: $price <br>";
echo "description: $description <br>";


$path_to_upload = 'uploads/';
$upload = $path_to_upload . basename($name_image);
echo "upload: $upload <br>";

// save image in the server
move_uploaded_file($path_tmp_image, $upload);

// save image in the database
$sql = "INSERT INTO new (title, `description`, img, price) VALUES ('$title', '$description', '$upload', '$price')";
if (mysqli_query($conn, $sql)) {
  echo "alert('Imagen subida correctamente')";
  header('Location: ../new.php');
} else {
  echo "alert('Error al subir la imagen')";
  header('Location: ../new.php');
}
?>

