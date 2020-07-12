
<?php
/***************USER */
include '../Users/db.inc.php';
$emailUser = $_POST['emailUser'];

$filter = [
    'email' => $emailUser
];
$query = new MongoDB\Driver\Query($filter);

try {
    $result = $manager->executeQuery($dbname, $query);
    $row = $result->toArray();
    $idUser = $row[0]->_id;
    //header("Location: ../../menu_Master.php");
} catch (MongoDB\Driver\Exception\Exception $e) {
    die("Error Encountered:" . $e);
}

/********************CAR */
include 'db.cars.php';

$bulk = new MongoDB\Driver\BulkWrite;

$id = $_POST["idCar"];
$niv = $_POST["updateNiv"];
$model = $_POST["updateModel"];
$plate = $_POST["updatePlate"];
$year = $_POST["updateYear"];
$color = $_POST["updateColor"];

try {
    $bulk->update(
        ['_id' => new MongoDB\BSON\ObjectId($id)],
        [
            'niv' => $niv,
            'model' => $model,
            'plate' => $plate,
            'year' => $year,
            'color' => $color,
            'idUser'=>$idUser
        ]
    );
    $result = $manager->executeBulkWrite($dbname, $bulk);
    header("Location: ../../show_Cars.php");
} catch (MongoDB\Driver\Exception\Exception $e) {
    die("Error:" . $e);
}
