<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('../connection.php');

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $img = $_POST['img'];


    $sql = "INSERT INTO products (name, description, price, img) VALUES (:name, :description, :price, :img)";
    $stmt = $conn->prepare($sql);


    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':img', $img);

    
    try {
        $stmt->execute();
        header("Location: ../admin.php");
        exit();
    } catch (PDOException $e) {
        
        die("Error: " . $e->getMessage());
    }
}
?>
