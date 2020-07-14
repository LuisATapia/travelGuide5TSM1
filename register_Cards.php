<html>

<head>
  <title>Register Cards</title>
  <?php require("head.php");  ?>
  <?php
  session_start();
  if (!isset($_SESSION['idUser']) || $_SESSION['typeUser'] == "user") {
    header("Location: menu_Master.php");
  }
  ?>
  <style>
    body {
      background-image: url(img/background_register_Cards.jpg);
      background-attachment: fixed;
      background-size: 100vw 100vh;
    }

    #form {
      margin-top: 13vh;
      background-color: rgba(255, 255, 255, 0.5);
      width: 100vh;
    }
  </style>
  <script src="js/registerValidate.js"></script>
</head>

<body>
  <div><?php require("menu_Logged.php") ?></div>
  <div class="card text-center container" id="form">
    <div class="card-header">
      <h3 class="card-title">Register a Card</h3>
    </div>
    <div class="card-body">
      <form class="row g-3 container m-auto" name="registerCad" method="POST" action="Connections/Cards/registerCard.php">
        <div class="col-md-4">
          <label for="inputHex" class="form-label">Number Hex:</label>
          <input type="text" class="form-control" id="cardHex" name="cardHex" require="">
        </div>
        <div class="col-md-4">
          <label for="inputDec" class="form-label">Number Dec:</label>
          <input type="text" class="form-control" id="cardDec" name="cardDec" require="">
        </div>
        <div class="col-md-4">
          <label for="inputIdUser" class="form-label">Id User:</label>
          <input type="text" class="form-control" id="cardIdUser" name="cardIdUser" require="">
        </div>
        <div class="col-12">
          <Input type="submit" class="btn btn-primary" onclick="" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>

</html>