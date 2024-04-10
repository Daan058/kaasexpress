<?php
include ('..\/connection.php');


$sql = "DELETE FROM reserveringen where id =:id";

$conn->exec($sql);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: ../admin.php");
}
