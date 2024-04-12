<?php
session_start();
include ('../connection.php');

$search_query = $_POST['zoek'];

$sql = "SELECT * FROM products WHERE name LIKE :search_query ORDER BY (name LIKE :search_query_starts) DESC";
$stmt = $conn->prepare($sql);
$stmt->execute([
    'search_query' => "%$search_query%",
    'search_query_starts' => "$search_query%"
]);
$products = $stmt->fetchAll();

if ($stmt->rowCount() > 0) {
    $_SESSION['search_results'] = $products; 
    header("location: ../products.php");
} else {
    echo "Geen resultaten gevonden";
}
?>
