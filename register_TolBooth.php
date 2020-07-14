<html>

<head>
  <title>Register TollBooth</title>
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
      background-image: url(img/background_register_tollBooth.jpg);
      background-attachment: fixed;
      background-size: 100vw 100vh;
    }

    #form {
      margin-top: 13vh;
      background-color: rgba(50, 50, 50, 0.5);
      width: 100vh;
      color: white;
    }
  </style>
  <script src="js/registerValidate.js"></script>
</head>

<body>
  <div><?php require("menu_Logged.php") ?></div>
  <div class="card text-center container" id="form">
    <div class="card-header">
      <h3 class="card-title">Register a TolBooth</h3>
    </div>
    <div class="card-body">
      <form class="row g-3 container m-auto" name="registerTollBooth" method="POST" action="Connections/Booth/registerBooth.php">
        <div class="col-md-6">
          <label for="inputName" class="form-label">Name:</label>
          <input type="text" class="form-control" id="bootName" name="bootName" require>
        </div>
        <div class="col-md-6">
          <label for="inputKM" class="form-label">KM:</label>
          <input type="text" class="form-control" id="bootKm" name="bootKm"require>
        </div>
        <div class="col-12">
          <Input type="submit" class="btn btn-primary" onclick="validateBooth()" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>

</html>