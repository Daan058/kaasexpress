<?php
session_start(); 
include ('header.php'); 
include ('connection.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Producten Overzicht</title>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
</head>

<body>

    <div class="producten">
        <?php
        if (isset($_SESSION['search_results'])) {
            $results = $_SESSION['search_results'];
            unset($_SESSION['search_results']);
        } else {
            $sql = "SELECT * FROM products";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();
        }

        foreach ($results as $product) {
            echo '<div class="product">';
            echo '<h1 class="product-name">' . $product['name'] . '</h1>';
            echo '<h2 class="product-description">' . $product['description'] . '</h2>';
            echo '<h3 class="product-price"> €' . $product['price'] . '</h3>';
            echo '</div>';
        }
        
        ?>
    </div>

    <?php include ('footer.php');   ?>
</body>

</html>