<html>

<head>
  <title>Edit Cards</title>
  <?php require("head.php");  ?>
  <?php
  session_start();
  if (!isset($_SESSION['idUser']) || $_SESSION['typeUser'] != "master") {
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
</head>

<body>
  <div><?php require("menu_Logged.php") ?></div>
  <div class="card text-center container" id="form">
    <div class="card-header">
      <h3 class="card-title">Edit a Card</h3>
    </div>
    <div class="card-body">
      <form class="row g-3 container m-auto" name="editCad" method="POST" action="Connections/Cards/updateCard.php">
        <div class="col-md-4">
          <label for="inputHex" class="form-label">Number Hex:</label>
          <input type="text" class="form-control" id="inputHex" name="updateHex" value=<?php echo $_GET["numHex"]; ?>> </div> <div class="col-md-4">
          <label for="inputDec" class="form-label">Number Dec:</label>
          <input type="text" class="form-control" id="inputDec" name="updateDec" value=<?php echo $_GET["numDec"]; ?>>
        </div>
        <div class="col-md-4">

          <input type="hidden" class="form-control" id="input" name="id" value=<?php echo $_GET["id"]; ?>>
        </div>
        <div class="col-md-4">

          <input type="hidden" class="form-control" id="input" name="iduser" value=<?php echo $_GET["idUser"]; ?>>
        </div>
        <div class="col-12">
          <Input type="submit" class="btn btn-primary" onclick="" value="Save">
        </div>
      </form>
    </div>
  </div>

</body>

</html>