<html>

<head>
    <title>Assing Car</title>
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
    <div><?php require("menu_Logged.php") ?></div>
    <div class="card text-center container" id="form">
        <div class="card-header">
            <h3 class="card-title">Assing Car</h3>
        </div>
        <div class="card-body">
            <form class="row g-3 container m-auto" name="editCad" method="POST" action="Connections/Cards/assingC.php">
                <div class="col-md-12">
                    <label for="inputDec" class="form-label">Email User:</label>
                    <input type="email" class="form-control" id="inputEmail" name="emailUser" placeholder="Enter Email Address">
                </div>
                <div class="col-md-4">
                    <input type="hidden" class="form-control" id="input" name="idCard" value=<?php echo $_GET["id"]; ?>>
                </div>

                <div class="col-md-4">
                    <input type="hidden" class="form-control" id="inputHex" name="updateHex" value=<?php echo $_GET["numHex"]; ?>>
                </div>
                <div class="col-md-4">
                    <input type="hidden" class="form-control" id="inputDec" name="updateDec" value=<?php echo $_GET["numDec"]; ?>>
                </div>
                <div class="col-12">
                    <Input type="submit" class="btn btn-primary" onclick="" value="Save">
                </div>

            </form>
        </div>
    </div>

</body>

</html>