<html>

<head>
  <title>Register Travels</title>
  <?php require("head.php");  ?>
  <?php
    session_start();
        if(!isset($_SESSION['idUser']))
        {
           header("Location: menu_Master.php"); 
        }
    ?> 
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
  <script src="js/registerValidate.js"></script>
</head>

<body>
  <div><?php require("menu_Logged.php") ?></div>
  <div class="card text-center container" id="form">
    <div class="card-header">
      <h3 class="card-title">Register a Travel</h3>
    </div>
    <div class="card-body">
      <form class="row g-3 container m-auto" name="registerTravel" method="POST" action="Connections/Travels/registerTravel.php">
        <div class="col-md-4">
          <label for="inputHex" class="form-label">Number Card:</label> 
          <input type="text" class="form-control" id="traHex" name="traHex"require>
        </div>
        <div class="col-md-4">
          <label for="inputBooth" class="form-label">Booth:</label>
          <input type="text" class="form-control" id="traBooth" name="traBooth"require>
        </div>
        <div class="col-md-4">
          <label for="inputToll" class="form-label">Toll:</label>
          <input type="text" class="form-control" id="traToll"name="traToll" require>
        </div>
        <div class="col-12">
          <Input type="submit" class="btn btn-primary" onclick="validateTrave" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>

</html>