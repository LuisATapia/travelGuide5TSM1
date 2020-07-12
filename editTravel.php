<html>

<head>
  <title>Edit Cards</title>
  <?php require("head.php")  ?>
  <style>
    body {
      background-image: url(img/background_register_travel.jpg);
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
      <h3 class="card-title">Edit a Travel</h3>
    </div>
    <div class="card-body">
      <form class="row g-3 container m-auto" name="editTravel" method="POST" action="Connections/Travels/updateTravel.php">
        <div class="col-md-4">
          <label for="inputHex" class="form-label">Number Card:</label>
          <input type="text" class="form-control" id="inputHex" name="updateHex" value=<?php echo $_GET["numCard"]; ?>>
        </div>
        <div class="col-md-4">
          <label for="inputBooth" class="form-label">Booth:</label>
          <input type="text" class="form-control" id="inputBooth" name="updateBooth" value=<?php echo $_GET["booth"]; ?>>
        </div>
        <div class="col-md-4">
          <label for="inputToll" class="form-label">Toll:</label>
          <input type="text" class="form-control" id="inputToll" name="updateToll" value=<?php echo $_GET["toll"]; ?>>
        </div>
        <div class="col-md-4">
          <input type="hidden" class="form-control" id="id" name="id" value=<?php echo $_GET["id"]; ?>>
        </div>
        <div class="col-12">
          <input type="submit" class="btn btn-primary" value="Save">
        </div>
      </form>
    </div>
  </div>

</body>

</html>