<?php
include 'db.cars.php';
$bulk = new MongoDB\Driver\BulkWrite;

$niv = $_POST["inputNiv"];
$model = $_POST["inputModel"];
$plate = $_POST["inputPlate"];
$year = $_POST["inputYear"];
$color = $_POST["inputColor"];

$car = [
    '_id' => new MongoDB\BSON\ObjectId,
    'niv' => $niv,
    'model' => $model,
    'plate' => $plate,
    'year'=>$year,
    'color' => $color,
    'idUser'=>null
];

try {
    $bulk->insert($car);
    $result = $manager->executeBulkWrite($dbname, $bulk);
    header("Location: ../../show_Cars.php");
} catch (MongoDB\Driver\Exception\Exception $e) {
    die("Error Encountered:" . $e);
}