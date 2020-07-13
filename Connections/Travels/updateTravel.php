<?php

include '../Cards/db.cards.php';
    $num=$_POST["updateHex"];

    $filter = [
        'numDecimal' => $num
    ];
    $query = new MongoDB\Driver\Query($filter);

    try {
        $result = $manager->executeQuery($dbname, $query);
        $row=$result->toArray();
        $idUser=$row[0]->_id;
        //header("Location: ../../menu_Master.php");
    } catch (MongoDB\Driver\Exception\Exception $e) {
        die("Error Encountered:" . $e);
    }
/*********************** */
include 'db.travels.php';

$bulk = new MongoDB\Driver\BulkWrite;

$id = $_POST["id"];
$num=$_POST["updateHex"];
$name=$_POST["updateBooth"];
$toll=$_POST["updateToll"];

try {
    $bulk->update(
        ['_id' => new MongoDB\BSON\ObjectId($id)],
        [
            "numCard" => $num,
            'booth' => $name,
            'toll' => $toll,
            'idUser'=>$idUser,
            'date'=>date("Y-m-d H:i:s")
        ]
    );
    $result = $manager->executeBulkWrite($dbname, $bulk);
    header("Location: ../../show_Travels.php");
} catch (MongoDB\Driver\Exception\Exception $e) {
    die("Error:" . $e);
}
