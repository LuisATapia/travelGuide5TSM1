<html>

<head>
  <title>Edit TollBooth</title>
  <?php require("head.php"); ?>
  <?php
  session_start();
  if (!isset($_SESSION['idUser']) || $_SESSION['typeUser'] != "master") {
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
</head>

<body>
<div><?php require("menu_Logged.php") ?></div>
  <div class="card text-center container" id="form">
    <div class="card-header">
      <h3 class="card-title">Edit a TolBooth</h3>
    </div>
    <div class="card-body"> 
      <form class="row g-3 container m-auto" name="editTollBooth" method="POST" action="Connections/Booth/updateBooth.php">
        <div class="col-md-6">
          <label for="inputName" class="form-label">Name:</label>
          <input type="text" class="form-control" id="inputName" name="updateName" value=<?php echo $_GET["nameBooth"];?>>
        </div>
        <div class="col-md-6">
          <label for="inputKM" class="form-label">KM:</label>
          <input type="text" class="form-control" id="inputKM" name="updateKm" value=<?php echo $_GET["kmBooth"];?>>
        </div>
        <div class="col-md-6">  
          <input type="hidden" class="form-control" id="id" name="id" value=<?php echo $_GET["id"];?>>
        </div>
        <div class="col-12">
          <input type="submit" class="btn btn-primary" value="Save">
        </div>
      </form>
    </div>
  </div>

</body>

</html>