<?php
session_start();
include 'db.travels.php';
$bulk= new MongoDB\Driver\BulkWrite;

$num=$_POST["traHex"];
$name=$_POST["traBooth"];
$toll=$_POST["traToll"];

$travel=[
    "_id"=>new MongoDB\BSON\ObjectId,
    "nunCard"=> $num,
    'booth'=>$name,
    'toll'=>$toll,
    'idUser'=>$_SESSION['idUser']
];

try{
    $bulk->insert($travel);
    $result=$manager->executeBulkWrite($dbname,$bulk);
    header("Location: ../../show_Travels.php");
}catch(MongoDB\Exception\Exception $e){
    die("Error Encourented".$e);
}//2916235D2744C2ED