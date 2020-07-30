<html>

<head>
  <title>Register</title>
  <?php
  session_start();
  if (!isset($_SESSION['idUser'])) {
    include 'menu_Logged.php';
  } 
  else {
    include 'menu_Standart.php';
  }
  ?>
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
  <script src="js/registerValidate.js"></script>
</head>

<body>
  <div class="card text-center container" id="form">
    <div class="card-header">
      <h3 class="card-title">Register a new User</h3>
    </div>
    <div class="card-body">
      <form class="row g-3 container m-auto" name="registerUser" method="POST" action="Connections/Users/registerUser.php">
        <div class="col-md-6">
          <label for="inputName" class="form-label">Name:</label>
          <input type="text" class="form-control" id="inputName" name="inputName" require>
        </div>
        <div class="col-md-6">
          <label for="inputLastName" class="form-label">Last Name:</label>
          <input type="text" class="form-control" id="inputLastName" name="inputLastName" require>
        </div>
        <div class="col-md-6">
          <label for="inputCurp" class="form-label">Curp</label>
          <input type="text" class="form-control" id="inputCurp" name="inputCurp" require>
        </div>
        <div class="col-md-6">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail" name="inputEmail" require>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword" name="inputPassword" require>
        </div>
        <div class="col-md-6">
          <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="inputConfirmPassword" require>
        </div>
        <div class="col-12">
          <Input type="submit" class="btn btn-primary" onclick="registerUsers()" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>

</html>