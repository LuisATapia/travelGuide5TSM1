<html>
<head>
	<title>Cars</title>
	<?php require("head.php")  ?>
    <style>
        body{
            background-image: url(img/background_register.jpg);
            background-attachment: fixed;
            background-size: 100vw 100vh;
        }
        #form{
            margin-top: 13vh;
            background-color: rgba(255,255,255,0.8);
            width: 120vh;
        }
        i{
            padding: 15px;
        }
    </style>
</head>
<body>
	<?php require("menu_Logged.php") ?>
    <div class="card text-center container" id="form">
        <div class="row" style="padding:15">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-success" href="register_Cars.php">Add Car<i class="fas fa-car"></i></a>
                </div>
            </div>
        </div>
       <div class="container mt-5 pt-5">
        <div class="row">
            <h2>Car List</h2>
            <input id="buscar" type="text" class="form-control" placeholder="Escribe un caracter" />
            <?php 
            try{
            	$rows=[];
                include 'Connections/Cars/db.cars.php';
                $query = new MongoDB\Driver\Query([]);

                $rows = $manager->executeQuery($dbname, $query);

                echo "<table class='table' id='tabla'>
                <thead>
                <th>Niv</th>
                <th>Model</th>
                <th>Year</th>
                <th>Plate</th>
                <th>Color</th>
                <th>Action</th>
                </thead>";
                
                foreach($rows as $row){
                    if($row->idUser!="")
                    {
                        echo "<tr>".
                        "<td>".$row->niv."</td>".
                        "<td>".$row->model."</td>".
                        "<td>".$row->year."</td>".
                        "<td>".$row->plate."</td>".    
                        "<td>".$row->color."</td>".
                        "<td><a class='btn btn-info' href='editCars.php?id=".$row->_id.
                        "&niv=".$row->niv.
                        "&model=".$row->model.
                        "&year=".$row->year.
                        "&plate=".$row->plate.
                        "&color=".$row->color.
                        "'>Edit</a> ".
                        "<a class='btn btn-danger' href='Connections/Cars/dropCar.php?id=".$row->_id."'>Delete</a></td>".
                    "</tr>";
                    }else{
                        echo "<tr>".
                        "<td>".$row->niv."</td>".
                        "<td>".$row->model."</td>".
                        "<td>".$row->year."</td>".
                        "<td>".$row->plate."</td>".    
                        "<td>".$row->color."</td>".
                        "<td><a class='btn btn-info' href='editCars.php?id=".$row->_id.
                        "&niv=".$row->niv.
                        "&model=".$row->model.
                        "&year=".$row->year.
                        "&plate=".$row->plate.
                        "&color=".$row->color.
                        "'>Edit</a> ".
                        "<a class='btn btn-danger' href='Connections/Cars/dropCar.php?id=".$row->_id."'>Delete</a> ".
                        "<a class='btn btn-primary' href='assignCar.php?id=".$row->_id.
                        "&niv=".$row->niv.
                        "&model=".$row->model.
                        "&year=".$row->year.
                        "&plate=".$row->plate.
                        "&color=".$row->color.
                        "'>Assign Car</a></td>".
                    "</tr>";
                    }
                    
                    
                }

                echo"</table>";
            }   catch(MongoDB\Driver\Exception\Exception $e){
                //die("Error Encountered: ".$e);
            }
            ?>
        </div>
    </div>
    <script  src="js/looking.js"></script>
</body>
</html>