<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EL mejor Sushi</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="header">
    <div class="basic logo-container">
      <img class="logo-img" src="./img/3.png" alt="logo">
      <div class="social-menu">
        <div class="social-media">
          <a target="_blank" href="https://www.facebook.com/"><img class="social" src="./img/social/FACEBOOK.webp" alt="facebook"></a>
          <a target="_blank" href="https://www.instagram.com/"><img class="social" src="./img/social/INSTAGRAM.webp" alt="instagram"></a>
          <a target="_blank" href="https://www.twitter.com/"><img class="social" src="./img/social/X.webp" alt="X"></a>
          <a target="_blank" href="https://www.pinterest.com/"><img class="social" src="./img/social/PINTEREST.webp" alt="pinterest"></a>
          <a target="_blank" href="https://www.youtube.com/"><img class="social" src="./img/social/YOUTUBE.webp" alt="youtube"></a>
          <a target="_blank" href="https://www.tiktok.com/"><img class="social" src="./img/social/TIKTOK.webp" alt="tiktok"></a>
          <a class="btn-menu" href="./dashboard/">admin</a>
        </div>
        <div class="menu">
          <a class="btn-menu" href="#us">Nosotros</a>
          <a class="btn-menu" href="#new">Novedades</a>
          <a class="btn-menu" href="#menu">Menú</a>
          <a class="btn-menu" href="#book">Reservación</a>
          <a class="btn-menu" href="#services">Servicios</a>
        </div>
      </div>
    </div>
  </div>
  <div class="banner">
    <div class="basic">
      <div class="banner-letter">
        <h1>Una danza de sabores para tus sentidos.</h1>
      </div>
    </div>
  </div>
  <div class="us" id="us">
    <div class="basic">
      <div class="us-container">
        <div class="us-card us-img">
        </div>
        <div class="us-card">
          <h2>Bienvenido a lo extraordinario.</h2>
          <p>En Koi Sushi Bar combinamos la tradición japonesa con la elegancia moderna para ofrecer una experiencia única. Sabores auténticos, atención impecable y el arte del sushi como nunca antes lo habías vivido.</p>
        </div>

      </div>
    </div>
  </div>
  <div class="new" id="new">
    <div class="basic">
      <div class="new-letter">
        <h2>Descrubre nuevas experiencias</h2>
        <div class="new-contrainer-card">
          
        <?php
        require "./dashboard/server/auth.php";

        $sql = "SELECT * FROM `new`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo '<div class="new-card">';
            // echo '<img class="new-card-img" '; echo' src="./dashboard/server/' . $row["img"] . '" alt="' . $row["title"] . '">';
            // echo '<img class="new-card-img"  echo src="./dashboard/server/' . $row["img"] . '" alt="' . $row["title"] . '">';
            echo '<h3>' . $row["title"] . '</h3>';
            echo '<p>$' . $row["price"] . '</p>';
            echo '<p>' . $row["description"] . '</p>';
            echo '</div>';
          }
        } else {
            echo "<p>Por el momento no hay novedades.</p>";
        }
        $conn->close();
        ?>
        </div>

      </div>
    </div>
  </div>
  <div class="menu" id="menu">
    <div class="basic">
      <h2>Una fusión de tradición, frescura y arte en cada bocado</h2>

      <table class="menu-table">
        <tr>
          <td class="brocheta menu-td">
            <a class="bg-text" href="#link2">Brocheta</a>
          </td>
          <td class="menu-td sushi" colspan="2"><a class="bg-text" href="#link2">Sushi</a></td>
        </tr>
        <tr>
          <td class="menu-td rice"><a class="bg-text" href="#link1">Arroz</a></td>
          <td class="menu-td soup"><a class="bg-text" href="#link2">Sopas</a></td>
          <td class="menu-td drink"><a class="bg-text" href="#link3">Bebidas</a></td>
        </tr>
      </table>

    </div>
  </div>
  .<div class="book" id="book">
    <div class="basic">
      <h2>Reserva tu lugar</h2>
      <form class="form-container" action="./dashboard/server/book.php" method="POST">
        <div class="form-group">
          <label class="label-form" for="name">Nombre</label>
          <input class="input-form" type="text" id="name" name="name">
          <label class="label-form" for="phone">Teléfono</label>
          <input class="input-form" type="tel" id="phone" name="phone">
        </div>
        <div class="form-group
        ">

        </div>
        <div class="form-group">
            <label class="label-form">Ubicación</label>
            <div>
            <input type="radio" id="terraza" name="ubicacion" value="terraza">
            <label for="terraza">Terraza</label>
            </div>
            <div>
            <input type="radio" id="dentro" name="ubicacion" value="dentro">
            <label for="dentro">Dentro del restaurante</label>
            </div>
          <label class="label-form" for="date">Fecha</label>
          <input class="input-form" type="date" id="date" name="date" min="2024-12-16">
        </div>
        <div class="form-group">
          <label class="label-form" for="time">Hora</label>
          <input class="input-form" type="time" id="time" name="time" min="09:00" max="17:00" value="12:30">
          <label class="label-form" for="people">Número de personas</label>
          <input class="input-form" type="number" id="people" name="people">
        </div>
        
      <div class="form-group">
        <label class="label-form" for="comments">Comentarios o requerimientos adicionales</label>
        <textarea class="input-form" id="comments" name="comments" rows="4" cols="50"></textarea>
        <button class="btn-form" type="submit">Reservar</button>
      </div>
      </form>
    </div>
  </div>
  <!-- Hoario de servicios y servicios -->
  <div class="services" id="services">
    <div class="basic">
      <div class="services-container">
        <div class="services-card">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16732.956832041808!2d-99.18936510341695!3d19.40474914866503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fff839c4c633%3A0xc63a28bfc318cc2d!2sIzakaya%20Sushi%20Roma!5e0!3m2!1ses!2smx!4v1734373975647!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="services-card">
          <h3>Servicios</h3>
          <p>Reservaciones</p>
          <p>Eventos privados</p>
          <p>Entrega a domicilio</p>
          <h3>Horarios</h3>
          <p>Lunes a viernes: 12:00 - 22:00</p>
          <p>Sábado y domingo: 11:00 - 23:00</p>
        </div>
      </div>
    </div>
  </div>
  <!-- video -->
  <div class="video">
    <div class="basic">
      <div class="video-container">
      <iframe class="services-video"  src="https://www.youtube.com/embed/0-ncyfpe_7Q?si=3cE6wJwN7_8wAsDX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <div class="footer">
    <div class="basic">
      <div class="footer-container">
        <div class="footer-card">
          <img class="logo-img" src="./img/3.png" alt="logo">
        </div>
        <div class="footer-card">
          <h3>Horarios</h3>
          <p>Lunes a viernes: 12:00 - 22:00</p>
          <p>Sábado y domingo: 11:00 - 23:00</p>
        </div>
        <div class="footer-card">
          <h3>Contacto</h3>
          <p>Av. Siempre Viva 742</p>
          <p>
            <a href="tel:555-555-5555">555-555-5555</a>
          </p>
          <p>
          </p>
        </div>
      </div>
    </div>
  </div>






</body>

</html>