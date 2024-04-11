<?php
include ('..\/connection.php');

$id = $_POST['id'];


$sql = "DELETE FROM contact WHERE id = '$id';";

$conn->exec($sql);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: ../admin.php");
}
