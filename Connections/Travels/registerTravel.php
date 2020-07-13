<?php

session_start();
    if($_SESSION['typeUser']=="user")
    {
        $idUser=$_SESSION['idUser'];
    }
    else
    {
        include '../Cards/db.cards.php';
        $num=$_POST["traHex"];
    
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
    }
    

/*****************************/
include 'db.travels.php';
$bulk= new MongoDB\Driver\BulkWrite;

$num=$_POST["traHex"];
$name=$_POST["traBooth"];
$toll=$_POST["traToll"];

$travel=[
    "_id"=>new MongoDB\BSON\ObjectId,
    "numCard"=> $num,
    'booth'=>$name,
    'toll'=>$toll,
    'idUser'=>$idUser,
    'date'=>date("Y-m-d H:i:s")
];

try{
    $bulk->insert($travel);
    $result=$manager->executeBulkWrite($dbname,$bulk);
    header("Location: ../../show_Travels.php");
}catch(MongoDB\Exception\Exception $e){
    die("Error Encourented".$e);
}//2916235D2744C2ED