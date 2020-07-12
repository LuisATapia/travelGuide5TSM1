<?php
    include '../Users/db.inc.php';
    $emailUser=$_POST['emailUser'];

    $filter = [
        'email' => $emailUser
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
    /******************************/
    include 'db.cards.php';
    $bulk= new MongoDB\Driver\BulkWrite;

    $id= $_POST["idCard"];
    $numHex= $_POST["updateHex"];
    $numDec= $_POST["updateDec"];

    try{
        $bulk->update(['_id' => new MongoDB\BSON\ObjectId($id)],
        [
            'numHexadecimal'=>$numHex,
            'numDecimal'=>$numDec,
            'idUser'=>$idUser
        ]);
        $result= $manager->executeBulkWrite($dbname,$bulk);
        header("Location: ../../show_Cards.php");

    }catch(MongoDB\Driver\Exception\Exception $e)
    {
        die("Error:" .$e);
    }
