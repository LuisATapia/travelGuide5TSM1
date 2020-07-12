<?php
    session_start();
    include 'db.inc.php';
    $email = $_POST["loginEmail"];
    $password = $_POST["loginPassword"];

    $filter = [
        'email' => $email,
        'password' => $password
    ];
    $query = new MongoDB\Driver\Query($filter);

    try {
        $result = $manager->executeQuery($dbname, $query);
        $row=$result->toArray();
        $user=$row[0]->typeUser;
        $idUser=$row[0]->_id;
        $_SESSION['typeUser']=$user;
        $_SESSION['idUser']=$idUser;
        header("Location: ../../menu_Master.php");
    } catch (MongoDB\Driver\Exception\Exception $e) {
        die("Error Encountered:" . $e);
    }
