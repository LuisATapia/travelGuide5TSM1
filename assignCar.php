<html>

<head>
    <title>Edit Cars</title>
    <?php require("head.php") ?>
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
</head>

<body>
    <div><?php require("menu_Logged.php") ?></div>
    <div class="card text-center container" id="form">
        <div class="card-header">
            <h3 class="card-title">Edit a Car</h3>
        </div>
        <div class="card-body">
            <form class="row g-3 container m-auto" name="editCar" action="Connections/Cars/assignC.php" method="POST">
                <div class="col-md-12">
                    <label for="inputDec" class="form-label">Email User:</label>
                    <input type="email" class="form-control" id="inputEmail" name="emailUser" placeholder="Enter Email Address">
                </div>
                <div class="col-md-12">
                    <input type="hidden" class="form-control" id="inputNiv" name="updateNiv" value=<?php echo $_GET["niv"]; ?>>
                </div>
                <div class="col-md-6">
                    <input type="hidden" class="form-control" id="inputModel" name="updateModel" value=<?php echo $_GET["model"]; ?>>
                </div>
                <div class="col-md-6">
  
                    <input type="hidden" class="form-control" id="inputPlate" name="updatePlate" value=<?php echo $_GET["plate"]; ?>>
                </div>
                <div class="col-md-6">
               
                    <input type="hidden" class="form-control" id="inputYear" name="updateYear" value=<?php echo $_GET["year"]; ?>>
                </div>
                <div class="col-md-6">
  
                    <input type="hidden" class="form-control" id="inputColor" name="updateColor" value=<?php echo $_GET["color"]; ?>>
                </div>
                <div class="col-md-6">
                    <input type="hidden" class="form-control" id="inputId" name="idCar" value=<?php echo $_GET["id"]; ?>>
                </div>
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </form>
        </div>
    </div>

</body>

</html>