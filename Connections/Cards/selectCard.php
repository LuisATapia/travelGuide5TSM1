<?php
    session_start();
    include 'db.cards.php';
    $id=$_SESSION['idUser'];

    $filter = [
        'idUser' => $id,
    ];
    $query = new MongoDB\Driver\Query($filter);

    try {
        $result = $manager->executeQuery($dbname, $query);
        $row=$result->toArray();
        $nh=$row[0]->numHexadecimal;
        $nd=$row[0]->numDecimal;
        //header("Location: ../../menu_Master.php");
    } catch (MongoDB\Driver\Exception\Exception $e) {
        die("Error Encountered:" . $e);
    }