<?php
session_start();
include 'db.cars.php';
$id = $_SESSION['idUser'];

$filter = [
    'idUser' => $id,
];
$query = new MongoDB\Driver\Query($filter);

try {
    $result = $manager->executeQuery($dbname, $query);
    $row = $result->toArray();
    if (!isset($row)) {
        $niv = $row[0]->niv;
        $model = $row[0]->model;
        $year = $row[0]->year;
        $plate = $row[0]->plate;
        $color = $row[0]->color;
        $sol="";
    } else {
        $niv = "Sin Asignar";
        $model = "Sin Asignar";
        $year = "Sin Asignar";
        $plate = "Sin Asignar";
        $color ="Sin Asignar";
        $sol="Solicita una asignacion";
    }

    //header("Location: ../../menu_Master.php");
} catch (MongoDB\Driver\Exception\Exception $e) {
    die("Error Encountered:" . $e);
}
