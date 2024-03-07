<html>
<head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "" 

try {
    $conn = new PDO("mysql:host=$servername;dbname=pizzadb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$stmt = $conn->prepare("SELECT gebruikersnaam, wachtwoord FROM users");
$stmt->execute();
$result = $stmt->fetchAll();

foreach ($result as $row){
    echo '<h1>'. $row["gebruikersnaam"] . '</h1>';
    echo '<h3>'. $row["wachtwoord"] . '</h3>';

}

?>

</body>

</head>
</html>
