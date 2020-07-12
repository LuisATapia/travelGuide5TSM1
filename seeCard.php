<html>

<head>
  <title>Card</title>
  <?php require("head.php")  ?>
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
<?php include 'Connections/Cards/selectCard.php';?>
  <div><?php require("menu_Logged.php") ?></div>
  <div class="card text-center container" id="form">
    <div class="card-header">
      <h3 class="card-title">My Card</h3>
    </div>
    <div class="card-body">
      <form class="row g-3 container m-auto">
        <div class="col-md-6">
          <label for="inputHex" class="form-label">Number Hex:</label><br>
          <label for="inputHex" class="form-label"><?php echo $nh; ?></label>
        </div>
        <div class="col-md-6">
          <label for="inputDec" class="form-label">Number Dec:</label><br>
          <label for="inputHex" class="form-label"><?php echo $nd; ?></label>
        </div>
        <div class="col-md-4">
      </form>
    </div>
  </div>

</body>

</html>