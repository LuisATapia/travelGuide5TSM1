<html>

<head>
  <title>Register Cars</title>
  <?php require("head.php"); ?>
  <?php
    session_start();
        if(!isset($_SESSION['idUser']) || $_SESSION['typeUser']=="user")
        {
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
  <script src="js/registerValidate.js"></script>
</head>

<body>
  <div><?php require("menu_Logged.php") ?></div>
  <div class="card text-center container" id="form">
    <div class="card-header">
      <h3 class="card-title">Register a new Car</h3>
    </div>
    <div class="card-body">
      <form class="row g-3 container m-auto" name="registerCar" method="POST" action="Connections/Cars/registerCar.php">
        <div class="col-md-12">
          <label for="inputNiv" class="form-label">Niv:</label>
          <input type="text" class="form-control" id="inputNiv" name="inputNiv">
        </div>
        <div class="col-md-6">
          <label for="inputModel" class="form-label">Model:</label>
          <input type="text" class="form-control" id="inputModel" name="inputModel">
        </div>
        <div class="col-md-6">
          <label for="inputPlate" class="form-label">Plate:</label>
          <input type="text" class="form-control" id="inputPlate" name="inputPlate">
        </div>
        <div class="col-md-6">
          <label for="inputYear" class="form-label">Year:</label>
          <input type="text" class="form-control" id="inputYear" name="inputYear">
        </div>
        <div class="col-md-6">
          <label for="inputColor" class="form-label">Color:</label>
          <input type="text" class="form-control" id="inputColor" name="inputColor">
        </div>
        <div class="col-12">
        <Input type="submit" class="btn btn-primary" onclick="validateCar" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>

</html>