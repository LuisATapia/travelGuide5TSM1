<html>

<head>
    <title>Show Users</title>
    <?php require("head.php"); session_start(); ?>

    <?php
        if(!isset($_SESSION['idUser']) || $_SESSION['typeUser']=="user")
        {
           header("Location: menu_Master.php"); 
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

        i {
            padding: 15px;
        }
    </style>

</head>

<body background="">
    <?php require("menu_Logged.php") ?>
    <div class="card text-center container" id="form">
        <div class="row" style="padding:15">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-success" href="register_Users.php">Add User<i class="fas fa-user-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="container mt-5 pt-5">
            <div class="row">
                <h2>Users List</h2>

                <?php
                try {
                    include 'Connections/Users/db.inc.php';
                    $query = new MongoDB\Driver\Query([]);

                    $query = new MongoDB\Driver\Query([]);
                    $rows = $manager->executeQuery($dbname, $query);

                    echo "<table class='table' id='tabla'>
                <thead>
                <tr>
                <input id='buscar' type='text' class='form-control' placeholder='Search...' />
                </tr>
                <tr>
                <th>Name</th>
                <th>LastName</th>
                <th>TypeUser</th>
                <th>Email</th>
                <th>Actions</th>
                </tr>
                </thead>";

                    foreach ($rows as $row) {
                        if ($_SESSION['typeUser'] == "standard") {

                            echo "<tr>" .
                                "<td>" . $row->name . "</td>" .
                                "<td>" . $row->lastname . "</td>" .
                                "<td>" . $row->typeUser . "</td>" .
                                "<td>" . $row->email . "</td>" .
                                "</tr>";
                        } else {


                            echo "<tr>" .
                                "<td>" . $row->name . "</td>" .
                                "<td>" . $row->lastname . "</td>" .
                                "<td>" . $row->typeUser . "</td>" .
                                "<td>" . $row->email . "</td>" .
                                "<td><a class='btn btn-info' href='editUsers.php?id=" . $row->_id .
                                "&nameUser=" . $row->name .
                                "&lastNameUSer=" . $row->lastname .
                                "&curp=" . $row->curp .
                                "&typeUser=" . $row->typeUser .
                                "&emailUser=" . $row->email .
                                "&password=" . $row->password .
                                "'>Edit</a> " .
                                "<a class='btn btn-danger' href='Connections/Users/dropUser.php?id=" . $row->_id . "'>Delete</a></td>" .
                                "</tr>";
                        }
                    }

                    echo "</table>";
                } catch (MongoDB\Driver\Exception\Exception $e) {
                    //die("Error Encountered: ".$e);
                }
                ?>
            </div>
        </div>
        <script src="js/looking.js"></script>
</body>

</html>