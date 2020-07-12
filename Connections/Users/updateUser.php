<?php
include 'db.inc.php';

$bulk = new MongoDB\Driver\BulkWrite;
if (isset($_POST["updateType"])) {
    $type = $_POST["updateType"];
} else {
    $type = "user";
}
//SiCOv EMpresa Bachilu
if (isset($_POST["updatePass"]) || (isset($_POST["updatePassc"]))) {
    $password = $_POST["passRes"];
} else {
    $password = $_POST["updatePass"];
}
$id=$_POST["id"];
$name = $_POST["updateName"];
$lastname = $_POST["updateLast"];
$curp = $_POST["updateCurp"];
$typeUser = $type;
$email = $_POST["updateEmail"];
//$password = $_POST["inputPassword"];

try {
    $bulk->update(
        ['_id' => new MongoDB\BSON\ObjectId($id)],
        [
            'name' => $name,
            'lastname' => $lastname,
            'curp' => $curp,
            'typeUser' => $typeUser,
            'email' => $email,
            'password' => $password
        ]
    );
    $result = $manager->executeBulkWrite($dbname, $bulk);
    header("Location: ../../show_Users.php");
} catch (MongoDB\Driver\Exception\Exception $e) {
    die("Error:" . $e);
}
