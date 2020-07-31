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
<?php 
try{
include 'Connections/Cars/selectCar.php';
}catch(Exception $e)
{
    echo "Error en:".$e;
}
?>
    <div><?php require("menu_Logged.php") ?></div>
    <div class="card text-center container" id="form">
        <div class="card-header">
            <h3 class="card-title">My Car</h3>
        </div>
        <div class="card-body">
            <form class="row g-3 container m-auto" name="editCar" action="Connections/Cars/assignC.php" method="POST">
                <div class="col-md-12">
                    <label for="inputNiv" class="form-label"><strong>Niv:</strong></label>
                    <label class="form-label"> <?php echo $niv;?> </label>
                </div>
                <div class="col-md-6">
                    <label for="inputModel" class="form-label"><strong>Model:</strong></label>
                    <label class="form-label"> <?php echo $model;?> </label>
                </div>
                <div class="col-md-6">
                    <label for="inputPlate" class="form-label"><strong>Plate:</strong></label>
                    <label class="form-label"> <?php echo $plate;?> </label>
                </div>
                <div class="col-md-6">
                    <label for="inputYear" class="form-label"><strong>Year:</strong></label>
                    <label class="form-label"> <?php echo $year;?> </label>
                </div>
                <div class="col-md-6">
                    <label for="inputColor" class="form-label"><strong>Color:</strong></label>
                    <label class="form-label"> <?php echo $color;?> </label>
                </div>
                        <div class="col-md-12"><label for="inputHex" class="form-label"><strong><?php echo $sol; ?></strong></label></div>
            </form>
        </div>
    </div>
    <?php
    
    ?>
</body>

</html>