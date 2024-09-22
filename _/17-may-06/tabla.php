<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EJEMPLO DE BASE DE DATOS</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="estilos.css">

</head>

<body>
  <div class="contenedor_arriba ancho">
    <br>
    <h2>INSTITUTO TECNOLOGICO DE MERIDA</h2>
    <img class="logotec" src="imagenes/logoTEC.gif">
  </div>

  <div class="contenedor">
    <p class="titulo_grande">Formulario Carreras </p>
    <p class="parrafo">
      Llene el siguiente formulario con los datos para el registro de las carreras
    </p>

    <form action="recibir_info.php" method="post">

      <select name="carreras" class="elementos">
        <option>Escoge tu carrera</option>
        <option value="sistemas">Ing. Sistemas</option>
        <option value="civil">Ing. Civil</option>
        <option value="industrial">Ing. Industrial</option>
        <option value="electrica">Ing. Electrica</option>
        <option value="bioquimica">Ing. Bioquimica</option>
        <option value="mecanica">Ing. Mecanica</option>
        <option value="electronica">Ing. Electronica</option>
        <option value="ambiental">Ing. Ambiental</option>
      </select>
      <br><br>
      <input name="semestre" type="text" class="elementos" placeholder="numero de semestre">
      <br><br>
      <input name="materias" type="text" class="elementos" placeholder="nombre de la materia">
      <br><br>
      <textarea id="" name="comentarios" class="elementos_comentarios" placeholder="Dejanos tus comentarios"></textarea>
      <br><br>
      <button type="submit" class="btn_dorado">Guardar</button>
      <br>
    </form>
    <button type="button" class="btn_dorado"><a href="./verdatos.php">Ver datos</a></button>
    <br>
  </div>
  </center>
</body>

</html>