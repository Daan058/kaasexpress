<?php
include('..\/connection.php');

$user = $_POST['username'];
$pass = $_POST['password'];
$role = 'user';

$sql = "INSERT INTO users (username, password, role) VALUES ('$user', '$pass', '$role')";

$conn->exec($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: ../inloggen.php");
}
