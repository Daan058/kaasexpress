<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include ('../connection.php');

    $naam = $_POST['naam'];
    $datum = $_POST['datum'];
    $tijd = $_POST['tijd'];
    $extra = $_POST['extra'];


    $sql = "INSERT INTO resarveringen (naam, datum, tijd, extra) VALUES (:naam, :datum, :tijd, :extra)";
    $stmt = $conn->prepare($sql);


    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':datum', $datum);
    $stmt->bindParam(':tijd', $tijd);
    $stmt->bindParam(':extra', $extra);


    try {
        $stmt->execute();
        header("Location: ../resarveren.php");
        exit();
    } catch (PDOException $e) {

        die("Error: " . $e->getMessage());
    }
}
?>