<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Examen</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="basic">
    <?php include "./componet/header.php"; ?>
    <div class="form">
      <div class="form-title">
        <p>REGISTRO MATERIA DE CURSO DE VERANO</p>
      </div>
      <form action="./save.php" method="get" onsubmit="return validateForm()">
        <div class="style-form">
          <div class="form-group">
            <div class="group">
              <label for="nombre">Nombre:</label>
              <input type="text" name="nombre" id="nombre">
            </div>

            <div class="group">
              <label for="repetidor">¿Es repetidor?</label>
              <input type="radio" name="repetidor" id="repetidor_si" value="si">
              <label for="repetidor_si">Sí</label>
              <input type="radio" name="repetidor" id="repetidor_no" value="no">
              <label for="repetidor_no">No</label>
            </div>

            <div class="group">
              <label for="semestre">Semestre:</label>
              <select name="semestre" id="semestre" >
                <option value="" disabled selected>Seleccione un semestre</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
            <div class="group">
              <label for="materia">Materia que deseas inscribir:</label>
              <input type="text" name="materia" id="materia">
            </div>
          </div>
          <div class="form-group">
            <div class="group">
              <label for="matricula">Matricula:</label>
              <input type="text" name="matricula" id="matricula">
            </div>

            <div class="group">
              <label for="horario">Horario</label>
              <input type="radio" name="horario" id="maturino" value="MATUTINO">
              <label for="maturino">MATUTINO</label>
              <input type="radio" name="horario" id="vespertino" value="VESPERTINO">
              <label for="vespertino">VESPERTINO</label>
            </div>

            <div class="group">
              <label for="carrera">CARRERA:</label>
              <select name="carrera" id="carrera" >
                <option value="" disabled selected>Seleccione una carrera</option>
                <option value="INGENIERIA EN SISTEMAS">INGENIERIA EN SISTEMAS</option>
                <option value="INGENIERIA CIVIL">INGENIERIA CIVIL</option>
                <option value="INGENIERIA INDUSTRIAL">INGENIERIA INDUSTRIAL</option>
                <option value="INGENIERIA MECANICA">INGENIERIA MECANICA</option>
                <option value="INGENIERIA ELECTRICA">INGENIERIA ELECTRICA</option>
                <option value="INGENIERIA ELECTRONICA">INGENIERIA ELECTRONICA</option>
                <option value="INGENIERIA QUIMICA">INGENIERIA QUIMICA</option>
              </select>
            </div>
          </div>
        </div>

        <input class="btn-regis" type="submit" value="REGISTRATE">
      </form>
    </div>

    <?php include "./componet/footer.php"; ?>
  </div>

</body>

</html>
<script>
  function validateForm() {
    var nombre = document.getElementById('nombre').value;
    var repetidor_si = document.getElementById('repetidor_si').checked;
    var repetidor_no = document.getElementById('repetidor_no').checked;
    var semestre = document.getElementById('semestre').value;
    var materia = document.getElementById('materia').value;
    var matricula = document.getElementById('matricula').value;
    var maturino = document.getElementById('maturino').checked;
    var vespertino = document.getElementById('vespertino').checked;
    var carrera = document.getElementById('carrera').value;

    if (nombre === '' || (!repetidor_si && !repetidor_no) || semestre === '' || materia === '' || matricula === '' || (!maturino && !vespertino) || carrera === '') {
      alert('Por favor, complete todos los campos.');
      return false;
    }
    return true;
  }
</script>
