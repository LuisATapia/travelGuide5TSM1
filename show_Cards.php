<html>
<head>
  <title>Show Cards</title>
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
      width: 100vh;
    }
    i{
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
          <a class="btn btn-success" href="register_Cards.php">Add Card<i class="fas fa-credit-card"></i></i></a>
        </div>
      </div>
    </div>
    <div class="container mt-5 pt-5">
      <div class="row">
        <h2>Cards List</h2>
        
        <?php 
        try{
        $rows=[];
        include 'Connections/Cards/db.cards.php';
        $query = new MongoDB\Driver\Query([]);

        $rows = $manager->executeQuery($dbname, $query);

        echo "<table class='table' id='tabla'>
          <thead>
            <tr>
              <input id='buscar' type='text' class='form-control' placeholder='Search...' />
            </tr>
            <tr>
              <th>Number Hexadecimal</th>
              <th>Number Decimal</th>
              <th>Actions</th>
            </tr>
          </thead>";
          
          foreach($rows as $row){
          echo "<tr>".
            "<td>".$row->numHexadecimal."</td>".
            "<td>".$row->numDecimal."</td>";
            if($row->idUser!="")
            {
              echo "<td>
              <a class='btn btn-info' href='editCards.php?id=".$row->_id.
              "&numHex=".$row->numHexadecimal.
              "&numDec=".$row->numDecimal.
              "&idUser=".$row->idUser.
              "'>Edit</a> ".
              "<a class='btn btn-danger' href='Connections/Cards/dropCard.php?id=".$row->_id."'>Delete</a></td>".
            "</tr>";
            } 
            else{
              echo "<td>
              <a class='btn btn-info' href='editCards.php?id=".$row->_id.
              "&numHex=".$row->numHexadecimal.
              "&numDec=".$row->numDecimal.
              "&idUser=".$row->idUser.
              "'>Edit</a> ".
              "<a class='btn btn-danger' href='Connections/Cards/dropCard.php?id=".$row->_id."'>Delete</a> ".
              "<a class='btn btn-primary' href='assignCard.php?id=".$row->_id.
              "&numHex=".$row->numHexadecimal.
              "&numDec=".$row->numDecimal.
              "'>Assign Card</a></td>".
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