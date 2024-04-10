<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('../connection.php');

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    // Prepare statement to avoid SQL injection
    $sql = "INSERT INTO products (name, description, price, img) VALUES (:name, :description, :price, :img)";
    $stmt = $conn->prepare($sql);

    // Bind parameters to statement
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':img', $img);

    // Execute the statement and check for errors
    try {
        $stmt->execute();
        header("Location: ../admin.php");
        exit(); // Make sure to exit after a header redirect
    } catch (PDOException $e) {
        // Handle error
        die("Error: " . $e->getMessage());
    }
}
?>
