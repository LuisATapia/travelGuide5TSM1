<?php
    include 'db.cards.php';

    $bulk= new MongoDB\Driver\BulkWrite;

    $id= $_POST["id"];
    $numHex= $_POST["updateHex"];
    $numDec= $_POST["updateDec"];
    $user=$_POST["idUser"];

    try{
        $bulk->update(['_id' => new MongoDB\BSON\ObjectId($id)],
        [
            'numHexadecimal'=>$numHex,
            'numDecimal'=>$numDec,
            'idUser'=>$user
        ]);
        $result= $manager->executeBulkWrite($dbname,$bulk);
        header("Location: ../../show_Cards.php");

    }catch(MongoDB\Driver\Exception\Exception $e)
    {
        die("Error:" .$e);
    }