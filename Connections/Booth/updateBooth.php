<?php
include 'db.booth.php';

$bulk= new  mongoDB\Driver\BulkWrite;
$id=$_POST["id"];
$name=$_POST["updateName"];
$km=$_POST["updateKm"];

try{
    $bulk->update(['_id'=> new MongoDB\BSON\ObjectId($id)],
[
    'name'=>$name,
    'km'=>$km
]);
$result=$manager->executeBulkWrite($dbname,$bulk);
header("Location: ../../show_TollBooth.php");
}catch(MongoBD\Driver\Exception\Exception $e)
{
die("Error: ".$e);
}
