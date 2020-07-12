<html>

<head>
  <title>Edit Users</title>
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
  <div><?php require("menu_Logged.php") ?></div>

  <div class="card text-center container" id="form">
    <div class="card-header">
      <h3 class="card-title">Edit a User</h3>
    </div>
    <div class="card-body">
      <form class="row g-3 container m-auto" name="editUser" method="POST" action="Connections/Users/updateUser.php">
        <div class="col-md-6">
          <label for="inputName" class="form-label">Name:</label>
          <input type="text" class="form-control" id="inputName" name="updateName" value=<?php echo $_GET["nameUser"]; ?>>
        </div>
        <div class="col-md-6">
          <label for="inputLastName" class="form-label">Last Name:</label>
          <input type="text" class="form-control" id="inputLastName" name="updateLast" value=<?php echo $_GET["lastNameUSer"]; ?>>
        </div>
        <div class="col-md-6">
          <label for="inputCurp" class="form-label">Curp</label>
          <input type="text" class="form-control" id="inputCurp" name="updateCurp" value=<?php echo $_GET["curp"]; ?>>
        </div>
        <div class="col-md-6">
          <label for="inputCurp" class="form-label">Type User</label>
          <input type="hidden" class="form-control" id="inputype" name="updateType" value=<?php echo $_GET["typeUser"]; ?>>
          <select name="updateType" class="form-control">
            <option value="user">Common user</option>
            <option value="standard">Standard user</option>
            <option value="master">Master user</option>
          </select>
        </div>
        <div class="col-md-16">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail" name="updateEmail" value=<?php echo $_GET["emailUser"]; ?>>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="updatePass">
        </div>
        <div class="col-md-6">
          <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="inputConfirmPassword4" name="updatePassc">
        </div>
        <div class="col-md-6">
          <input type="hidden" class="form-control" id="passRes" name="passRes" value=<?php echo $_GET["password"]; ?>>
        </div>
        <div class="col-md-6">
          <input type="hidden" class="form-control" id="id" name="id" value=<?php echo $_GET["id"]; ?>>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>