<?php
session_start();

include ("../connection.php");

$user = $_POST['username'];
$pass = $_POST['password'];

$query = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
$query->bindParam(":username", $user);
$query->bindParam(":password", $pass);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);

if ($user) {
    
    echo "Succesvol ingelogd";

}
if (!$user) {

    echo "Geen account gevonden";

}
if (!$pass) {

    echo "Wachtwoord niet correct";

}