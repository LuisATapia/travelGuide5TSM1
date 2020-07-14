<html>

<head>
  <title>Edit Cars</title>
  <?php require("head.php"); ?>
  <?php
  session_start();
  if (!isset($_SESSION['idUser']) || $_SESSION['typeUser'] != "master") {
    header("Location: menu_Master.php");
  }
  ?>
  <style>
    body {
      background-image: url(img/background_register_cars.jpg);
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
      <h3 class="card-title">Edit a Car</h3>
    </div>
    <div class="card-body">
      <form class="row g-3 container m-auto" name="editCar" action="Connections/Cars/updateCar.php" method="POST">
        <div class="col-md-12">
          <label for="inputNiv" class="form-label">Niv:</label>
          <input type="text" class="form-control" id="inputNiv" name="updateNiv" value=<?php echo $_GET["niv"]; ?>>
        </div>
        <div class="col-md-6">
          <label for="inputModel" class="form-label">Model:</label>
          <input type="text" class="form-control" id="inputModel" name="updateModel" value=<?php echo $_GET["model"]; ?>>
        </div>
        <div class="col-md-6">
          <label for="inputPlate" class="form-label">Plate:</label>
          <input type="text" class="form-control" id="inputPlate" name="updatePlate" value=<?php echo $_GET["plate"]; ?>>
        </div>
        <div class="col-md-6">
          <label for="inputYear" class="form-label">Year:</label>
          <input type="text" class="form-control" id="inputYear" name="updateYear" value=<?php echo $_GET["year"]; ?>>
        </div>
        <div class="col-md-6">
          <label for="inputColor" class="form-label">Color:</label>
          <input type="text" class="form-control" id="inputColor" name="updateColor" value=<?php echo $_GET["color"]; ?>>
        </div>
        <div class="col-md-6">
          <input type="hidden" class="form-control" id="inputId" name="idCar" value=<?php echo $_GET["id"]; ?>>
        </div>
        <div class="col-md-4">

          <?php if ($_GET["idU"] == "") { ?>
            <input type="hidden" class="form-control" id="inputId" name="idCar" value="">
          <?php } else { ?>
            <input type="hidden" class="form-control" id="inputId" name="idCar" value=<?php echo $_GET["idU"]; ?>>
          <?php
          } ?>
        </div>
        <div class="col-12">
          <input type="submit" class="btn btn-primary" value="Save">
        </div>
      </form>
    </div>
  </div>

</body>

</html>