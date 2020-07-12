<?php
include 'db.booth.php';
$bulk= new MongoDB\Driver\BulkWrite;

$name=$_POST["bootName"];
$km=$_POST["bootKm"];

$booth=[
    '_id'=>new MongoDB\BSON\ObjectId,
    'name'=>$name,
    'km'=>$km
];

try{
    $bulk->insert($booth);
    $result=$manager->executeBulkWrite($dbname,$bulk);
    header("Location: ../../show_tollBooth.php");

}catch(MongoDB\Exception\Exception $e){
    die("Error Encourented".$e);
}