<html>

<head>
  <title>Sing In</title>
  <?php require("head.php") ?>
  <link rel="stylesheet" type="text/css" href="styles/styles_login.css">
  <script src="js/registerValidate.js"></script>
</head>

<body>

  <style>
    body {
      background-image: url(img/background_login.jpg);
      background-attachment: fixed;
      background-size: 100vw 100vh;
    }
  </style>
  <div>
    <?php require("menu_Standart.php"); ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="POST" action="Connections/Users/login.php">
              <div class="form-label-group">
                <input type="email" id="loginEmail" name="loginEmail"class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="loginPassword" name="loginPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <Input class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Sing in" onclick="validateLogin()">
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>