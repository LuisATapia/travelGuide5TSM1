<?php
include 'db.booth.php';

$bulk  = new MongoDB\Driver\BulkWrite;

$id= $_GET["id"];

try{
    $bulk->delete(['_id'=>new MongoDB\BSON\ObjectId($id)]);
    $result=$manager->ExecuteBulkWrite($dbname,$bulk);
    header("Location: ../../show_TollBooth.php");
}catch(MongoDB\Driver\Esception\Exception $e)
{
    die ("Error".$e);
}