<?php
    include 'db.cards.php';
    $bulk = new MongoDB\Driver\BulkWrite;

    $cardH = $_POST["cardHex"];
    $cardD= $_POST["cardDec"];
    $user= $_POST["cardIdUser"];

    $card=[
        '_id'=>new MongoDB\BSON\ObjectId,
        'numHexadecimal'=>$cardH,
        'numDecimal'=>$cardD,
        'idUser'=>$user

    ];
    try{
        $bulk->insert($card);
        $result=$manager->executeBulkWrite($dbname,$bulk);
        header("Location: ../../show_Cards.php");

    }catch(MongoDB\Drive\Exception\Exception $e)
    {
        die("Error Encoutered:".$e);
    }