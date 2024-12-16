<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <?php
  $title = ', admin';
  include 'component/header.php'; ?>
  <div class=" basic panel__container">
    <?php include './component/panel.php'; ?>
    <div class="content">

      <h2>Añadir nuevo usuario</h2>
      
        <form action="./server/add_user.php" method="post">
        <div class="form-user-add">
          <label for="user">user:</label>
          <input type="text" id="user" name="user" required>
          <br>
          <label for="password">password:</label>
          <input type="password" id="password" name="password" required>
          <br>
          <input class="btn-user" type="submit" value="Add User">
        </div>

        </form>
      

      <hr>

      <h2>Usuarios</h2>
      <table class="table">
        <thead>
          <tr>
            <th class="table-news-th">ID</th>
            <th class="table-news-th">user</th>
            <th class="table-news-th">password</th>
            <th class="table-news-th"></th>
          </tr>
        </thead>
          <?php
          require "./server/auth.php";

          // Fetch users from the database
          $sql = "SELECT id, user, password FROM user";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
              echo "<tr><td class='table-news-td'>" . $row["id"] . "</td><td>" . $row["user"] . "</td><td>" . $row["password"] . "</td>
              <td><a href='./server/delete_user.php?id=" . $row["id"] . "'>Delete</a></td>
              </tr>";
            }
          } else {
            echo "<tr><td colspan='4' class='table-news-td'>Sin usarios</td></tr>";
          }

          $conn->close();
          ?>
      </table>
    </div>
</body>

</html>