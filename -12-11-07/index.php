<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>validacion</title>
  <link rel="stylesheet" href="./asset/style.css">
</head>

<body>
  <div class="basic">

    <div class="nav">
      <?php include './head.php'; ?>


      <?php include './menu.php'; ?>
    </div>

    <div class="text-container">
      <h1>Validacion de formularios</h1>
      <p>Validacion de formularios con php</p>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius animi alias repudiandae cupiditate, laboriosam soluta, vitae itaque explicabo libero aperiam quaerat quia earum iure! Quod error impedit est neque non?
      Aspernatur, voluptas dolore harum excepturi quae unde nostrum cum modi explicabo quia deserunt omnis veniam quas, eum ipsa reiciendis quidem inventore ad dolores ea eaque esse! Animi sequi consectetur officiis.
      Quo porro molestias aliquid laudantium itaque aperiam dignissimos. Tenetur sit quos atque voluptatibus quisquam porro molestiae exercitationem distinctio, quam quidem totam est eveniet impedit! Error, veniam assumenda! A, excepturi nemo?
      Harum sint perspiciatis repellendus quidem placeat laborum doloremque quasi deserunt dolores eum. Praesentium iusto voluptas, et aperiam, perferendis facere qui quasi perspiciatis ut deserunt saepe velit, est fugit ipsum voluptatum!
      Nesciunt totam corporis voluptatibus odio harum ipsam ratione at exercitationem quis. Repellendus maxime omnis, veniam, debitis qui deleniti cumque nihil repellat nisi molestias, odio facere nulla quam nesciunt neque totam.
      Mollitia facilis voluptas soluta iste error accusantium obcaecati, tempore sed quod excepturi eos velit quae quas perferendis rem voluptatibus ratione officiis. Distinctio cum vel dolores, perferendis aliquam facere soluta quam.
      Alias vel ipsa dolor ab inventore! Unde quam ipsam provident quia id, sint commodi iure dolore nesciunt, esse suscipit! Aliquid adipisci velit ea distinctio excepturi at libero provident ex quisquam?
      Molestias, minima. Voluptas earum reprehenderit modi consequatur corrupti natus quas ipsum omnis quam, et dolorum est, perferendis eum ipsam molestias eveniet cumque magni sint, adipisci fugit deserunt aliquam eius libero!
      Aliquam dicta vero temporibus ducimus dolorum cumque? Facilis doloremque amet in, modi at ut fugiat repudiandae hic beatae maxime, nesciunt rerum, cum praesentium sunt nostrum dignissimos voluptatibus ea deleniti! Accusamus?
      Deserunt placeat tenetur nam saepe, omnis esse magni, deleniti dignissimos tempore, est quisquam id debitis veniam aliquam odio impedit. At ab accusantium velit perspiciatis, deserunt laborum hic asperiores in harum.</p>
    </div>

    <form action="msi.php" method="post">
      <!-- formulario para indice de masa corporar -->
      <h2>Indice de masa corporal</h2>
      <label for="peso">Peso</label>
      <input type="text" name="peso" id="peso" placeholder="Ingrese su peso en kg" required>
      <label for="altura">Altura</label>
      <input type="text" name="altura" id="altura" placeholder="Ingrese su altura en cm" required>
      <button type="submit">Calcular</button>

    </form>
        
  </div>
</body>

</html>