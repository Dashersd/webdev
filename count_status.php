<?php
 $host = "sql212.infinityfree.com";
    $db_username = "if0_35772382";
    $db_password = "sT3yQomameGwU";
    $db_name = "if0_35772382_users";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$countQueryFailed = "SELECT COUNT(*) AS failedCount FROM patient WHERE status = 'Failed'";
$failedResult = $mysqli->query($countQueryFailed);

$failedCount = 0;
if ($failedResult) {
    $failedRow = $failedResult->fetch_assoc();
    $failedCount = $failedRow["failedCount"];
    $failedResult->close();
}

$countQuerySurvive = "SELECT COUNT(*) AS surviveCount FROM patient WHERE status = 'Survive'";
$surviveResult = $mysqli->query($countQuerySurvive);

$surviveCount = 0;
if ($surviveResult) {
    $surviveRow = $surviveResult->fetch_assoc();
    $surviveCount = $surviveRow["surviveCount"];
    $surviveResult->close();
}

$mysqli->close();

$counts = array("failedCount" => $failedCount, "surviveCount" => $surviveCount);

header('Content-Type: application/json');
echo json_encode($counts);
?>