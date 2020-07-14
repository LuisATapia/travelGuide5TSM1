<html>

<head>
  <title>Show TollBooth</title>
  <?php require("head.php")  ?>
  <style>
    body {
      background-image: url(img/background_register_tollBooth.jpg);
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
  <?php
  session_start(); 
  require("menu_Logged.php") ?>
  <div class="card text-center container" id="form">
    <div class="row" style="padding:15">
      <div class="col-lg-12 margin-tb">
        <div class="pull-right">
          <?php
          if($_SESSION['typeUser'] != "user")
          {
          ?>
          <a class="btn btn-success" href="register_TolBooth.php">Add TollBooth<i class="fas fa-cash-register"></i></i></i></a>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="container mt-5 pt-5">
      <div class="row">
        <h2>TollBooth List</h2>

        <?php
        try {
          $rows = [];
          include 'Connections/Booth/db.booth.php';
          $query = new MongoDB\Driver\Query([]);

          $rows = $manager->executeQuery($dbname, $query);

          echo "<table class='table' id='tabla'>
                <thead>
                <tr>
                <input id='buscar' type='text' class='form-control' placeholder='Search...' />
                </tr>
                <tr>
                <th>Nombre</th>
                <th>Km</th>
                <th>Actions</th>
                </tr>
                </thead>";

          foreach ($rows as $row) {
            if($_SESSION['typeUser'] == "standard")
            {
              echo "<tr>" .
              "<td>" . $row->name . "</td>" .
              "<td>" . $row->km . "</td>" .
              "</tr>";
            }else{
            echo "<tr>" .
              "<td>" . $row->name . "</td>" .
              "<td>" . $row->km . "</td>" .
              "<td><a class='btn btn-info' href='editTollBooth.php?id=" . $row->_id .
              "&nameBooth=" . $row->name .
              "&kmBooth=" . $row->km .
              "'>Edit</a> " .
              "<a class='btn btn-danger' href='Connections/Booth/dropBooth.php?id=" . $row->_id . "'>Delete</a></td>" .
              "</tr>";
            }
          }

          echo "</table>";
        } catch (MongoDB\Driver\Exception\Exception $e) {
          die("Error Encountered: ".$e);
        }
        ?>
      </div>
    </div>
    <script src="js/looking.js"></script>
</body>

</html>