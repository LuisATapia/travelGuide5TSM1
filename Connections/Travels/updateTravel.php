<?php
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
            'idUser'=>$idUser
        ]
    );
    $result = $manager->executeBulkWrite($dbname, $bulk);
    header("Location: ../../show_Travels.php");
} catch (MongoDB\Driver\Exception\Exception $e) {
    die("Error:" . $e);
}
