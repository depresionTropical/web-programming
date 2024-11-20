<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mendez</title>
  <link rel="stylesheet" href="asset/style.css">
</head>

<body>
  <?php include './head.php' ?>
  
  <div class="basic">
  <div class="btn-container">
      <a class="btn-blue-2 btn-general" href="./">Regresar</a>
    </div>
      <form action="save.php" method="get">
        <div class="req-field">
          <p>Por favor llene el siguiente formulario</p>
          <p>Campos requeridos(*)</p>

        </div>
        <hr class="line-form">
        <div class=" form">
        <div class="side-form">
          <input class="inp-class" type="text" name="name" placeholder="* Nombre completo" required>
          <input class="inp-class" type="number" name="mobile" placeholder="* Celular" required>
        </div>
        <div class="side-form">
          <input class="inp-class" type="text" name="email" placeholder="* Email" required>
          <input class="inp-class" type="number" name="phone" placeholder="* Telefono de oficina" required>
        </div>
        <p class="data-to">DATOS DE LA MERCANCÍA QUE DESEAS ENVIAR</p>  
        <p class="notice">* Especifica si el envio es para algun municipio en particular dentro o fuera de la ciudad</p>
        </div>
        <div class=" form">
        <div class="side-form">
          <input class="inp-class" type="text" name="from" placeholder="* Dirección de origen" required>
        </div>
        <div class="side-form">

          <input class="inp-class" type="text" name="to" placeholder="* Dirección de destino" required>
        </div>
        <textarea class="text-area" name="type" id="type" cols="30" rows="10" placeholder="¿Qué tipo de objetos quieres enviar?"></textarea>
        
        <span class="input-max">$<input class="inp-class" type="number" name="value-max" placeholder="Valor aproximado de toda la mercancía" required>.00M/N</span>
        <br>
        
        </div>
        <button class="btn" type="submit">Submit</button>
      </form>
    
  </div>

  <?php include './footer.php' ?>
</body>

</html>