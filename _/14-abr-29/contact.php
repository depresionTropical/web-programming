<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact</title>
  <link rel="stylesheet" href="asset/style.css">
  <link rel="stylesheet" href="asset/style-contact.css">
</head>

<body>
  <?php include 'components/header.php'; ?>
  <div class="request">
    <div class="basic">
      <h2>Request now</h2>
    </div>
  </div>
  <div class="basic container ">
    <div class="form-text">
      <h2>
        Beatifully designed, print-ready massage gift cerificate

      </h2>
      <p>Leave your personal data, phone, select the desirable service and suitable time. leafe a request and check the
        emailve</p>
      <div class="forms">
        <form action="action.php" method="post">
          <div class="form-card">
            <input type="text" name="email" placeholder="Enter your email" required>
            <select name="services" id="services" required>
              <option value="1">High </option>
              <option value="2">Spa</option>
              <option value="3">Sauna</option>
            </select>
          </div>
          <div class="form-card" >
            <input type="number" name="phone" placeholder="Enter your phone number"required>
            <select name="time" id="time">
              <option value="10">10:00</option>
              <option value="11">11:00</option>
              <option value="12">12:00</option>
              <option value="13">13:00</option>
              <option value="14">14:00</option>
              <option value="15">15:00</option>
              <option value="16">16:00</option>
              <option value="17">17:00</option>

            </select>
          </div><br>
          <input type="submit" name="sent" value="Leave a Request">
        </form>

      </div>
    </div>

  </div>
  <?php include 'components/footer.php'; ?>
</body>

</html>