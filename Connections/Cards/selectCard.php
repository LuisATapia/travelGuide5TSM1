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

        if(!isset($row))
        {
            $nh=$row[0]->numHexadecimal;
            $nd=$row[0]->numDecimal;
            $sol="";
        }else
        {
            $nh="Sin Asignar";
            $nd="Sin Asignar";
            $sol="Solicita una asignacion";
        }
        //header("Location: ../../menu_Master.php");
    } catch (MongoDB\Driver\Exception\Exception $e) {
        die("Error Encountered:" . $e);
    }