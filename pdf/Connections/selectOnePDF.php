<?php
    session_start();
    include 'cn.php';
    $id=$_SESSION['idUser'];

    $filter = [
        '_id' => $id,
    ];
    $query = new MongoDB\Driver\Query($filter);

    try {
        $result = $manager->executeQuery($dbname, $query);
        $row=$result->toArray();
        $name=$row[0]->name;
        $last=$row[0]->lastname;
        $curp=$row[0]->curp;
        //header("Location: ../../menu_Master.php");
    } catch (MongoDB\Driver\Exception\Exception $e) {
        die("Error Encountered:" . $e);
    }