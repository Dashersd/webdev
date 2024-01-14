<?php
 $host = "sql212.infinityfree.com";
    $db_username = "if0_35772382";
    $db_password = "sT3yQomameGwU";
    $db_name = "if0_35772382_users";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch transactions and calculate daily sales (sum of total for all products)
$countQueryDailySales = "SELECT SUM(total) AS dailySales FROM transaction";
$dailySalesResult = $mysqli->query($countQueryDailySales);

$dailySales = 0;
if ($dailySalesResult) {
    $dailySalesRow = $dailySalesResult->fetch_assoc();
    $dailySales = $dailySalesRow["dailySales"];
    $dailySalesResult->close();
}

$mysqli->close();

header('Content-Type: application/json');
echo json_encode(array("dailySales" => $dailySales));
?>
