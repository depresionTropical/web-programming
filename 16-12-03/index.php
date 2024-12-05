<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imagen</title>
  <link rel="stylesheet" href="./asset/style.css">
</head>

<body>
<!-- formulara para subir rirulo del producto, subir imagen imagen  -->
  <div class="basic">
  <form class="form" action="upload.php" method="post" enctype="multipart/form-data">
    <label for="title">Decripcion</label>
    <br><input type="text" name="description" id="description">
    <br><label for="image">Imagen</label>
    <br><input type="file" name="image" id="image">
    <br><button type="submit">Subir</button>
    <a href="./gallery.php">Gallery</a>
  </form>
  </div>
</body>

</html>