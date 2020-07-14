<html>

<head>
  <title>Show Travels</title>
  <?php require("head.php");
  session_start(); ?>

  <?php
  if (!isset($_SESSION['idUser'])) {
    header("Location: menu_Master.php");
  }
  ?>
  <style>
    body {
      background-image: url(img/background_register_travel.jpg);
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
          <a class="btn btn-success" href="register_Travel.php">Add Travel<i class="fas fa-route"></i></i></i></a>
        </div>
      </div>
    </div>
    <div class="container mt-5 pt-5">
      <div class="row">
        <h2>Travels List</h2>

        <?php
        try {
          $rows = [];
          include 'Connections/Travels/db.travels.php';
          $query = new MongoDB\Driver\Query([]);

          $rows = $manager->executeQuery($dbname, $query);

          echo "<table class='table' id='tabla'>
                <thead>
                <tr>
                <input id='buscar' type='text' class='form-control' placeholder='Search...' />
                </tr>
                <tr>
                <th>Number Card</th>
                <th>Name Booth</th>
                <th>Toll</th>
                <th>date</th>
                <th>Actions</th>
                </tr>
                </thead>";

          foreach ($rows as $row) {
            if($_SESSION['typeUser']=="master")
            {
              echo "<tr>" .
              "<td>" . $row->numCard . "</td>" .
              "<td>" . $row->booth . "</td>" .
              "<td>" . $row->toll . "</td>" .
              "<td>" .  $row->date . "</td>" .
              "<td><a class='btn btn-info' href='editTravel.php?id=" . $row->_id .
              "&numCard=" . $row->numCard .
              "&booth=" . $row->booth .
              "&toll=" . $row->toll .
              "'>Edit</a> " .
              "<a class='btn btn-danger' href='Connections/Travels/dropTravel.php?id=" . $row->_id . "'>Delete</a></td>" .
              "</tr>";
            }else if($_SESSION['typeUser']=="standard")
            {
              echo "<tr>" .
              "<td>" . $row->numCard . "</td>" .
              "<td>" . $row->booth . "</td>" .
              "<td>" . $row->toll . "</td>" .
              "<td>" .  $row->date . "</td>" .
              "</tr>";
            }

            if ($_SESSION['typeUser'] == "user") {
              if ($row->idUser == $_SESSION['idUser']) {
                echo "<tr>" .
                  "<td>" . $row->numCard . "</td>" .
                  "<td>" . $row->booth . "</td>" .
                  "<td>" . $row->toll . "</td>" .
                  "<td>" .  $row->date . "</td>" .
                  "</tr>";
              }else{

              }
            }
          }


          echo "</table>";
        } catch (MongoDB\Driver\Exception\Exception $e) {
          die("Error Encountered: " . $e);
        }
        ?>
      </div>
    </div>
    <script src="js/looking.js"></script>
</body>

</html>