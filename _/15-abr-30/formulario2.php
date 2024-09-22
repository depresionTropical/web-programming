<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <link rel="stylesheet" href="asset/style.css">
</head>
<body>
  <div class="basic">
    <div class="div-carreras">
      <h1>FORMULARIO de CARRERAS</h1>
      <p>Lelen el siguiente formulario con los dartos para el registro de las carreras</p>
      <div class="form-carreras">
        <form action="carreras.php" method="post">
          <select name="carrera" id="carrera" class="form-carreras-ele">
            <option value="ingenieria">Ingenieria</option>
            <option value="medicina">Medicina</option>
            <option value="derecho">Derecho</option>
            <option value="arquitectura">Arquitectura</option>
            <option value="psicologia">Psicologia</option>

          </select>
          <input class="form-carreras-ele"type="number" name="semestre" id="semestre" placeholder="Número de semestre">
          <input class="form-carreras-ele"type="text" name="materia" id="materia" placeholder="Nombre materia">
          <textarea class="form-carreras-ele"name="comentario" id="comentario" cols="30" rows="10" placeholder="Dejanos un comentario"></textarea>
          <button class="form-carreras-ele"type="submit">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>