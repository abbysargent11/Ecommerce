<?php

require_once "config.php";

if(isset($_POST['firstname']) &&
isset($_POST['lastname']) &&
isset($_POST['username']) &&
isset($_POST['password'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $id = NULL;

    $conn = new mysqli($hn,$un,$pw,$db);
    if ($conn->connect_error) die ("Fatal error on connect");

    $stmt = $conn->prepare('INSERT INTO users VALUES(?,?,?,?,?)');

    $stmt->bind_param('sssss', $id, $firstname, $lastname, $username, $password);

    $stmt->execute();

    $stmt->close();
    $conn->close();

    header('Location: signin.html');
}




?>