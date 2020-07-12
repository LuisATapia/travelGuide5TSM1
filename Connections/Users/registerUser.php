<?php
   include 'db.inc.php';
    $bulk = new MongoDB\Driver\BulkWrite;

    if(isset($_POST["inputTypeUser"]))
    {
        $type=$_POST["inputTypeUser"];
    }else{
        $type="user";
    }
    $name = $_POST["inputName"];
    $lastname = $_POST["inputLastName"];
    $curp = $_POST["inputCurp"];
    $typeUser = $type;
    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];

    $user = [
        '_id' => new MongoDB\BSON\ObjectId,
        'name' => $name, 
        'lastname' => $lastname,
        'curp' => $curp,
        'typeUser'=>$typeUser,
        'email' => $email, 
        'password' => $password
    ];

    try{
        $bulk->insert($user);
        $result = $manager->executeBulkWrite($dbname, $bulk);
        header("Location: ../../sing_in.php");
    }   catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered: ".$e);
    }