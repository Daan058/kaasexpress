<?php

include ("../connection.php");

$user = $_POST['username'];
$pass = $_POST['password'];

$query = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
$query->bindParam(":username", $user);
$query->bindParam(":password", $pass);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);

if ($user) {

    session_start();
    if($user['role'] == 'admin'){
        header('location: ../admin.php');
    }
    else{
        header('location: ../index.php');
    }

}
if (!$user) {

    echo "Geen account met deze combinatie gevonden.";

}
