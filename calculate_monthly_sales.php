<?php
 $host = "sql212.infinityfree.com";
    $db_username = "if0_35772382";
    $db_password = "sT3yQomameGwU";
    $db_name = "if0_35772382_users";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch transactions and calculate total sales (sum of total for all products)
$countQueryTotalSales = "SELECT SUM(total) AS totalSales FROM transaction";
$totalSalesResult = $mysqli->query($countQueryTotalSales);

$totalSales = 0;
if ($totalSalesResult) {
    $totalSalesRow = $totalSalesResult->fetch_assoc();
    $totalSales = $totalSalesRow["totalSales"];
    $totalSalesResult->close();
}

// Calculate monthly sales (7 times the total sales)
$monthlySales = $totalSales * 7;

$mysqli->close();

header('Content-Type: application/json');
echo json_encode(array("monthlySales" => $monthlySales));
?>
