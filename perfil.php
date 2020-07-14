
<html>

<head>
  <title>Perfil</title>
  <?php require("head.php") ?>
  <style>
    body {
      background-image: url(img/background_register.jpg);
      background-attachment: fixed;
      background-size: 100vw 100vh;
    }

    #form {
      margin-top: 13vh;
      background-color: rgba(255, 255, 255, 0.8);
      width: 100vh;
    }
  </style>
</head>

<body>
  <?php include 'Connections/Users/selectOne.php';?>
  <div><?php require("menu_Logged.php") ?></div>

  <div class="card text-center container" id="form">
    <div class="card-header">
      <h3 class="card-title">Perfil</h3>
    </div>
    <div class="card-body">
      <form class="row g-3 container m-auto">
        <div class="col-md-6">
          <label for="inputName" class="form-label">Name:</label>
          <label class="form-label"><?php echo $name;?></label>
        </div>
        <div class="col-md-6">
          <label for="inputLastName" class="form-label">Last Name:</label>
          <label class="form-label"><?php echo $last;?></label>
        </div>
        <div class="col-md-6">
          <label for="inputCurp" class="form-label">Curp</label>
          <label class="form-label"><?php echo $curp;?></label>
        </div>
        <div class="col-md-6">
          <label for="inputCurp" class="form-label">Type User</label>
          <label class="form-label"><?php echo $typeUser;?></label>
        </div>
        <div class="col-md-16">
          <label for="inputEmail" class="form-label">Email</label>
          <label class="form-label"><?php echo $email;?></label>
        </div>
      </form>
      <a href="pdf/template.php" target="_blank" class="btn btn-success">Generate Report</a>
    </div>
  </div>

</body>

</html>