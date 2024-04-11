<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include ('../connection.php');

    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $info = $_POST['info'];


    $sql = "INSERT INTO contact (naam, email, tel, info) VALUES (:naam, :email, :tel, :info)";
    $stmt = $conn->prepare($sql);


    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':info', $info);
    $stmt->execute();

    try {

        header("Location: ../contact.php");
        exit();
    } catch (PDOException $e) {

        die("Error: " . $e->getMessage());
    }
}
?>