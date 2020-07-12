<?php
session_start();
if (!isset($_SESSION['typeUser']) || isset($_SESSIOn['idUser'])) {
  header("Location: sing_in.php");
} else {
  echo $_SESSION['idUser'];
  echo $_SESSION['typeUser'];
}
?>
<html>
<head>
  <?php require("head.php") ?>
  <style>
    #trg1 {
      margin-top: 10%;
      margin-left: 13%;
      float: left;
    }

    #cards {
      margin-right: 10px;
      border-radius: 10px;
      background-color: #007bff;
      transition: all 0.2s;
    }

    #cards:hover {
      background-color: white;

    }

    body {
      background-image: url(img/background_menu.jpg);
      background-attachment: fixed;
      background-size: 100vw 100vh;
    }

    a {
      text-decoration: none;
      color: black;
    }
  </style>
  <?php require 'menu_Logged.php'; ?>
</head>

<body>
  <div class="card-body">
    <h1 class="card-title text-center mt-5">Menu</h1>
  </div>
  <div class="container-fluid container card-group" id="trg1">

    <div class=" text-body mb-3 col-md-6" style="width: 12rem;padding:12px;" id="cards">
      <!--VALIDACIÓN TIPO USUARIO-->
      <?php
      if ($_SESSION['typeUser'] == "user") {
      ?>
        <a href="perfil.php" />
      <?php
      } else {
      ?>
        <a href="show_Users.php">
        <?php } ?>
        <img src="img/user_management.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title text-center">User Management</h4>
        </div>
        </a>
    </div>
    <div class=" text-body  mb-3 col-md-6" style="width: 12rem;padding:12px;" id="cards">
      <!--VALIDACIÓN USER-->
      <?php
      if ($_SESSION['typeUser'] == "user") {
      ?>
        <a href="seeCard.php" />
      <?php
      } else {
      ?>
        <a href="show_Cards.php">
        <?php } ?>
        <img src="img/card_management.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title text-center">Card Management</h4>
        </div>
        </a>
    </div>
    <div class=" text-body  mb-3 col-md-6" style="width: 12rem;padding:12px;" id="cards">
      <?php
      if ($_SESSION['typeUser'] == "user") {
      ?>
        <a href="seeCar.php">
        <?php
      } else {
        ?>
          <a href="show_Cars.php">
          <?php } ?>
          <img src="img/car_management.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title text-center">Car Management</h4>
          </div>
          </a>
    </div>
    <div class=" text-body  mb-3 col-md-6" style="width: 12rem;padding:12px;" id="cards">
      <a href="show_TollBooth.php">
        <img src="img/booth_management.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title text-center">Toll Booth Management</h4>
        </div>
      </a>
    </div>
    <div class=" text-body  mb-3 col-md-6" style="width: 12rem;padding:12px;" id="cards">
      <a href="show_Travels.php">
        <img src="img/travel_management.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title text-center">Travel Activity Management</h4>
        </div>
      </a>
    </div>
  </div>
</body>
</html>