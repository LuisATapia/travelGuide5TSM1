<html>

<head>
    <title>My Car</title>
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
<?php include 'Connections/Cars/selectCar.php';?>
    <div><?php require("menu_Logged.php") ?></div>
    <div class="card text-center container" id="form">
        <div class="card-header">
            <h3 class="card-title">My Car</h3>
        </div>
        <div class="card-body">
            <form class="row g-3 container m-auto" name="editCar" action="Connections/Cars/assignC.php" method="POST">
                <div class="col-md-12">
                    <label for="inputNiv" class="form-label">Niv:</label>
                    <label class="form-label"> <?php echo $niv;?> </label>
                </div>
                <div class="col-md-6">
                    <label for="inputModel" class="form-label">Model:</label>
                    <label class="form-label"> <?php echo $model;?> </label>
                </div>
                <div class="col-md-6">
                    <label for="inputPlate" class="form-label">Plate:</label>
                    <label class="form-label"> <?php echo $plate;?> </label>
                </div>
                <div class="col-md-6">
                    <label for="inputYear" class="form-label">Year:</label>
                    <label class="form-label"> <?php echo $year;?> </label>
                </div>
                <div class="col-md-6">
                    <label for="inputColor" class="form-label">Color:</label>
                    <label class="form-label"> <?php echo $color;?> </label>
                </div>
            </form>
        </div>
    </div>

</body>

</html>